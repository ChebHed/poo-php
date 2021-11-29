<?php
require "Personne.php";

$personne1=new Personne('Chebeur', 'Hedy', '11/05/1989', '180', 'M' );
echo 'Nom : ', $personne1->nom, '</br>';
echo 'Prenom : ', $personne1->prenom, '</br>';
echo 'Date de naissance : ' , $personne1->dateDeNaissance, '</br>';
echo 'taille : ', $personne1->taille, '</br>';
echo 'sexe : ', $personne1->sexe, '</br>';

echo '</br>';

$personne1->boire();
$personne1->manger();

?>