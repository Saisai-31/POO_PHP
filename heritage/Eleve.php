<?php

//Le constructor est par defaut pour la création de notre objet instancié par new
    class Eleve {
        protected $_prenom;

        public function setPrenom($prenom){
            $this->_prenom = $prenom;
        }
        public function getPrenom(){
            return $this->_prenom;
        }
    }

?>