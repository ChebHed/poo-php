<?php

class Personne
{
    //attibut
    public $nom;
    public $prenom;
    public $dateDeNaissance;
    public $taille;
    public $sexe;

    //constantes
    const NOMBRE_DE_BRAS = 2;
    const NOMBRE_DE_JAMBES = 2;
    const NOMBRE_DE_YEUX = 2;
    const NOMBRE_DE_PIEDS = 2;
    const NOMBRE_DE_MAINS = 2;

    //méthodes
    public function __construct() 
    {
        $this->nom=$nom;
        $this->prenom=$prenom;
    }

    public function boire()
    {
        echo "la personne boit</br>";
    }

    public function manger()
    {
        echo "la personne mange </br>";
    }

}



?>
