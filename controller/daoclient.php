<?php

include "pdo.php";

class Daoclient extends bdd{

    public function insererClient(Client $client)
    {

        $mdp = $client->getMdp();
        $prenom = $client->getPrenom();
        $nom = $client->getNom();
        $numero_tel = $client->getNumero_tel();
        $date_naissance = $client->getDate_naissance();
        $adresse = $client->getAdresse();
        $ville_adresse = $client->getVille_adresse();
        $cp = $client->getCp();
        $email = $client->getEmail();

        $requete = "INSERT INTO `client` (mdp, prenom, nom, numero_tel, date_naissance, 
        adresse, ville_adresse, cp, email, date_inscription) 
        VALUES (:mdp, :prenom, :nom, :numero_tel, :date_naissance, 
        :adresse, :ville_adresse, :cp, :email, now())";

        try {
            $stmt = parent::$link->prepare($requete);

            $stmt->bindParam(':mdp', $mdp);
            $stmt->bindParam(':prenom', $prenom);
            $stmt->bindParam(':nom', $nom);
            $stmt->bindParam(':numero_tel', $numero_tel);
            $stmt->bindParam(':date_naissance', $date_naissance);
            $stmt->bindParam(':adresse', $adresse);
            $stmt->bindParam(':ville_adresse', $ville_adresse);
            $stmt->bindParam(':cp', $cp);
            $stmt->bindParam(':email', $email);
            
            // var_dump($stmt);
           
            try {
                $result=$stmt->execute();
            if (!$result){
                    print_r($stmt->errorInfo());
                    echo "L'utilisateur a bien été créer";
               }
            } catch (\Throwable $th) {
                throw $th;
            }
            

        } catch(Exception $e) {
            echo "erreur insertion client" . $e->getMessage();
        }
    }

}