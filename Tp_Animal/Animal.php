<?php
    class Animal{
        protected $nom;
        protected $age;

        public function setNom($nom){
            $this -> nom = $nom;
        }
        public function setAge($age){
            $this -> age = $age;
        }

        public function getNom(){
            return $this -> nom;
        }
        public function getAge(){
            return $this -> age;
        }
    }
?>