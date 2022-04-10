<?php

class Voiture{

    private $marque;
    private $modele;
    private $prix_jour;
    private $immatriculation;


public function __construct($marque, $modele, $prix_jour, $immatriculation){

    $this->marque = $marque;
    $this->modele = $modele;
    $this->prix_jour = $prix_jour;
    $this->immatriculation = $immatriculation;
}


    /**
     * Get the value of marque
     */ 
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * Set the value of marque
     *
     * @return  self
     */ 
    public function setMarque($marque)
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * Get the value of modele
     */ 
    public function getModele()
    {
        return $this->modele;
    }

    /**
     * Set the value of modele
     *
     * @return  self
     */ 
    public function setModele($modele)
    {
        $this->modele = $modele;

        return $this;
    }

    /**
     * Get the value of prix_jour
     */ 
    public function getPrix_jour()
    {
        return $this->prix_jour;
    }

    /**
     * Set the value of prix_jour
     *
     * @return  self
     */ 
    public function setPrix_jour($prix_jour)
    {
        $this->prix_jour = $prix_jour;

        return $this;
    }

    /**
     * Get the value of immatriculation
     */ 
    public function getImmatriculation()
    {
        return $this->immatriculation;
    }

    /**
     * Set the value of immatriculation
     *
     * @return  self
     */ 
    public function setImmatriculation($immatriculation)
    {
        $this->immatriculation = $immatriculation;

        return $this;
    }
}