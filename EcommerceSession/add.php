<?php
    session_start();
    $id=$_GET['id'];
    $qte=$_GET['qte'];

    if (isset($_SESSION['panier'][$id])) {
        $_SESSION['panier'][$id] += $qte;      //tableau associatif simple
    } 
    else{
        $_SESSION['panier'][$id] = $qte;
    }
    header('location:index.php');

?>