<?php
// Récupérer les nouvelles descriptions des services depuis le formulaire
$new_restoration_description = $_POST['restoration_description'] ?? '';
$new_habitat_description = $_POST['habitat_description'] ?? '';
$new_train_description = $_POST['train_description'] ?? '';

// Lire le contenu actuel du fichier services.html
$html_content = file_get_contents('services.html');

// Remplacer les descriptions existantes par les nouvelles
$html_content = preg_replace('/<span id="restoration_placeholder"><\/span>/', $new_restoration_description, $html_content);
$html_content = preg_replace('/<span id="habitat_placeholder"><\/span>/', $new_habitat_description, $html_content);
$html_content = preg_replace('/<span id="train_placeholder"><\/span>/', $new_train_description, $html_content);

// Écrire le contenu mis à jour dans le fichier services.html
file_put_contents('services.html', $html_content);

// Rediriger l'utilisateur vers la page services.html
header('Location: services.html');
exit;
?>
