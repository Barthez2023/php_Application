<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire en PhP</title>
    <style>
        form{
            display:flex;
            flex-direction:column;
            max-width: 320px;
            gap:20px;
        }
    </style>
</head>
<body>
    <form action="target.php" method="post">
        <div class="nom">
            <label for="">Entrez votre nom</label>
            <input type="text" name="nom" id="nom">
        </div>
         <div class="prenom">
            <label for="">Entrez votre prenom</label>
            <input type="text" name="prenom" id="prenom">
        </div>
         <div class="pseudo">
            <label for="">Entrez votre pseudo</label>
            <input type="text" name="pseudo" id="pseudo">
        </div>
        <input type="submit" value="Envoyez">
    </form>

</body>
</html>