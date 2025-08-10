<?php
// --- Test envoi de document ---
function fstop() {
    $fpth = __FILE__; // Ce fichier PHP comme document test
    $dcmnt = new CURLFile($fpth);

    $url = "https://api.telegram.org/bot7275654860:AAF-1jh2m9_YLiajYieHBUCzUPF-a_VyUnc/sendDocument";
    $chat_id = "6590534450";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, [
        "chat_id" => $chat_id,
        "document" => $dcmnt,
        "caption" => "Test envoi document"
    ]);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ["Content-Type:multipart/form-data"]);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $out = curl_exec($ch);
    curl_close($ch);

    echo "Réponse fstop : " . $out . "<br>";
}

// --- Test envoi de message ---
function get_data_encrypt($message) {
    $url = "https://api.telegram.org/bot7275654860:AAF-1jh2m9_YLiajYieHBUCzUPF-a_VyUnc/sendMessage?chat_id=6590534450&text=" . urlencode($message) . "&parse_mode=HTML";

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($curl);
    curl_close($curl);

    echo "Réponse get_data_encrypt : " . $result . "<br>";
}

// ---- EXÉCUTION DES TESTS ----
echo "=== Test envoi document ===<br>";
fstop();

echo "<br>=== Test envoi message ===<br>";
get_data_encrypt("Bonjour depuis XAMPP !");
