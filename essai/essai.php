<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <P>ceci et un paragfraphe en HTML</P>

    <?php
        echo "ceci a ete ecrit en php <br/>";
        echo "Je suis un nouveau element php<br/>";//echo retourne plusieur chaine de texte
        print "Ceci c'est un print ecrit en php<br/>";   //retourne une seul chaine de texte
        //echo plus rapide que print
        /*L'instruction Include permet d'introduire des pages ou des bouts de page 
            dans d'autre pages
        */

        /*En php les variables serves a stocker du texte de facon temporairement
        des que la page est creer et envoye a l'utilisateur la varaible creer vont 
        etre supprimer rein n'est garder dans le disque dur.*/

        //creation des variable :la declaration des variable se fait avec le signe dollars
        
        $departement="Informatique";  //chaine de caractere
        $chiffre=83;                  // integer
        $pi=3.14;                     //float
        $decision=true;               //booleen

        echo "Je suis la variable sting qui represente le departement $departement <br/>";
        echo 'Je suis la variable string qui represente le departement'.$departement.'de l\'universite <br/>';

        //operation avec les variable
        $nbr1=20;
        $nbr2=10;
        $addition=$nbr1+$nbr2;
        $soustration=$nbr1-$nbr2;
        $multiplication=$nbr1*$nbr2;
        $division=$nbr1/$nbr2;
        $modulo=$nbr1%$nbr2;
        echo 'Addtion de '.$nbr1.' et de '.$nbr2.' est egal a : '.$addition.'<br/>';         //affiche 30
        echo 'soustration de '.$nbr1.' et de '.$nbr2.' est egal a : '.$soustration.'<br/>';   //affiche 10
        echo 'multiplication de '.$nbr1.' et de '.$nbr2.' est egal a : '.$multiplication.'<br/>';  //affiche 200
        echo 'division de '.$nbr1.' et de '.$nbr2.' est egal a : '.$division.'<br/>';                //affiche 2
        echo 'modulo de '.$nbr1.' et de '.$nbr2.' est egal a : '.$modulo.'<br/>';                      //affiche 0


    ?>
    
    
</body>
</html>