<?php
    session_start();

    $panier=$_SESSION['panier'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="syle.css">
    <title>panier</title>
</head>
<body>
    <h1>Liste des courses que vous avez effectuer</h1>
    <div class="table-container">
        <table class="table-style">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Qte</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($panier as $id=>$qte): ?>
                    <tr>
                        <td><?=$id ?></td>
                        <td><?=$qte ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>    
        </table>
    </div>
    <a href="index.php">Retour a la boutique</a>
</body>
</html>