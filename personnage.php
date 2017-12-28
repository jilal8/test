<?php 
	/**
	 * 
	 */
	class Personnage{

		public $nombreVie = 5;
		public $nomPersonnage ;
		/**
		 * @param int $nombreVie le nombre de vie du personnage
		 * @param string $nom le nom du personnage
		 */

		public function __construct($nombreVie, $nom){
			$this->nombreVie = $nombreVie;
			$this->nomPersonnage = $nom;
		}
		/**
		*
		*cette methode permet de nous retourner le nombre de vie de notre personnage
		*@param String $nom  le nom de notre personnage
		**/

		public function setNom($nom){
			$this->nomPersonnage = $nom;
		}

		/**
		*
		*cette methode permet de nous mettre à jour le nombre de vie de notre personnage
		*@param $nbre le nombre de vie 
		*
		**/
		public function setNombrevie($nbre){
			$this->nombreVie = $nbre;
		}
		
		/**
		*
		*cette methode permet de nous retourner le nom de notre personnage
		*@return String nom du personnage
		**/
		public function getNom(){
			return $this->nomPersonnage;
		}
		
		/**
		*
		*cette methode permet de nous retourner le nombre de vie de notre personnage
		*@return int nombre de vie
		**/
		public function getNombrevie(){
			return $this->nombreVie;
		}

	}
 ?>
