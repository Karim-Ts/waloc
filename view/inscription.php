<?php
include "../controller/pdo.php";

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/inscription.css">
    <title>Inscription</title>
</head>
<body>

    <?php
        include "../component/navbar.php";
    ?>

    <h1> INSCRIPTION </h1>

    <form method="POST" action="./index1.php">

    <div class="formulaire">
        
        <div class="prenom-nom">
            
            <input type="text" name="prenom" placeholder="Prénom">
            <input type="text" name="nom" placeholder="Nom">

        </div>

        <div class="coordonees">

            <input type="email " name="email" placeholder="Adresse mail">
            <input type="int" name="numero_tel" placeholder="Numéro de téléphone">

        </div>
        
        <div class="identifiant">

            <input type="password" name="mdp" placeholder="Mot de passe">
            <input type="password" name="mdp" placeholder="Confirmation mot de passe">

        </div>

        <div class="naissance-adresse">

            <input type="date" name="date_naissance" placeholder="Date de naissance">
            <input type="text" name="adresse" placeholder="Adresse">

        </div>

        <div class="ville-cp">

            <input type="text" name="ville_adresse" placeholder="Ville">
            <input type="int" name="cp" placeholder="Code Postal">

        </div>

        

        <input type="submit" value="Inscrire" class="boutton">

        </div>
    </form>

    
    
</body>
</html>