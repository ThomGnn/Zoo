<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Récupérer les données du formulaire
if(isset($_POST['email']) && isset($_POST['password']) && isset($_POST['role'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    // Log form data for debugging
    error_log('Email: ' . $email . ', Role: ' . $role);

    // Vérifier les informations de connexion
    if (($email === 'administrateur@gmail.com' && $password === 'BernadetteLaHyene' && $role === 'administrateur') || 
        ($email === 'veterinaire@gmail.com' && $password === 'CarolineLaGirafe' && $role === 'veterinaire') || 
        ($email === 'employe@gmail.com' && $password === 'EdouardLeSinge' && $role === 'employe')) {

        // Rediriger l'utilisateur en fonction du rôle
        if ($role === 'administrateur') {
            header('Location: admin.html');
            exit();
        } else if ($role === 'veterinaire') {
            header('Location: veto.html');
            exit();
        } else {
            header('Location: employe.html');
            exit();
        }
    } else {
        // Si les informations de connexion sont incorrectes, afficher un message d'erreur
        error_log('Login incorrect'); // Log login error for debugging
        header('Location: connexion.html'); // Update the path for online environment
        exit();
    }
} else {
    echo "Données manquantes. Veuillez remplir le formulaire.";
}
?>