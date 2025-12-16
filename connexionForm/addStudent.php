<?php
    require_once 'ini.php';
    // session_start();
    // setcookie('cmp',1,time()+3600);
    if(isset($_POST['id'], $_POST['email'], $_POST['nom']) && 
        !empty($_POST["id"]) &&  !empty($_POST["email"]) && !empty($_POST["nom"])){
        $id=$_POST["id"];
        $email=$_POST["email"];
        $nom=$_POST["nom"];
    }
    if (isset($_SESSION['etudiant'][$id])) {
        echo "Cet étudiant existe déjà.";
    }
    if (count($_SESSION['etudiant']) < 5) {
        if (!isset($_SESSION['etudiant'][$id])) {
            // Enregistrer l'étudiant
            $_SESSION['etudiant'][$id] = [
                'id' => $id,
                'email' => $email,
                'nom' => $nom
            ];
        }
    }
    else {
        // Récupérer les IDs
        $ids = array_keys($_SESSION['etudiant']);
        // Trier du plus grand au plus petit
        rsort($ids);
       //Supprimer l’étudiant avec le plus grand ID
        unset($_SESSION['etudiant'][$ids[0]]);
        // Ajouter le nouvel étudiant
        $_SESSION['etudiant'][$id] = [
            'id' => $id,
            'email' => $email,
            'nom' => $nom
        ];
    }

    header('location:login.php');
    exit;

?>
