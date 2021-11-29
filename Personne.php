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
    public function __construct(string $nom, string $prenom, string $dateDeNaiss, string $taille, string $sexe) 
    {
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->dateDeNaissance=$dateDeNaiss;
        $this->taille=$taille;
        $this->sexe=$sexe;
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
