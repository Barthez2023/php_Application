<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include_once('visiteur_class.php');
        $visiteur1=new Visiteur;
        $visiteur2=new Visiteur;

        $visiteur1->set_prenom('Pierre');
        $visiteur2->set_prenom('Victor');

        echo'Bonjour ' .$visiteur1->get_prenom().'<br/>';
        echo'Bonjour ' .$visiteur2->get_prenom().'<br/>';


        $visiteur3=new Visiteur;

        $visiteur3->set_prenom('Jean');
        $visiteur3->set_nom('Giraud');

        echo'Bonjour votre prenom est :' .$visiteur3->get_prenom().' et votre nom est '.$visiteur3->get_nom().'<br/>';

        /*si on utilise pas les getters et les setters on ne poura pas acceder a la variables  $prenom car 
        elle est definir en tant que private donc  elle n'est pas accessible hors de la classe ou elle a ete definir.*/
        echo'Bonjour  votre nom est :' .$visiteur3->nom.'<br/>';
        echo'Bonjour  votre prenom est :' .$visiteur3->prenom.'<br/>';//erreur car on ne peut pas acceder a la variable prenom car private







    ?>
</body>
</html>