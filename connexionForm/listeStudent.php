<?php
    require_once 'ini.php';
    $student=$_SESSION['etudiant'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <pre>
        <?php print_r($_SESSION);?>
    </pre>  -->
    <?php foreach ($student as $etudiant) :?>
        <p>Il s'agit de l'etudiant ayant pour identifiant <?=$etudiant['id']?> et son nom est <?=$etudiant['nom']  ?> et son email <?=$etudiant['email']?></p>
    <?php endforeach ;?>


    <a href="login.php">Allez a la page Login</a>
</body>
</html>