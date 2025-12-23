<?php
    //MODIFICATION ET SUPPRESSION DES DONNEES DANS UNE DB DIRECTEMENT AVEC LE PHP EN UTILISANT LES REQUETES PREPAREES
    echo 'MODIFICATION ET SUPPRESSION DES DONNEES DANS UNE DB DIRECTEMENT AVEC LE PHP EN UTILISANT LES REQUETES PREPAREES <br>';
    $serveur="localhost";
    $login="root";
    $pass="";
    try {
        $connexion=new PDO("mysql:host=$serveur;dbname=test2", $login,$pass);
        $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        //modification des elements dans la base de donnee
        echo 'Modification de l\'age  du visiteur ayant pour nom=DuGrang <br>';
        $modif='UPDATE visiteurs SET Age=65 WHERE id=1'; //preparation de la requete avec des marqueurs nommes
        $requete=$connexion->prepare($modif);
        $requete->execute(); //execution de la requete preparee
        echo 'La ligne a ete modifiee avec sucess dans la table visiteurs !!! <br>';


        //suppression des elements dans la base de donnee
        echo 'Suppression du visiteur ayant pour nom=DuGrang <br>';
        $suppression='DELETE FROM visiteurs WHERE nom="DuGrang" '; //preparation de la requete avec des marqueurs nommes
        $requete=$connexion->prepare($suppression);
        $requete->execute(); //execution de la requete preparee
        echo 'La ligne a ete supprimee avec sucess dans la table visiteurs !!! <br>';
    } catch (PDOException $e) {
        echo 'Echec de la connexion :  <br>' .$e->getMessage();
    }

?>



