<?php
$pdo = new PDO(dsn: 'mysql:host=localhost;port8889;dbname=users_management','root','');
  $statement = $pdo->prepare(statement : 'INSERT INTO users VALUES (:email, :password, :role)')
// Connexion à la base de données avec PDO
$db_host = 'localhost';
$db_name = 'connexion';
$db_user = 'root';
$db_password = 'root';

try {
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_password);
    // Configurer PDO pour qu'il émette des exceptions en cas d'erreur
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Connexion à la base de données réussie.';
} catch (PDOException $e) {
    echo 'Erreur de connexion à la base de données : ' . $e->getMessage();
    exit();
}

// Vérification des données soumises par le formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $role = $_POST["role"];

    // Préparation de la requête SQL pour récupérer l'utilisateur correspondant
    $sql = "SELECT * FROM utilisateurs WHERE email = :email AND role = :role";
    $statement = $pdo->prepare($sql);
    $statement->execute(['email' => $email, 'role' => $role]);
    $user = $statement->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        // Vérification du mot de passe
        if (password_verify($password, $user["mot_de_passe"])) {
            // Redirection vers la page appropriée après la connexion
            switch ($role) {
                case "veterinaire":
                    header("Location: veterinaire.php");
                    break;
                case "employe":
                    header("Location: employe.php");
                    break;
                case "administrateur":
                    header("Location: administrateur.php");
                    break;
                default:
                    header("Location: index.php");
            }
            exit();
        } else {
            echo "Mot de passe incorrect";
        }
    } else {
        echo "Utilisateur non trouvé";
    }
}
?>