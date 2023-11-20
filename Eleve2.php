<?php
    class Eleve2{
        private $_prenom;

        public function __construct(){
            $this->dateInscription = date('d/m/Y H:i:s');
        }

        public function setPrenom($prenom){
            $this->_prenom  = $prenom;
        }
        public function getPrenom(){
            return $this->_prenom;
        }
    }

?>