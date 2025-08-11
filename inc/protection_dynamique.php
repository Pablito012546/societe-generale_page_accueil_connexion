<?php
// Démarrer la session pour stocker le temps de chargement


// Sauvegarder l'heure de chargement de la page
// On ne le fait que si ce n'est pas une soumission de formulaire
if (!isset($_POST['load_time'])) {
    $_SESSION['load_time'] = time();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 1. Vérification Honeypot
    // Si le champ 'url' (honeypot) est rempli, c'est probablement un bot
    if (!empty($_POST['url'])) {
        die("Accès interdit.");
    }

    // 2. Vérification JavaScript
    // Si le champ 'js_check' n'a pas la valeur '1', c'est probablement un bot sans JS
    if (!isset($_POST['js_check']) || $_POST['js_check'] !== '1') {
        die("Accès interdit.");
    }

    // 3. Vérification du temps de soumission
    // Si le formulaire est soumis trop rapidement, c'est probablement un bot
    $load_time = isset($_POST['load_time']) ? (int)$_POST['load_time'] : 0;
    $submission_time = time();

    // On s'assure que le temps de chargement est valide et que la soumission n'est pas instantanée
    if (($submission_time - $load_time) < 3) { // 3 secondes
        die("Accès interdit.");
    }

    // Si toutes les vérifications sont passées
    echo "Accès autorisé ! Bonjour, humain.";
}
?>