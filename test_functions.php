<?php
require __DIR__ . '/inc/functions.php';

// Test d'envoi via ton bot
telegram_send("Test depuis XAMPP avec mon bot", "UTF-8");

echo "Message envoyé à Telegram";
