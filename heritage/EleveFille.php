<?php
    //Le constructor est par defaut pour la création de notre objet instancié par new.
    //extends permet d'appeler le papa, d'hériter de la class Eleve.
    class Elevefille extends Eleve{
        private $_age;

        public function setAge($age){
            $this->_age = $age;
        }
        public function getAge(){
            return $this->_age;
        }
        public function setPrenom($prenom){
            $this->_prenom = ucfirst($prenom);
        }
    }

?>

