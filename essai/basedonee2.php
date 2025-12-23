
<?php
    //SELECTIONNER  DES DONNEES DANS UNE DB DIRECTEMENT AVEC LE PHP EN UTILISANT LES REQUETES PREPAREES
    echo 'SELECTIONNER  DES DONNEES DANS UNE DB DIRECTEMENT AVEC LE PHP EN UTILISANT LES REQUETES PREPAREES <br>';
    $serveur="localhost";
    $login="root";
    $pass="";
    $nom="";
    $prenom="";
    $email="";
    try {
        $connexion=new PDO("mysql:host=$serveur;dbname=test2", $login,$pass);
        $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 
        //selection des elements dans la base de donnee
        $requete=$connexion->prepare("SELECT * FROM visiteurs"); //preparation de la requete
        $requete->execute(); //execution de la requete preparee
        $resultat=$requete->fetchAll(); //recupere toutes les lignes de la table visiteurs et les stocke dans un tableau associatif
        foreach($resultat as $ligne){
            echo 'Nom : ' . $ligne['nom'] . ' - Prenom : ' . $ligne['prenom'] . ' - Email : ' . $ligne['email'] . '<br>';
        }
        echo '<pre>';
            print_r($resultat);
        echo '</pre>  ';

        echo '<br> Selection avec condition :  selectionner les visiteurs ayant pour nom=DuGrang<br>';
        $requete=$connexion->prepare("SELECT * FROM visiteurs WHERE nom=:nom");               //:nom est un marqueur nomme
        $requete->bindParam(':nom', $nom);                                                    //permet de liee nos variables aux marqueurs nommes  permet de proteger contre les injections sql dnas le formulaire
        $nom="DuGrang";
        $requete->execute(); //execute la requete preparee
        $resultat=$requete->fetchAll(); //recupere toutes les lignes de la table visiteurs correspondant au nom DuGrang et les stocke dans un tableau associatif
        foreach($resultat as $ligne){
            echo 'Nom : ' . $ligne['nom'] . ' - Prenom : ' . $ligne['prenom'] . ' - Email : ' . $ligne['email'] . '<br>';
        }

        /*echo "Ajout d'une nouvelle colonne 'sexe' dans la table visiteurs <br>";
        $alterTable=$connexion->prepare("ALTER TABLE visiteurs ADD Age INT"); //preparation de la requete
        $alterTable->execute(); //execution de la requete preparee
        echo "Ajout d'une nouvelle colonne 'sexe' dans la table visiteurs <br>";
        $alterTable=$connexion->prepare("ALTER TABLE visiteurs ADD Age VARCHAR(10)"); //preparation de la requete
        $alterTable->execute(); //execution de la requete preparee*/

        echo "selectioner tout les hommes visiteurs <br>";
        $alterTable=$connexion->prepare("SELECT * FROM visiteurs WHERE sexe='M' AND Age < 25 ORDER BY Age ASC"); //preparation de la requete
        $alterTable->execute(); //execution de la requete preparee
        $resultat=$alterTable->fetchAll(); //recupere toutes les lignes de la table visiteurs correspondant au sexe M et les stocke dans un tableau associatif
        foreach($resultat as $ligne){
            echo 'Nom : ' . $ligne['nom'] . ' - Prenom : ' . $ligne['prenom'] . ' - Email : ' . $ligne['email'] . ' - Age : ' . $ligne['Age'] .' - Sexe : ' . $ligne['sexe'] .'<br>';
        }



    } catch (PDOException $e) {
        echo 'Echec de la connexion :  <br>' .$e->getMessage();
    }




?>



