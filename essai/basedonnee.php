<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        //Connection d'une base de donnes au php
        /*Pour ce faire il existe deux facon:soit avec mysql i soit avec PDO:php data object.PDO est mieux car cette extension  fonctionne avec plus de  
        de 12 gestionaire de base de donnees */
        /*ETABLIR UNE CONNECTION AVEC PDO.Pour le faire nous avons besoin de:
            -le nom de l'hote:c'est le nom du serveur ou my sql est installe.Etant donnee que nous travallions en locale le nom du serveur sera localhost
            -le nom de la base de donnes a la quel on souhaite se connecte
            -nom d'utilisateur en local generalement en php admin se nom est root
            -le mot de passe generalement sur windows il y a pas de mot de passe
        */
        echo 'ETABLIR UNE CONNECTION AVEC UN DB EXISTANTE EN UTILISANT  PDO <br>';
        $serveur="localhost";
        $login="root";
        $pass="";

        try{
            $connexion=new PDO("mysql:host=$serveur;dbname=test", $login,$pass); //dbname nous demande de donne le nom de la base de donnees aves laquel on veut etablir la connexion.Ici nous avons creer la table test depuis phpAdmin
            $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            echo 'Connexion  a la data base reussie  !!! <br>';
        }
        catch(PDOException $e){
            echo 'Echec de la connexion :  <br>' .$e->getMessage();
        }


        
        /*echo 'CREATION D\'UNE DB DIRECTEMENT AVEC LE PHP <br>';
        try{
            $connexion=new PDO("mysql:host=$serveur", $login,$pass); 
            $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $connexion->exec("CREATE DATABASE test2");  //exec permet d'ecrire du code sql
            echo 'La base de donnees a ete cree avec sucess!!!  <br>';
        }
        catch(PDOException $e){
            echo 'Echec de la connexion :  <br>' .$e->getMessage();
        }*/

         /*echo 'CREATION D\'UNE TABLE DIRECTEMENT AVEC LE PHP <br>';
        /*try{
            $connexion=new PDO("mysql:host=$serveur;dbname=test2", $login,$pass); //dbname nous demande de donne le nom de la base de donnees aves laquel on veut etablir la connexion.Ici nous avons creer la table test depuis phpAdmin
            $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            echo 'Connexion  a la data base reussie  !!! <br>';
            $sqlcodes="CREATE TABLE Visiteurs(
                id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                nom VARCHAR(50),
                prenom VARCHAR(50),
                email VARCHAR(70)
            )";
            $connexion->exec( $sqlcodes);
            echo 'La table visiteurs a ete cree avec sucess';
        
        }
        catch(PDOException $e){
            echo 'Echec de la connexion :  <br>' .$e->getMessage();
        }*/

        echo 'INSERTION DES DONNEES DANS UNE DB DIRECTEMENT AVEC LE PHP <br>';
        try{
            $connexion=new PDO("mysql:host=$serveur;dbname=test2", $login,$pass);
            $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            echo 'Connexion  a la data base reussie  !!! <br>';
            $sqlcodes="INSERT INTO `visiteurs`(`id`, `nom`, `prenom`, `email`) VALUES ('1','Paul','Pierre','Ppaul@gmail.com')";
            $connexion->exec( $sqlcodes);
            echo 'La ligne a ete ajoute avec sucess dans la table visiteurs !!! <br>';

        }
        catch(PDOException $e){
            echo 'Echec de la connexion :  <br>' .$e->getMessage();
        }





        



    ?>
</body>
</html>