<?php
// Connexion à la base de données (à remplacer avec vos informations de connexion)
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "veterinaire_db";

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
}

// Récupérer les données saisies par le vétérinaire
$animal_type = $_POST['animal_type'];
$animal_name = $_POST['animal_name'];
$animal_state = $_POST['animal_state'];
$proposed_food = $_POST['proposed_food'];
$food_weight = $_POST['food_weight'];
$visit_date = $_POST['visit_date'];
$animal_condition_details = $_POST['animal_condition_details'];

// Préparer la requête d'insertion
$sql = "INSERT INTO visites_veterinaire (animal_type, animal_name, animal_state, proposed_food, food_weight, visit_date, animal_condition_details)
        VALUES ('$animal_type','$animal_name','$animal_state', '$proposed_food', '$food_weight', '$visit_date', '$animal_condition_details')";

// Exécuter la requête
if ($conn->query($sql) === TRUE) {
    echo "Enregistrement effectué avec succès.";
} else {
    echo "Erreur lors de l'enregistrement : " . $conn->error;
}

// Fermer la connexion
$conn->close();
?>
