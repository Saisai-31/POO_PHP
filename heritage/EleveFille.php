<?php
    class Elevefille extends Eleve{
        public $_age;

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