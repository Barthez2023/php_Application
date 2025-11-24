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

        echo '<br/>';
        echo 'NOUS ALLONS NOUS PENCHES SUR LES CONDITIONS <br/>';

        //La condition if

        $heure_connection=19;
        if ($heure_connection<18) {
            echo "Passez une bonne journee <br/>";
            $journee="Oui";
        }
        else{
            echo "Passez une bonne soiree <br/>";
            $journee="Nom";
        }
        echo "Fait'il jour ?La reponse est" .$journee.".<br/>";

        //La condition else

        $note=21;
        if ($note==0) {
            echo "Tu es nul! <br/>";
        }
        elseif ($note>=4 && $note<8) {
           echo "C'est tres mauvais <br/>";
        }
        elseif ($note>=8 && $note<12 ) {
            echo "c'est n'est pas bon <br/>";
        }
        elseif ($note>=12 && $note<16) {
           echo "C'est assez bien <br/>";
        }
        elseif ($note>=16 && $note<20) {
            echo "Bien joue <br/>";
        }
        elseif ($note==20) {
            echo "Parfait <br/>";
        }
        else {
            echo "Je n'ai pas de commentaire pour cette note <br/>";
        }

        //on peut remplacer cette configuration avec le switch
        switch ($note) {
            case ($note==0):
                echo "Tu es nul! <br/>";
                break;
            case ($note>=4 && $note<8):
                echo "C'est tres mauvais <br/>";
                break;
            case ($note>=8 && $note<12):
                echo "c'est n'est pas bon <br/>";
                break;
            case ($note>=12 && $note<16):
                echo "C'est assez bien <br/>";
                break;
            case ($note>=16 && $note<20):
                echo "Bien joue <br/>";
                break;
            case ($note==20):
                echo"Parfait <br/>";
                break;                
            default:
                echo "Je n'ai pas de commentaire pour cette note <br/>";
                break;
        }

        //Les conditions ternaires
        $age=24;
        $autorisation=($age>=18)?true:false; //on retourne dans la variable autorisation la valeur true si age>=18 et false sinon
        $autorisation=($age>=18)?'Tu es deja majeur ':'Tu es encore mineur <br/>';//on retourne dans la variable autorisation la valeur true si age>=18 et false sinon
        echo $autorisation.'<br/>';

        
        //Les boucles
        echo '<br/>';
        echo 'NOUS ALLONS NOUS PENCHES SUR LES BOUCLES <br/>';
        /*1- La boucle while execute un bloc de code tant que une condition est verifie*/
        $x=1;
        while ($x <= 10) {
            echo 'Ceci est le nombre x :'.$x.'<br/>';
            $x++;
        }

        /*2-do...while execute le code une premiere fois avant de tester la condition*/
        $y=1;
        do {
            echo 'Ceci est le nombre y :'.$y.'<br/>';
            $y++;
        } while ($y <= 10);

        /*3-for generalement quand on sais le nombre d'iteration*/
        for ($i=1; $i <=10 ; $i++) { 
            echo 'Ceci est le nombre i :'.$i.'<br/>';
        }
        /*for each permet de parcourir les tableau*/

        //Les Tableaux
        echo '<br/>';
        echo 'NOUS ALLONS NOUS PENCHES SUR LES TABLEAUX <br/>';
        /*les tableaux numerote ou indexe*/
        $prenom=array('Pierre','Paul','Jacques');
       /* $pnom[0]='Jean';
        $pnom[1]='John';
        $pnom[2]='Joan';*/

        /*Tableau associatif on peut les attribues des cles textuelles par rapport au index des tableaux indexes*/
        $age=array(
            'Pierre'=>24,
            'Paul' =>22,
            'Jacques'=>'Nom rensigne'
        );
        /*//on peut ecrit ce tableu d'une autre facon
        $age['Pierre']=24;
        $age['Paul']=22;
        $age['Jacques']='Nom rensigne';*/
        echo $prenom[0].'<br/>';//affiche Pierre
        echo $age['Pierre'].'<br/>';

        for ($i=0; $i <3; $i++) { 
           echo $prenom[$i].'<br/>';
        }

        //ici on recupere les valeurs
        foreach ($age as $values) {
            echo $values.'<br/>';
        }
        //ici on recupere les cles et les valeurs
        foreach ($age as $key => $value) {
            echo "L'age de ".$key." est ".$value.'<br/>';
        }

        //utilisation de la fonction print_r
        /*La fonction print_r() en PHP sert a afficher le contenu complet 
        d'une variable - surtout utile pour les tableaux (array) ou les objets.*/
        print_r($age);
        echo '<br/>';
        echo '<pre>';
        print_r($age);
        echo '</pre>';
        /*La balise <pre> en HTML signifie "preformatted text" (texte preformate).
        Elle sert a afficher du texte exactement tel qu'il est ecrit dans le code, en respectant 
        es espaces, les tabulations et les retours a la ligne.*/


        //Tableau multidimensionnel
        //Tableaua 2 dimension
        $membres=array(
            array('Pierre',24,'Ankara'),
            array('Paul',30,'Istanbul'),
            array('Jean',25,'Konya')
        );
        echo $membres[2][1];  //retourne l'arge de Hean qui est 25
        echo '<br/>';

        for ($i=0; $i < 3; $i++) { 
            $membres_No=$i+1;
            echo 'Membre numero '.$membres_No.'<br/>';
            echo' <ul>';
            for ($j=0; $j < 3; $j++) { 
                echo '<li>'.$membres[$i][$j].'</li>';
            }
            echo '</ul>';
        }



        /* Les fonctions en php*/
        function bonjour(){
            echo 'Bonjour les codeurs php <br/>';
        }
        bonjour();

        function bonjourUser($prenom){
            echo 'Bonjour '.$prenom.' et bienvenue dans notre monde du codage <br/>';
        }
        bonjourUser('Barthez');

        function UserInfo($nom,$departement){
            echo 'Bonjour '.$nom.' et bienvenue dans le departement de '.$departement.'<br/>';
        }
        UserInfo('Barthez','Informatique');

        function somme($b,$a){
            return $a+$b;
        }
        $sum=somme(10,20);
        echo'La somme retourner par la fonction est de :'.$sum.'<br/>';


        /*Les functions predefinies en php :les fonctions relative a string*/

        //1-strlen :retourne le longuuer d'une chaine de caractere compte les caracteres acsentuer pour deux.élevé=7 au lieu de 5 car elle compte les octets pas les caracteres"
        echo ('La fonction "strlen" calcule le nombre de caractere d\'une chaine. Ex:"Bonjour à tous" a :'.strlen(" Bonjour à tous").' caracteres <br/>');
        //2-str_word_count:calcul le nombre de mots dans une chaine de caractere
        echo ('La fonction "str_word_count" calcule le nombre de mots d\'une chaine. Ex:"Bonjour à tous" a :'.str_word_count(" Bonjour à tous").' mots <br/>');
        /*cette fonction ne reconnait pas les caracteres ascentuer comme des mots .Ex à ne sera pas compte pour un mots.
        pour le faire il va falloir presicer cela */
        echo ('La fonction "str_word_count" calcule le nombre de mots d\'une chaine. Ex:"Bonjour à tous" a :'.str_word_count(" Bonjour à tous",0,'à').' mots <br/>');
        //3-str_repeat() :permet de repeter une chaine de caractere un nombre de fois
        echo str_repeat("Bonjour ",7);
        //4-str_replace() : permet de remplacer certains caracteres par d'autre
        echo '<br/>';
        $text="Bonjour, comment allez-vous.Je vais bien Bonjour a vous aussi";
        echo str_replace("Bonjour","Bonsoir",$text,$i);
        echo '<br/>Nombre d remplacement de Bonjour par Bonsoir dans la chaine texte est de: '.$i;

        //4-strtolower() et strtoupper() permet de mettre une chaine de caractere en majuscule ou en  miniuscule
        //string position =strpos() recherche un caractere specifique dans une chaine de caractere et retourne la position de la premiere occurence du caractere 
        echo '<br/>';
        echo strpos($text,"Bonjour");  //renvoir 0 qui correspond a B la premiere lettre de Bonjour 
        echo '<br/>';
        echo strpos($text,'Bonsoir');  //retourne false

        //5-la fonction htmlspecialchars():conertir des caracteres en entites html
        //ici les caracteres html vont etre modifier:"<" => &lt,">" => &gt
        //"&" =>&amp , " =>&quot ,' =>&#039
        $str="J'aime le <strong>PHP</strong> </br>";
        echo $str;
        echo htmlspecialchars($str);
        //la htmlspecialchars_decode() :effectue le meme travail que  htmlspecialchars()

        
        //6-Les fonction explode(),str_split():permte de separe les elements d'une chaine de cararctere a fonction d'un separateur(le separateur peut etre une virgules,un espace etc..)
        $text2="Bonsoir a tous les codeurs.";
        $text2_split=explode(" ",$text2);
        echo '<br/>';
        foreach ($text2_split as $valeurs){
            echo $valeurs.'<br/>';
        }
        echo '<br/>';
        print_r( $text2_split);
        //7-implode(),join():permettent de convertir les elements d'un tableau en une chaine
        $text3=array('Salut','a','tous','les','codeurs','du','monde','entier.');
        $text4=implode("--",$text3);
        echo '<br/>';
        echo  $text4;


        /*Les fonctions affetant les array*/
        //1-array_keys() retourne les cles et les indexes d'un tableaudans un nouveau tableau 

        $voiture=array(
            "citroen"=>"DS3",
            "Renault"=>"Clio",
            "Peugeot"=>"306",
            "Peugeot2"=>306

        );
        $matiere =array("Maths","Anglais","Infos");
        echo '<br/>';
        echo '<br/>';
        echo 'Les fonctions affetant les array <br/>';
        print_r(array_keys($voiture));
        echo '<br/>';
        print_r(array_keys($voiture,306,true));// recherche la cle relative a la voiture 306(true precise que 306 est un entier)

        //2-array_values() retourne les valeurs d'un tableau dans un nouveau tableau 
        echo '<br/>';
        echo '<pre>';
            print_r(array_values($voiture));
        echo '</pre>';

        //3-array_key_exixits() :verifie si une cle existe ou pas  dans un tableau
       if (array_key_exists("citroenu",$voiture)) {  
            echo 'La cle existe <br>';
       } 
       else {
            echo 'La cle n\'existe pas <br>';
       }

       //4-aray-search():recherche une valeur dans un tableau et retourne la cle qui lui est associe
       echo(array_search("DS3",$voiture,true));  //true permet de preciser que la valeur est une chaine de caractere

       /*5-in_array: permet de recherche une valeur dans un tableau.Cette fonction est sensible a la casse mais pas part au type de donnes*/
        echo '<br/>';
        if (in_array("Infos",$matiere,true)) {
            echo 'L\'element Infos se trouve dans le tableau <br>';
        }
        else {
            echo 'L\'element Infos ne se trouve pas dans le tableau <br>';
        }

        /*6-count() permet de compte le nombre d'element du tableau*/
        echo 'Le nombre d\'element du tableau est de :'.count($matiere);
        
        /*7-array_count_value() renvoi un tableau associatif avec les valeurs et le nombre de fois qu'ils apparaisse dans le tableau*/
        echo 'Les elements du tableau sont de ';
        echo '<pre>';
            print_r(array_count_values($matiere));
        echo '</pre>';
        /*8-array_diff_key () et array_diff() permet de comparer les valeurs et les cles de deux tableaux et renvoi juste sous forme de tableau les elements differents dans les deux tableaux */
        $couleur1_compare=array("a"=>"blue","b"=>"vert","c"=>"rouge","d"=>"noir","e"=>"marron");
        $couleur2_comparant=array("a"=>"jaune","b"=>"noir","c"=>"vert","d"=>"rouge");
        print_r(array_diff_key($couleur1_compare,$couleur2_comparant));
        echo '<br/>';
        print_r(array_diff($couleur1_compare,$couleur2_comparant));
        echo '<br/>';
        
        
        /*9-array_diff_key () et array_diff() permet de comparer les valeurs et les cles de deux tableaux et renvoi juste les elements semblales dans les deux tableaux */
        print_r(array_intersect_key($couleur1_compare,$couleur2_comparant));
        echo '<br/>';
        print_r(array_intersect($couleur1_compare,$couleur2_comparant));
        echo '<br/>';
        /*10-array_fill() permet de remplir un tableau avec une valeur repeter un certain nombre de fois*/
        print_r(array_fill(0,5,"vert")); //0:represente  l'indexe de debut, 5:l'index de fin et 'vert' la valeur qui remplir les tableaux
        echo '<br/>';
        /*11-array_fill_keys() permet de remplir un tableau avec une valeur repeter un certain nombre de fois associe a des cle scpecifique*/
        $cles=array("a","b","c","d","e");
        print_r(array_fill_keys($cles,"vert")); //0:represente  l'indexe de debut, 5:l'index de fin et 'vert' la valeur qui remplir les tableaux

        /*12-  array_push() :permet de inserer un elment en fin de tableau 
            array_pop():supprimer le dernier element du tableau et le stocker dans une variable
            array_hift():supprimer le premier  element du tableau et le stocker dans une variable
            array_unshitf():permet de inserer un elment en debut de tableau 
        */

        /*13-array_merge():permet de combiner plusieurs tableau en un nouveau*/
        /*14-array_combine():creer un tableau associatif  a partir de deux tableau simple .Les cles sonts les valeurs du premier tableau en parametres et les valeurs sont celle du deuxieme tableau en parametre*/
        /*15- array_unique():permet de supprimer les doublons dans un tableau cette fonction est sensible a la casse mais pas au type de valeur .Ici 4="4" mais ali!=Ali)*/
        /*16-sort() permet de trier un tableau du plus petit au plus grand elle ne creer pas un nouveau tableau mais reoganirse juste notre tableau dans le bon ordre*/
        /*17-rsort() permet de trier un tableau du plus grand au plus petit elle ne creer pas un nouveau tableau mais reoganirse juste notre tableau dans le bon ordre*/

        /*18-ksort():permet de trier un tableau associatif de facon croissante de ces cles
            krsort():permet de trier un tableau associatif de facon decroissante de ces cles
            asort():permet de trier un tableau associatif de facon croissante de ces valeurs
            arsort():permet de trier un tableau associatif de facon croissante de ces valeurs
        */
        echo'</br>';
        echo 'De retour apres uen periode d\'examen intense </br>';

        print("LES FONCTION DE DATE");
        /*Caractere utile
            d-represente le jour du mois (de 01 a 31)
            m-represente un mois( de 01 a 12)
            n-represente un mois( de 1 a 12)
            Y-represente l'annee( Ex 2025)
            N-represente un jour de la semaine en chiffre( Lundi=1 dimanche=7)
            l-represente un jour de la semaine(ex:Lundi)
            H-represente les heures(de 00 a 23)
            i-represente les minutes(de 00 a 59)
            s-represente les secondes(de 00 a 59)
        */
        //time ():donne le nombre de seconde ecooule depuis le premier janvier 1970
        echo '</br>';
        echo time();
        //date():retourne une date sous le formet souhaite
        $currentdate=date("d/m/Y");                      //d=jour m=mois Y=anne
        echo '</br>Nous sommes le :' .$currentdate;
        echo '</br> Aujourd\'hui c\'est '.date("l");   //l donne le current jour
        echo '</br> Il est '.date("H:i:s");            //H =heure i=minute s=seconde


        //affichez les jours et les mois en francais

        $jour=array("","Lundi","Mardi","Mercredi","jeudi","Vendredi","Samedi","Dimanche",);
        $mois=array("","Janvier","Fevrier","Mars","Avril","Mai","Juin","Juillet","Aout","Septembre","Octobre","Novembre","Decembre",);

        $datefrancais=$jour[date("N")].' '.date("d").' '.$mois[date("n")].' '.date("Y");
        echo'</br> Nous sommes le '.$datefrancais;

        //affichage de la date locale
        setlocale(LC_TIME,'tr-TR');
        echo '</br> Nous sommes le '.strftime("%A %d %B %Y");
        echo '</br> Il est actuellemnt '.strftime("%H : %M : %S")." UTC"; 
        // Affichage de la date formatée
        // %A: Nom complet du jour (ex: Perşembe)
        // %d: Jour du mois (ex: 20)
        // %B: Nom complet du mois (ex: Kasım)
        // %Y: Année (ex: 2025)
       //la mathode strtime est depasse a la place on peut utiliser "date_default_timezone_set("Europe/Istanbul")";
       date_default_timezone_set("Europe/Istanbul");
       echo '</br> Il est actuellement ' . date("H : i : s") . " en Turquie";

       //Verification de la validite de la date
       $date1=checkdate(12,31,2014);
       $date2=checkdate(13,31,2014);
       $date3=checkdate(01,25,-100);
       if ($date1) {
            echo '</br> La date est valide';
       }
       else {
            echo '</br> La date n\'est pas valide';
       }
       if ($date2) {
            echo '</br> La date est valide';
       }
       else {
            echo '</br> La date n\'est pas valide';
       }
       if ($date3) {
            echo '</br> La date est valide';
       }
       else {
            echo '</br> La date n\'est pas valide';
       }



       /*Les constantes en PhP*/
       echo '</br> LES CONSTANTES EN PHP';
       //La valeur d'une constante est...constante(exception:constantes "magiques")
       //sa valeur ne peut pas etre modifier dans le programme

       define("BIENVENUE","Bienvenue sur mon site ");  //definition d'une constante define(nom de la constante,valeur de la constante)
       echo'</br>'.BIENVENUE;

       //Les constatnte magic:sont insensible a la casse et leur valeurs peuvent changer au cour du temps
       /*
            __FILE__:contient le chemin complet et le nom du fichier 
            __DIR__ :contient le nom du dossier dans lequel ce trouve le fichier
            __FUNCTION__:contient le nom de la fonction dans laquel la constante est placee
            __LINE__:retourne le numero de la  ligne dans laquel le fichier est appele
       */



        /* Opérations sur les fichiers en PhP */
        echo '</br>';
        echo '</br>';
        echo ' Opérations sur les fichiers en PhP</br>';
        $definition=fopen("definition.txt","r+");
        //lire un fichier
        /*$affichafe=fread($definition,1000);   //1000 represente le nombre maximun de bit qui peut etre lu dans le fichier
        echo $affichafe;*/

        //fgets():permet de lire le fichier ligne par ligne
        /*$ligne1=fgets($definition,1000);
        echo '</br>';
        echo  $ligne1;*/
        while (!feof($definition)) {
            $ligne1=fgets($definition,1000);
            echo '</br>';
            echo  $ligne1;
        }

        //fseek() permet de modifier  la position du curseur dans un fichier

        fseek($definition,50);  //place le curseur a la position 50 de notre fichier
        //ecrire dans un ficiher 
        fwrite($definition,"Cette definiton me semble agreable et tres technique.");
        fclose($definition);


        







    ?>

</body>
</html>