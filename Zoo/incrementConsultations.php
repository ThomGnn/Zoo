<?php
// Vérifier si le paramètre animal a été transmis
if (isset($_POST['animal'])) {
    $animalName = $_POST['animal'];

    // Se connecter à la base de données MongoDB
    $mongoClient = new MongoDB\Client("mongodb://localhost:27017");
    $visitorsDB = $mongoClient->visitors;
    $animalCollection = $visitorsDB->animal;

    // Rechercher l'animal dans la collection
    $animal = $animalCollection->findOne(['nom' => $animalName]);

    // Vérifier si l'animal a été trouvé
    if ($animal) {
        // Incrémenter le nombre de consultations
        $newConsultations = $animal['consultations'] + 1;

        // Mettre à jour le document dans la collection
        $result = $animalCollection->updateOne(
            ['nom' => $animalName],
            ['$set' => ['consultations' => $newConsultations]]
        );

        if ($result->getModifiedCount() > 0) {
            echo "Consultations pour $animalName incrémentées avec succès.";
        } else {
            echo "Échec de l'incrémentation des consultations pour $animalName.";
        }
    } else {
        echo "Animal non trouvé dans la base de données.";
    }
}
?>
