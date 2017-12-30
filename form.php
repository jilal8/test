<?php
 /**
  *
  *class formulaire permmettant de nous generer les differents champs et rapidement
  */
   class form{
  
    /**
    *@var array un utilise par le formulaire pour mieu enregistrer nos donnée a la fin
    */
    private $data;
    /**
    *
    *construct un constructeur de la class form
    *@param data donnée recu en parametre
    */
    public function __construct($data){
      
      $this->data = $data;
    
    }
    /**
    *fonction pour nous faire passer toujours a la ligne
    *@param $html donnée html
    *@return on retourn le champs bien preparer et bien construit
    */
    
    public function retourAlaligne($html){
       return '<p>'.$html.'</p>';
    }
    /**
				 * cette methode va nous permetre de creer un lien cliquable
				 * @param  String $titre le titre du lien
				 * @return String        le lien
				 */
				public function href($titre){
						return '<a href="#" id="lieninscription">'.$titre.'</a>';
				}
    /**
    *on utilise cette methode nous genere un bouton du type submit pour proceder le soumission des information
    *@param  String $nom pour dire le nom du champ 
    *@param String $libelle pour dire le libelle du champs
    *@return on retourn le boutton bien preparer et bien construit
    */
    public function submit($nom,$libelle){
      return $this->retourAlaligne('<button type="submit" name"'.$nom.'" class="btn btn-primary">'.$libelle.'</button>');
    }
     /**
    *on utilise cette methode  nous generer un champ du type text pour proceder la saisies des informations
    *@param  $nom pour dire le nom du champ 
    *@param $libelle pour dire le libelle du champs
    *@return on retourn le champs bien preparer et bien construit
    */
    public function input($nom,$libelle){
      if($nom == "password"){
        return '<label>'.$libelle.'</label>'.$this->retourAlaligne('<input type="password" name="'.$nom.'" class="form-control" placeholder="********">');
      }else{
         return '<label>'.$libelle.'</label>'.$this->retourAlaligne('<input type="text" name="'.$nom.'" class="form-control" placeholder="nom d utilisateur">');
      }
      }
    
     
  
  
  }
  }
