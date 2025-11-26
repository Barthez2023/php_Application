<?php
   class Visiteur{
    private $prenom;
    public $nom;

    //permet d'entrer  le prenom
    public function set_prenom($nouveau_prenom){
        $this->prenom=$nouveau_prenom;
    }

    //permet d'entrer le nom
    public function set_nom($nouveau_nom){
        $this->nom=$nouveau_nom;
    }

    public function get_prenom(){
       return  $this->prenom;
    }

    public function get_nom(){
       return  $this->nom;
    }


   }
    
?>