<?php
include "../controller/pdo.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=.0">
    <link rel="stylesheet" href="../style/espace_admin.css">
    <title>Espace admin - Waloc</title>
</head>
<body>
    
    <h1> Espace Administrateur </h1>
    
    <div class="ajout">

        <form method="POST" action="./index3.php" class="ajout">

            <div class="champs_ajout">

                <h3> Saisie d'une nouvelle voiture Waloc </h3>

                <input type="text" name="marque" placeholder="Marque de la voiture ">
                <input type="text" name="modele" placeholder="Modele de la voiture ">
                <input type="text" name="prix_jour" placeholder="Prix">
                <input type="text" name="immatriculation" placeholder="Immatricule">

            </div>

            <input type="submit" value="Ajouter une voiture">

        </form>

    </div>

    <div class="supprime">

        <form method="POST" action="" class="supprime">

            <div class="champs_supprime">

                <h3> Suppression d'une voiture Waloc </h3>

                <input type="select" name="marque" placeholder="Marque de la voiture">
                <input type="select" name="modele" placeholder="Modele de la voiture">
                <input type="select" name="prix_jour" placeholder="Prix de la voiture">

            </div>

            <input type="submit" value="Supprime cette voiture">

        </form>

    </div>

</body>
</html>