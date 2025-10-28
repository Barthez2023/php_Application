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



        







    ?>

</body>
</html>