<?php
//Creation de la classe
class Personne{
    public $prenom;
    public $nom;
    public $age;
    //Création des constructors
    public function __construct($prenom, $nom, $age){
        $this->prenom=$prenom;
        $this->nom=$nom;
        $this->age=$age;
    }
    public function danser(){
        return $this->prenom. " est entrain de danser" . PHP_EOL;
    }
    public function nomComplet(){
        //return $this->nom .' ' . $this->prenom .' ' .$this->age . PHP_EOL;
        return sprintf('%s %s %d', $this->nom, $this->prenom, $this->age);
    }
}

//Créer un nouveau objet ou une nouvelle instance à partir de la classe Personne, instancier
$magne = new Personne('Magne', 'Jean', 102);
$cyril = new Personne('Cyril', 'Saï', 45);

echo $magne->prenom."<br>";
echo $cyril->prenom."<br>";

$nomCompletDeMagne = $magne->prenom;

echo $magne->prenom . PHP_EOL;
echo $magne->nom . PHP_EOL;
echo $magne->age . PHP_EOL;
echo "<br>";
echo $cyril->prenom . PHP_EOL;
echo $cyril->nom . PHP_EOL;
echo $cyril->age . PHP_EOL;
echo "<br>";
echo $magne->danser();
echo "<br>";
$ToutLeNom= $magne->nomComplet();
echo $ToutLeNom . PHP_EOL;







?>