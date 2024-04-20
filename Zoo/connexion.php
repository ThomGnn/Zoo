<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Récupérer les données du formulaire
$email = $_POST['email'];
$password = $_POST['password'];
$role = $_POST['role'];

// Vérifier les informations de connexion
if (($email === 'administrateur@gmail.com' && $password === 'BernadetteLaHyene' && $role === 'administrateur') || 
    ($email === 'veterinaire@gmail.com' && $password === 'CarolineLaGirafe' && $role === 'veterinaire') || 
    ($email === 'employe@gmail.com' && $password === 'EdouardLeSinge' && $role === 'employe')) {

    // Rediriger l'utilisateur vers la page admin.html pour les administrateurs, veterinaire.html pour les vétérinaires, et une autre page pour les employés
    if ($role === 'administrateur') {
        header('Location: admin.html');
    } else if ($role === 'veterinaire') {
        header('Location: veterinaire.html');
    } else {
        header('Location: employe.html'); // Redirection vers une page spécifique pour les employés
    }
    exit(); // Assurez-vous de terminer le script après la redirection
} else {
    // Si les informations de connexion sont incorrectes, afficher un message d'erreur
    echo "Identifiants incorrects. Veuillez réessayer.";
}
?>
