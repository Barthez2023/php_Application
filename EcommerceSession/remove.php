<?php
    session_start();
    $id=$_GET['id'];
    $qte=$_GET['qte'];

    if (isset($_SESSION['panier'][$id])!=0) {
        $_SESSION['panier'][$id] -= $qte;      //tableau associatif simple

        if (($_SESSION['panier'][$id])<=0) {
            $_SESSION['panier'][$id] = 0;
        }
    } 
    header('location:index.php');

?>