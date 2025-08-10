<?php
$token = "7275654860:AAF-1jh2m9_YLiajYieHBUCzUPF-a_VyUnc";
$chat_id = "6590534450";

// Chemin vers le fichier à envoyer
$file_path = __FILE__; // envoie ce fichier pour le test

$url = "https://api.telegram.org/bot$token/sendDocument";

$post_fields = [
    'chat_id' => $chat_id,
    'document' => new CURLFile(realpath($file_path)),
    'caption' => "Test envoi de fichier"
];

$ch = curl_init();
curl_setopt($ch, CURLOPT_HTTPHEADER, ["Content-Type:multipart/form-data"]);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_fields);

$response = curl_exec($ch);
curl_close($ch);

echo "Réponse Telegram : $response";
