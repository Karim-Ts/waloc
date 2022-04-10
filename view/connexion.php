<?php
session_start();

error_reporting(E_ALL);
ini_set("display_errors", 1);

include "../controller/pdo.php";

$utilisateur = 'root';
$mdp = 'root';
function antiSQL($string){
    return(str_replace("'","\'",strip_tags($string)));
}

$link = new PDO('mysql:host=localhost;dbname=waloc;', $utilisateur, $mdp);

if(isset($_POST['formconnexion'])){
    $emailconnect = htmlspecialchars($_POST['email']);
    $mdpconnect = antiSQL($_POST['mdp']);

    if(!empty($_POST['email']) AND !empty($_POST['mdp'])){

        $reqclient = $link->prepare("SELECT * FROM client WHERE email = ?");
        // On change les points d'intérrogation par la valeur du formulaire ($emailconnect) et on éxecute la requette
        $reqclient->execute(array($emailconnect));

        // Je regarde si le mail du formulaire est bien dans ma base de données client
        $nombreclient = $reqclient->rowCount();

        // S'il est supérieur à 0 alors on a au moins 1 personne dans notre base de donnée qui as la même adresse mail
        if ($nombreclient > 0) {
            // On enregistre les informations du client dans $clientinfo grâve à ->fetch();
            $clientinfo = $reqclient->fetch();

            // On vérifie s'il le client de la base de donnée a le même mdp que la personne du formulaire
            $ontLeMemeMotDePasse = password_verify($mdpconnect, $clientinfo['mdp']);
    
            // S'ils ont le même mot de passe alors on le laisse se connecter
            if($ontLeMemeMotDePasse){
                $_SESSION['id'] = $clientinfo['id'];
                $_SESSION['email'] = $clientinfo['email'];
    
                header("location: editionprofil.php?id=".$_SESSION['id']);
    
            }else{
                
                $mesinc = 'Identifiant incorrect !';
            }
        } else {
            // L'email n'existe pas
            $mesinc = 'Identifiant incorrect !';
        }

    }else{
        $mestout = 'Tout les champs doivent être renseignés';
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/connexion.css">
    <title> Connexion - Waloc </title>
</head>
<body>


    <?php
        include "../component/navbar.php";
    ?>

    <h1>Connexion</h1>

    <form method="POST" action="">
        <div class="bloc-center">
            <input type="email" name="email" placeholder="E-mail" class="champs">
            <input type="password" name="mdp" placeholder="Mot de passe" class="champs">

            <?php if(isset($mestout)){
                echo $mestout; }?>

            <?php if(isset($mesinc)){
                echo $mesinc; }?>
            

        <a href="inscription.php" class="inscription"> Pas de compte ? S'inscire !</a>

        <br>

        <a href="mdp_oublie.php"> Mot de passe oublié ?</a>

            <input type="submit" name="formconnexion" value="Connexion" class="boutton">
        </div>
    </form>

    
    
</body>
</html>