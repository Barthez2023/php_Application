<?php
    session_start();
    if (!isset($_SESSION['etudiant'])) {
        $_SESSION['etudiant']=[];
    }
?>