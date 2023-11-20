<?php
    class Eleve3{
        const ECOLE = 'Elève de notre école'; // Création de la constante
        private $_prenom;

        public function setPrenom($prenom){
            $this->_prenom=$prenom;
        }
        public function getPrenom(){
            return $this->_prenom;
        }
    }
    $eleve3 = new Eleve3;
    echo $eleve3::ECOLE;

?>
