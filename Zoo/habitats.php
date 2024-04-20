<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoo</title>
    <link href="styleHabitat.css" rel="stylesheet" type="text/css" />
    <script src="script2.js" defer></script>
</head>

<body>
    <h2>Voici les différents habitats</h2>
    <h4>Clique sur ton habitat favori pour en savoir plus</h4>

    <!-- La Jungle -->
    <div class="habitat" id="jungle">
        <h3>La jungle</h3>
        <img src="jungle.jpg" alt="Jungle">
    </div>
    <div class="animal-details" id="jungle-details">
        <h4>Description</h4>
        <p>Habitat luxuriant et dense, abritant une multitude de créatures exotiques et colorées, offrant aux visiteurs
            une immersion totale dans un écosystème tropical fascinant.</p>
        <h4>Liste des animaux</h4>
        <p>Clique pour voir le détail</p>
        <ul>
          <div class="singe">
            <li onclick="showAnimalDetail('singe')" data-animal="singe">Singe</li>
          </div>
          <div class="felin">
            <li onclick="showAnimalDetail('felin')" data-animal="felin">Félin</li>
          </div>
        </ul>

        <!-- Détails du singe -->
        <div class="animal-details" id="singe-details">
            <h4>Détails du singe</h4>
            <div id="singe-detail">
                <img src="Roger.jpg" alt="Roger" style="width: 40%; height: auto;">
                <p>Nom : <span id="NomSinge"></span></p>
                <p>Espèce : <span id="EspeceSinge"></span></p>
                <p>Habitat : <span id="HabitatSinge"></span></p>
            </div>
        </div>

        <!-- Détails du félin -->
        <div class="animal-details" id="felin-details">
            <h4>Détails du félin</h4>
            <div id="felin-detail">
                <img src="O'Malley.jpg" alt="O'Malley" style="width: 40%; height: auto;">
                <p>Nom : <span id="NomFelin"></span></p>
                <p>Espèce : <span id="EspeceFelin"></span></p>
                <p>Habitat : <span id="HabitatFelin"></span></p>
            </div>
        </div>
    </div>

    <!-- Le Marais -->
    <div class="habitat" id="marais">
        <h3>Le marais</h3>
        <img src="marais.jpg" alt="Marais">
    </div>
    <div class="animal-details" id="marais-details">
        <!-- Détails des animaux du marais -->
        <h4>Description</h4>
        <p>Le marais, un écosystème humide et fertile, abrite une variété d'espèces aquatiques et terrestres, offrant un
            habitat riche en biodiversité et en interactions écologiques uniques.</p>
        <h4>Liste des animaux</h4>
        <p>Clique pour voir le détail</p>
        <ul>
          <div class="grenouille">
            <li onclick="showAnimalDetail('grenouille')" data-animal="grenouille">Grenouille</li>
          </div>
          <div class="oiseau">
            <li onclick="showAnimalDetail('oiseau')" data-animal="oiseau">Oiseau</li>
          </div>
        </ul>

        <!-- Détails de la grenouille -->
        <div class="animal-details" id="grenouille-details">
            <h4>Détails de la grenouille</h4>
            <div id="grenouille-detail">
                <img src="Yvette.jpg" alt="Yvette" style="width: 40%; height: auto;">
                <p>Nom : <span id="NomGrenouille"></span></p>
                <p>Espèce : <span id="EspeceGrenouille"></span></p>
                <p>Habitat : <span id="HabitatGrenouille"></span></p>
            </div>
        </div>

        <!-- Détails de l'oiseau -->
        <div class=" animal-details" id="oiseau-details">
            <h4>Détails de l'oiseau</h4>
            <div id="oiseau-detail">
                <img src="Jean.jpg" alt="Jean" style="width: 40%; height: auto;">
                <p>Nom : <span id="NomOiseau"></span></p>
                <p>Espèce : <span id="EspeceOiseau"></span></p>
                <p>Habitat : <span id="HabitatOiseau"></span></p>
            </div>
        </div>
    </div>


    <!-- La Savane -->
    <div class="habitat" id="savane">
        <h3>La savane</h3>
        <img src="savane.jpg" alt="Savane">
    </div>
    <div class="animal-details" id="savane-details">
        <!-- Détails des animaux de la savane -->
        <h4>Description</h4>
        <p>La savane, vaste étendue herbeuse parsemée d'arbres dispersés, accueille une diversité d'animaux
            emblématiques tels que les lions, les éléphants et les girafes, offrant aux visiteurs une expérience
            immersive dans les paysages majestueux de l'Afrique.</p>
      <h4>Liste des animaux</h4>
      <p>Clique pour voir le détail</p>
        <ul>
          <div class="girafe">
            <li onclick="showAnimalDetail('girafe')" data-animal="girafe">Girafe</li>
          </div>
          <div class="elephant">
            <li onclick="showAnimalDetail('elephant')" data-animal="elephant">Elephant</li>
          </div>
        </ul>

        <!-- Détails de la grenouille -->
        <div class="animal-details" id="girafe-details">
            <h4>Détails de la girafe</h4>
            <div id="girafe-detail">
                <img src="Caroline.jpg" alt="Caroline" style="width: 40%; height: auto;">
                <p>Nom : <span id="NomGirafe"></span></p>
                <p>Espèce : <span id="EspeceGirafe"></span></p>
                <p>Habitat : <span id="HabitatGirafe"></span></p>
            </div>
        </div>

        <!-- Détails de l'oiseau -->
        <div class=" animal-details" id="elephant-details">
            <h4>Détails de l'éléphant</h4>
            <div id="elephant-detail">
                <img src="Dumbo.jpg" alt="Dumbo" style="width: 40%; height: auto;">
                <p>Nom : <span id="NomElephant"></span></p>
                <p>Espèce : <span id="EspeceElephant"></span></p>
                <p>Habitat : <span id="HabitatElephant"></span></p>
            </div>
        </div>
    </div>
    <div class="titreVeto">
    <h3>Informations du vétérinaire</h3>
    </div>
    </br>
    <div class=infoVeto>
    <p>Test d'affichage du code au clic</p>
    <?php
    // Connexion à la base de données (à remplacer avec vos informations de connexion)
    $servername = "localhost";
    $username = "root";t
    $password = "root";
    $dbname = "veterinaire_db";

    // Créer une connexion
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Vérifier la connexion
    if ($conn->connect_error) {
        die("La connexion a échoué : " . $conn->connect_error);
    }

    // Récupérer les données depuis la base de données
    $sql = "SELECT * FROM visites_veterinaire";
    $result = $conn->query($sql);

    // Afficher les données dans la page
    if ($result->num_rows > 0) {
        // Afficher les données sous forme de liste
        echo "<ul>";
        while($row = $result->fetch_assoc()) {
            echo "<ul>
            <li>Espèce de l'animal : " . $row["animal_type"]. "</li>
            <li>Nom de l'animal : " . $row["animal_name"]. "</li>
            <li>État de l'animal : " . $row["animal_state"]. "</li>
            <li>Nourriture proposée : " . $row["proposed_food"]. "</li>
            <li>Quantité de nourriture : " . $row["food_weight"]. "</li>
            <li>Date du passage : " . $row["visit_date"]. "</li>
            <li>Avis du vétérinaire (facultatif) : " . $row["animal_condition_details"]. "</li>
            </ul>
            </br>
            ";
        }
        echo "</ul>";
    } else {
        echo "Aucune donnée disponible.";
    }

    // Fermer la connexion
    $conn->close();
    ?>
    </div>


</body>

</html>