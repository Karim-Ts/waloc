<?php

include "pdo.php";

class Daovoiture extends bdd{

    public function insererVoiture (Voiture $voiture)
    {

        $marque = $voiture->getMarque();
        $modele = $voiture->getModele();
        $prix_jour = $voiture->getPrix_jour();
        $immatriculation = $voiture->getImmatriculation();

        $requete2 = "INSERT INTO `voiture` (marque, modele, prix_jour, immatriculation) 
        VALUES (:marque, :modele, :prix_jour, :immatriculation)";

        try {
            $stmt = parent::$link->prepare($requete2);

            $stmt->bindParam(':marque', $marque);
            $stmt->bindParam(':modele', $modele);
            $stmt->bindParam(':prix_jour', $prix_jour);
            $stmt->bindParam(':immatriculation', $immatriculation);
                
            // var_dump($stmt);

            try {
                $result=$stmt->execute();
            if (!$result){
                    print_r($stmt->errorInfo());
                    echo "La voiture a bien été créer";
               }
            } catch (\Throwable $th) {
                throw $th;
            }
            

        } catch(Exception $e) {
            echo "erreur insertion voiture" . $e->getMessage();
        }
    }

}