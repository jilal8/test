<?php 
require 'index.php';
require 'BD/db_file.php';
		if(!empty($_POST)){
			
			 $nom=htmlspecialchars(htmlentities(trim($_POST['nom'])));
			 $email = htmlspecialchars(htmlentities(trim($_POST['mail'])));
			 $pass=htmlspecialchars(htmlentities(trim($_POST['password'])));
			 $pass1=htmlspecialchars(htmlentities(trim($_POST['password1'])));

			 // echo $nom;
			 // echo $email;
			 // echo $pass;
			 // echo $pass1;
			 if($pass!=$pass1){

			 	echo "le deux mot de passe ne se correspondent pas.";
			 	die();
			 }else{
			 	
			 	$connectionbd=connectionBD::getUniqueInstance();
			 	if($connectionbd->select($nom,$pass)>0){
			 		echo 'vous êtes déjà un membre';
			 	}else{
			 		$connectionbd->insert("",$nom,$email,$pass,"users");
			 	}
			 }

		}else{
			echo "nulll";
			die();
		}

	 


 ?>
