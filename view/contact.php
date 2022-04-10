<?php
session_start();

error_reporting(E_ALL);
ini_set("display_errors", 1);

include "../controller/pdo.php";

$utilisateur = 'root';
$mdp = 'root';

$link = new PDO('mysql:host=localhost;dbname=waloc;', $utilisateur, $mdp);

if(isset($_SESSION['id'])){

    $sesid = $_SESSION['id'];

    $reqclient = $link->prepare("SELECT * FROM client WHERE id=?");
    $reqclient->execute(array($sesid));

    $clientinfo = $reqclient->fetch();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/contact.css">
    <title>Contact - Waloc</title>
</head>
<body>

    <?php
        include "../component/navbar.php";
    ?>

<h1>Contact</h1>

<p> Vous pouvez également nous contacter au 06 06 06 06 06</p>
        <form action="">

          <div class="bloc-center">

            <div class="nom-prenom">
              <input type="text" placeholder="<?php if(!empty($_SESSION)){ echo $clientinfo['prenom'];}else{ echo "Prénom";}?>">
              <input type="text" placeholder="<?php if(!empty($_SESSION)){ echo $clientinfo['nom'];}else{ echo "Nom";}?>">
            </div>

            <div class="coordonnes">
              <input type="text" placeholder="<?php if(!empty($_SESSION)){ echo $clientinfo['email'];}else{ echo "Email";}?>">
              <input type="text" placeholder="<?php if(!empty($_SESSION)){ echo $clientinfo['numero_tel'];}else{ echo "Numéro de téléphone";}?>">
            </div>

            <textarea placeholder="Votre message"></textarea>

          

          <input type="submit" name="formcontact" value="Envoyer" class="boutton">

          </div>
        </form>
    
</body>
</html>