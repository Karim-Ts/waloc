<?php 
session_start();

if(!empty($_SESSION['id'])){
    header("location: editionprofil.php");
}else{
    header("location: connexion.php");
}
?>