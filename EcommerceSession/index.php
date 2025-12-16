<?php
session_start();
    if (!isset($_SESSION['panier'])) {
        $_SESSION['panier']=[];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="syle.css">
    <title>Document</title>
</head>
<body>

    <div class="table-container">
        <table class="table-style">
            <thead>
                <tr>
                    <th>Designation</th>
                    <th>Prix</th>
                    <th>Qte</th>
                    <th>Ajouter</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Produit A</td>
                    <td align="right">300.00</td>
                    <td><input type="text" name="produit" id="prd_1" value="1"></td>
                    <td class="text-center">
                        <button class="table-btn edit" onclick="add(1)">ADD</button>
                        <button class="table-btn delete" onclick="supprimer(1)">Supprimer</button>
                    </td>
                </tr>
                <tr>
                    <td>Produit B</td>
                    <td align="right">200.00</td>
                    <td><input type="text" name="produit" id="prd_2" value="1"></td>
                    <td class="text-center">
                        <button class="table-btn edit" onclick="add(2)">ADD</button>
                        <button class="table-btn delete" onclick="supprimer(2)">Supprimer</button>
                    </td>
                </tr>
                <tr>
                    <td>Produit C</td>
                    <td align="right">600.00</td>
                    <td><input type="text" name="produit" id="prd_3" value="1"></td>
                    <td class="text-center">
                        <button class="table-btn edit" onclick="add(3)">ADD</button>
                        <button class="table-btn delete" onclick="supprimer(3)">Supprimer</button>
                    </td>
                </tr>
                <tr>
                    <td>Produit D</td>
                    <td align="right">800.00</td>
                    <td><input type="text" name="produit" id="prd_4" value="1"></td>
                    <td class="text-center">
                        <button class="table-btn edit" onclick="add(4)">ADD</button>
                        <button class="table-btn delete" onclick="supprimer(4)">Supprimer</button>
                    </td>
                </tr>

                </tr>
            </tbody>
        </table>
</div>
<div class="btn" style="display: flex; justify-content: space-between;">
    <a href="panier.php">Voir le panier</a>
    <a href="viderPnier.php">vider le panier</a>
</div>
<hr>
<pre>
    <?php print_r($_SESSION);?>
</pre>
<script>
    function add(id) {
        var qte=document.getElementById('prd_' +id).value;
        location.href='add.php?id='+id+"&qte="+qte;
    }
    function supprimer(id) {
        var qte=document.getElementById('prd_' +id).value;
        location.href='remove.php?id='+id+"&qte="+qte;
    }
</script>
</body>
</html>



