<?php

class Client {


    private $mdp;
    private $prenom;
    private $nom;
    private $numero_tel;
    private $date_naissance;
    private $adresse;
    private $ville_adresse;
    private $cp;
    private $email;

    public function __construct($mdp, $prenom, $nom, $numero_tel, $date_naissance, $adresse, $ville_adresse, $cp, $email){
        $this->mdp = $mdp;
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->numero_tel = $numero_tel;
        $this->date_naissance = $date_naissance;
        $this->adresse = $adresse;
        $this->ville_adresse = $ville_adresse;
        $this->cp = $cp;
        $this->email = $email;
    }

    public function getMdp()
    {
        return $this->mdp;
    }



    public function setmdp($mdp)
    {
        $this->mdp = $mdp;

        return $this;
    }



    public function getPrenom()
    {
        return $this->prenom;
    }


    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }


    public function getNom()
    {
        return $this->nom;
    }


    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }


    public function getNumero_tel()
    {
        return $this->numero_tel;
    }

   
    public function setNumero_tel($numero_tel)
    {
        $this->numero_tel = $numero_tel;

        return $this;
    }



    public function getDate_naissance()
    {
        return $this->date_naissance;
    }



    public function setDate_naissance($date_naissance)
    {
        $this->date_naissance = $date_naissance;

        return $this;
    }


    
    public function getAdresse()
    {
        return $this->adresse;
    }

  

    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }



    public function getVille_adresse()
    {
        return $this->ville_adresse;
    }

 
    
    public function setVille_adresse($ville_adresse)
    {
        $this->ville_adresse = $ville_adresse;

        return $this;
    }



    public function getCp()
    {
        return $this->cp;
    }



    public function setCp($cp)
    {
        $this->cp = $cp;

        return $this;
    }


    public function getEmail()
    {
        return $this->email;
    }


    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }
    


}