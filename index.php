
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
  <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/C35193E5-1449-6D4D-931E-3DF2CBA0F855/main.js" charset="UTF-8"></script>
</head>
<body>
 	<?php 
	include 'Personnage.php';
	include 'form.php';
	
	echo '<div id="connexion">';
	echo '<h3 class="tittle">Déjà un memebre</h3>';
	echo '<form action="traitement.php" method="post">';
	echo $form->input("username","username","text");
	echo $form->input("password","mot de passe","password");
	echo $form->submit("submit","se connecter");
	echo '</form>';
	echo '</div>';

	echo '<di id="inscrip">';
        echo $form->href("s'incrire ici");
        echo '</div>';

	echo '<div id="inscription" style="visibility:hidden;">';
	echo '<h3 class="tittle">Inscription </h3>';
	echo '<form action="traitementIncsr.php" method="post">';
	echo $form->input("nom","Votre nom","text");
	echo $form->input("mail","E-mail","email");
	echo $form->input("password","choisir mot de passe","password");
	echo $form->input("password1","confirmer mot de passe","password");
	echo $form->submit("submit","Envoyer");
	echo '</form>';
	echo '</div>';
 ?>
 </body>
 </html>
