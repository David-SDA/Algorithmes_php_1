<?php
    class Personne{
        private string $nom;
        private string $prenom;
        private string $date_naissance;

        public function __construct(string $nom, string $prenom, string $date_naissance){
            $this->nom=$nom;
            $this->prenom=$prenom;
            $this->date_naissance=$date_naissance;
        }

        public function get_nom(){
            return $this->nom;
        }

        public function get_prenom(){
            return $this->prenom;
        }

        public function get_date_naissance(){
            return $this->date_naissance;
        }
        //pas besoin de setters et getters

        public function calcul_age(string $date_naissance){
            $aujourdhui=new DateTime();
            $date=new DateTime($date_naissance);
            $diff=$aujourdhui->diff($date);
            return $diff->format("%Y");
        }

        public function __toString()
        {
            return "$this->prenom $this->nom a ". $this->calcul_age($this->date_naissance) ." ans<br>";
        }
    }
?>