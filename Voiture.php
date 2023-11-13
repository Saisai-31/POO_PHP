<?php

    //Je créé ma classe, avec la 1ere lettre du nom de la class en Majuscule
    class Voiture{
        //J'ajoute mes attributs ou propriétés (en public, private ou protectedss)
        public $marque;
        public $couleur;

        //Je créé mon constructor avec deux paramètres. $this->nom de l'attribut = nom du paramètre
        public function __construct($marq, $coul){
            $this->marque = $marq;
            $this->couleur = $coul;
        }    
    }

    //J'instancie mes 2 objets avec new et ses paramètres
    $mavoiture = new voiture("Renault", "Blanche");
    $notrevoiture = new voiture("Mazzerati", "Grise");

    //J'affiche mon objet
    echo $mavoiture->marque. PHP_EOL;
    echo $mavoiture->couleur. PHP_EOL;
    echo "<br>";
    echo $notrevoiture->marque. PHP_EOL;
    echo $notrevoiture->couleur. PHP_EOL;
    
?>
