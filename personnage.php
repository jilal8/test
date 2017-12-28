<?php 
	class Personnage{

		private $nombreVie = 5;
		private $nomPersonnage ;

		public function __construct($nom){
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
