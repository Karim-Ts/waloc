<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

if (!empty($_POST['marque']) && !empty($_POST['modele']) && !empty($_POST['prix_jour']) && !empty($_POST['immatriculation'])){
    include "../model/voiture.php";
    include "../controller/daovoiture.php";

    $marque = $_POST['marque'];
    $modele = $_POST['modele'];
    $prix_jour = $_POST['prix_jour'];
    $immatriculation = $_POST['immatriculation'];
    

    $voiture = new Voiture ($marque, $modele, $prix_jour, $immatriculation);

    // var_dump($voiture);

    $daovoiture = new Daovoiture();
    $daovoiture->insererVoiture($voiture);
    
    echo "voiture saissi avec  succès";

    
} else{
    echo "remplissez tout les champs";
}