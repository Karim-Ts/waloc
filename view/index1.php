<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

if (!empty($_POST['prenom']) && !empty($_POST['mdp']) 
    && !empty($_POST['nom']) && !empty($_POST['numero_tel']) 
    && !empty($_POST['date_naissance']) && !empty($_POST['adresse']) 
    && !empty($_POST['ville_adresse']) && !empty($_POST['cp']) && !empty($_POST['email'])){
    include "../model/client.php";
    include "../controller/daoclient.php";

    // Le mdp sera hasher (PASSWORD_BCRYPT CORRESPOND AU PARAMETRE DE CRYPTAGE)
    $mdp = password_hash($_POST['mdp'], PASSWORD_BCRYPT);
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $numero_tel = $_POST['numero_tel'];
    $date_naissance = $_POST['date_naissance'];
    $adresse = $_POST['adresse'];
    $ville_adresse = $_POST['ville_adresse'];
    $cp = $_POST['cp'];
    $email = $_POST['email'];

    $client = new Client ($mdp, $prenom, $nom, $numero_tel, $date_naissance, $adresse, $ville_adresse, $cp, $email );

    // var_dump($client);

    $daoclient = new Daoclient();
    $daoclient->insererClient($client);
    
    header ("location: connexion.php");
    
}