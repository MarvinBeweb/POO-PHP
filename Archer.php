<?php
//La classe Guerrier hérite de la classe abstraite Stats et implémente l'interface IClasse qui permet la methode Attaquer
  class Archer extends Stats implements iClasse {

    public function __construct() {
      $this->nom = "Archer";
    }

    public function attaquer() {
      echo " tire une flèche";
    }

  }
