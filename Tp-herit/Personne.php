<?php
    class Personne{
        protected $nom;
        protected $prenom;
        protected $age;

        public function setNom($nom){
            $this -> nom = $nom;
        }
        public function setPrenom($prenom){
            $this -> prenom = $prenom;
        }
        public function setAge($age){
            $this -> age = $age;
        }

        public function getNom(){
            return $this -> nom;
        }
        public function getPrenom(){
            return $this -> prenom;
        }
        public function getAge(){
            return $this -> age;
        }

        public function dormir(){
            return "dort";
        }


    }
?>