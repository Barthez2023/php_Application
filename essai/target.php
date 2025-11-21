<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // $nom=$_POST['nom'];
    // if (!empty($nom)) {
    //     echo 'Bienvenue '.htmlspecialchars($nom); //htmlspecialchars()block l'intepretation du code  html entree dans un champ du formulaire
    //     echo '</br> Bienvenue '.strip_tags($nom); //strip_tags()block l'intepretation du code html entree dans un champ du formulaire et supprime les balise html 

    // }
    // else {
    //     echo 'vous  n\'avez pas entrer un nom';
    // }
    ?>
    <!-- <p>Cliquez<a href="formulaire.php"> ici </a>Pour entrer un  nom</p> -->

    <?php
        $prenom=$nom=$pseudo="";

        function securisation($donnees){
            $donnees=trim($donnees);
            $donnees=stripcslashes($donnees);
            $donnees=strip_tags($donnees);

            return $donnees;
        }
        $prenom=securisation($_POST['prenom']);
        $nom=securisation($_POST['nom']);
        $pseudo=securisation($_POST['pseudo']);

        echo 'Ton Prenom est :'.$prenom.'</br>';
        echo 'Ton Nom est :'.$nom.'</br>';
        echo 'Ton Pseudo est :'.$pseudo.'</br>';


    ?>


</body>
</html>