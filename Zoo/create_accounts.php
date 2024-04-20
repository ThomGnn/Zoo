<?php
// Récupérer les emails des employés et des vétérinaires depuis le formulaire
$employee_email = $_POST['employee_email'];
$vet_email = $_POST['vet_email'];

// Générer un identifiant (username) pour chaque utilisateur
$employee_username = generateUsername();
$vet_username = generateUsername();

// Envoyer un email à chaque utilisateur avec son identifiant
sendEmail($employee_email, $employee_username);
sendEmail($vet_email, $vet_username);

// Fonction pour générer un identifiant (username) aléatoire
function generateUsername() {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $username = '';
    $length = 8; // Longueur de l'identifiant (username)

    // Générer un identifiant aléatoire en mélangeant les caractères
    for ($i = 0; $i < $length; $i++) {
        $username .= $characters[rand(0, strlen($characters) - 1)];
    }

    return $username;
}

// Fonction pour envoyer un email à un utilisateur avec son identifiant
function sendEmail($email, $username) {
    $to = $email;
    $subject = 'Création de compte';
    $message = "Bonjour,\n\nVotre identifiant pour accéder à votre compte est : $username\n\nCordialement,\nL'équipe administrateur";
    $headers = 'From: administrateur@gmail.com';

    // Envoyer l'email
    mail($to, $subject, $message, $headers);
}

// Rediriger l'utilisateur vers une page de confirmation
header('Location: confirmation_page.html');
exit(); // Assurez-vous de terminer le script après la redirection
?>
