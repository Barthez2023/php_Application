
<?php
    //INSERTION DES DONNEES DANS UNE DB DIRECTEMENT AVEC LE PHP EN UTILISANT LES REQUETES PREPAREES
    echo 'INSERTION DES DONNEES DANS UNE DB DIRECTEMENT AVEC LE PHP EN UTILISANT LES REQUETES PREPAREES <br>';
    $serveur="localhost";
    $login="root";
    $pass="";
    $nom="";
    $prenom="";
    $email="";
    try {
        $connexion=new PDO("mysql:host=$serveur;dbname=test2", $login,$pass);
        $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 
        //insertion des elements dans la base de donnee
        // $insertion="INSERT INTO visiteurs(nom, prenom, email) VALUES ('$nom', '$prenom', '$email')";
        // $connexion->exec($insertion);
        // echo 'La ligne a ete ajoute avec sucess dans la table visiteurs !!! <br>';
        $requete=$connexion->prepare("INSERT INTO visiteurs(nom, prenom, email) VALUES (:nom, :prenom, :email)");//:nom, :prenom, :email sont des parametres nommes encore appelés des marqueurs nommes
        $requete->bindParam(':nom', $nom);     //permet de liee nos variables aux marqueurs nommes  permet de proteger contre les injections sql dnas le formulaire
        $requete->bindParam(':prenom', $prenom);
        $requete->bindParam(':email', $email);

        $nom="DuGrang";
        $prenom="Jean"; 
        $email="jean.DuGrang@gmail.com";
        $requete->execute(); //execute la requete preparee
        echo 'La ligne a ete ajoute avec sucess dans la table visiteurs !!! <br>';
    } catch (PDOException $e) {
        echo 'Echec de la connexion :  <br>' .$e->getMessage();
    }




?>



