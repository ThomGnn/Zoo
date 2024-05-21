<?php
// Récupérer les données du formulaire
$titre = $_POST['titre'];
$description = $_POST['description'];
$email = $_POST['email'];

// Adresse email destinataire
$destinataire = 'zoo@gmail.com';

// Sujet de l'email
$sujet = 'Nouveau message de contact - ' . $titre;

// Corps de l'email
$message = "Titre : $titre\n\n";
$message .= "Description :\n$description\n\n";
$message .= "Email de l'expéditeur : $email";

// En-têtes de l'email
$headers = "From: $email";

// Envoyer l'email
if (mail($destinataire, $sujet, $message, $headers)) {
    echo "Votre message a été envoyé avec succès. Nous vous répondrons dès que possible.";
} else {
    echo "Une erreur s'est produite lors de l'envoi de votre message. Veuillez réessayer.";
}
?>
