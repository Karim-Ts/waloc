<?php
session_start();

error_reporting(E_ALL);
ini_set("display_errors", 1);

include "../controller/pdo.php";

$utilisateur = 'root';
$mdp = 'root';

$link = new PDO('mysql:host=localhost;dbname=waloc;', $utilisateur, $mdp);

if(isset($_SESSION['id'])){

    $reqclient = $link->prepare("SELECT * FROM client WHERE id = ?");

    $reqclient->execute(array($_SESSION['id']));
    $client = $reqclient->fetch();
    // var_dump($client);


    if (isset($_POST['newemail']) AND !empty($_POST['newemail'] AND $_POST['newemail'] != $client['email'])){

        $newemail = htmlspecialchars($_POST['newemail']);
        $changeremail = $link->prepare('UPDATE  client SET email = ? WHERE id = ?');
        $changeremail->execute(array($newemail, $_SESSION['id']));

        header ('location: profil.php?id='.$_SESSION['id']);
    }

    if (isset($_POST['newmdp1']) AND !empty($_POST['newmdp1']) AND isset($_POST['newmdp2']) AND !empty($_POST['newmdp2']) AND $_POST['newmdp1'] != $client['mdp'] AND $_POST['newmdp2'] != $client['mdp']){

        $mdp1 = sha1($_POST['newmdp1']);
        $mdp2 = sha1($_POST['newmdp2']);

        var_dump($mdp1, $mdp2);

        if($mdp1 == $mdp2){
            
            $changermdp = $link->prepare("UPDATE  client SET mdp = ? WHERE id = ?");
            $changermdp->execute(array($mdp1, $_SESSION['id']));

            header ('location: profil.php?id='.$_SESSION['id']);
        }else{
            
            echo "Vous mot de passe ne  correspondent pas";
        }

    }


    if (isset($_POST['newprenom']) AND !empty($_POST['newprenom']) AND $_POST['newprenom'] != $client['prenom']){

        $newprenom = htmlspecialchars($_POST['newprenom']);
        $changerprenom = $link->prepare('UPDATE  client SET prenom = ? WHERE id = ?');
        $changerprenom->execute(array($newprenom, $_SESSION['id']));

        header ('location: profil.php?id='.$_SESSION['id']);
    }

    if (isset($_POST['newnom']) AND !empty($_POST['newnom']) AND $_POST['newnom'] != $client['nom']){

        $newnom = htmlspecialchars($_POST['newnom']);
        $changernom = $link->prepare('UPDATE  client SET nom = ? WHERE id = ?');
        $changernom->execute(array($newnom, $_SESSION['id']));

        header ('location: profil.php?id='.$_SESSION['id']);
    }

    if (isset($_POST['newadresse']) AND !empty($_POST['newadresse'] AND $_POST['newadresse'] != $client['adresse'])){

        $newadresse = htmlspecialchars($_POST['newadresse']);
        $changeradresse = $link->prepare('UPDATE  client SET adresse = ? WHERE id = ?');
        $changeradresse->execute(array($newadresse, $_SESSION['id']));

        header ('location: profil.php?id='.$_SESSION['id']);
    }

    if (isset($_POST['newville']) AND !empty($_POST['newville'] AND $_POST['newville'] != $client['ville_adresse'])){

        $newville = htmlspecialchars($_POST['newville']);
        $changerville = $link->prepare('UPDATE  client SET ville_adresse = ? WHERE id = ?');
        $changerville->execute(array($newville, $_SESSION['id']));

        header ('location: profil.php?id='.$_SESSION['id']);
    }


    if (isset($_POST['newcp']) AND !empty($_POST['newcp'] AND $_POST['newcp'] != $client['cp'])){

        $newcp = htmlspecialchars($_POST['newcp']);
        $changercp = $link->prepare('UPDATE  client SET cp = ? WHERE id = ?');
        $changercp->execute(array($newcp, $_SESSION['id']));

        header ('location: profil.php?id='.$_SESSION['id']);
    }




?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/editionprofil.css">
    <title>Editer</title>
</head>
<body>

    <?php
        include "../component/navbar.php";
    ?>

    <h1> Éditer profil </h1>
    
    <form method="POST" action="">

    
    
    <div class="bloc-center">
        <div class="un">
            <input type="text" name="newemail" placeholder="Nouveau email" value="<?php echo $client['email'];?>">
        </div>

        <div class="deux">
            <input type="password" name="newmdp1" placeholder="Nouveau mot de passe">
            <input type="password" name="newmdp2" placeholder="Confirmation mot de passe">
        </div>

        <div class="trois">
            <input type="text" name="newprenom" placeholder="Nouveau prenom" value="<?php echo $client['prenom'];?>">
            <input type="text" name="newnom" placeholder="Nouveau nom" value="<?php echo $client['nom'];?>">
        </div>

        <div class="quatre">
            <input type="text" name="newnumero" placeholder="Nouveau numero" value="<?php echo $client['numero_tel'];?>">
            <input type="text" name="newnaissance" placeholder="Nouveau naissance" value="<?php echo $client['date_naissance'];?>">
        </div>

        <div class="cinq">
            <input type="text" name="newadresse" placeholder="Nouveau adresse" value="<?php echo $client['adresse'];?>">
            <input type="text" name="newville" placeholder="Nouveau ville" value="<?php echo $client['ville_adresse'];?>">
        </div>

        <input type="text" name="newcp" placeholder="Nouveau cp" value="<?php echo $client['cp'];?>">

        <input type="submit" value="Mettre à jour">
        
    </div>
    </form>

</body>
</html>
<?php
}else{
    header("location: connexion.php");
}
?>