<?php

include "../controller/pdo.php";

$utilisateur = 'root';
$mdp = 'root';
function antiSQL($string){
    return(str_replace("'","\'",strip_tags($string)));
}

$link = new PDO('mysql:host=localhost;dbname=waloc;', $utilisateur, $mdp);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/mdp_oublie.css">
    <title>Récupérer mot de passe</title>
</head>
<body>

    <?php
        include "../component/navbar.php";
    ?>
    
    <h2>Mot de passe oublié</h2>

    <form method="post">

        <input type="email" placeholder="Email" name="email">
        <button type="submit">Envoyer un nouveau mot de passe</button>
      
    </form>

</body>
</html>

<?php

    if(isset($_POST['email'])){
        // Si le form est envoyé on genere un mdp
    $mdp = uniqid(); //Genere un id unique
    $mdphashed = password_hash($mdp, PASSWORD_DEFAULT);

    $message = "Bonjour, voici votre nouveau mot de passe : $mdp";
    $headers ='Content-Type: text/plain; charset="utf-8"'." ";

    if(mail($_POST['email'], 'Mot de passe oublié', $message, $headers)) {

        $sql = "UPDATE client SET mdp = ? WHERE email = ?";

        $stmt = $link->prepare($sql);
        $stmt->execute([$mdphashed, $_POST['email']]);

        echo "Nous vous avons envoyé un mail";
    }else{
        echo 'erreur ..';
    }

    }
?>