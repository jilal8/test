<?php 
	class Personnage{

		public $nombreVie = 5;
		public $nomPersonnage ;

		public function __construct($nombreVie, $nom){
			$this->nombreVie = $nombreVie;
			$this->nomPersonnage = $nom;
		}

		public function setNom($nom){
			$this->nomPersonnage = $nom;
		}

		public function setNombrevie($nbre){
			$this->nombreVie = $nbre;
		}

		public function getNom(){
			return $this->nomPersonnage;
		}

		public function getNombrevie(){
			return $this->nombreVie;
		}

	}

 ?>