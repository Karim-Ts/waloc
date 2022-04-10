<?php

class bdd{

    private static $serveur = "mysql:host=localhost";

    private static $bdd = "dbname=waloc";

    private static $utilisateur = 'root';

    private static $mdp = 'root';

    protected static $link;

    public function __construct()
    {
        try{
            bdd::$link = new Pdo (bdd::$serveur . ";" . bdd::$bdd,bdd::$utilisateur, bdd::$mdp);
        } catch(Exception $e) {
            throw $e;
        }
        
    }
    
}