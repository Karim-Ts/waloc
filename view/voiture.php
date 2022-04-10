<?php
session_start();

error_reporting(E_ALL);
ini_set("display_errors", 1);

include "../controller/pdo.php";
include "../model/voiture.php";

$utilisateur = 'root';
$mdp = 'root';

$link = new PDO('mysql:host=localhost;dbname=waloc;', $utilisateur, $mdp);

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/voiture.css">
    <title>Voiture - Waloc</title>
</head>
<body>

    <?php
        include "../component/navbar.php";
    ?>

    <h1> Rechercher une Waloc : </h1>

    <form action="">

    <div class="bloc-center">

    <select name="voiture">
        <option value="*">Toutes les marques</option>
        <option value="Smart">Smart</option>
        <option value="Fiat">Fiat</option>

    </select>

    <input type="submit" value="Valider">
    
    </div>
    </form>

    <div class="voiture1">
        <img src="../img/fiat/face_fiat.jpg" alt="fiat 500 face">
        <p>
            <?php
                echo $modele1;
            ?>
        </p>
        <p>
            <?php
                echo $marque1;
            ?>
        </p>
        <p>
            <?php
                echo $prix1;
            ?>
        </p>
    </div>

</body>
</html>