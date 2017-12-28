
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

	//$matie = new Personnage(2,"mahdi");

	//$matie->setNom("jilal_mahdi_hassanMHD");

	//var_dump($matie->getNom());

	$form = new form(
		array(
			'username'=>'pilote_jilal'
		)
	);
	echo $form->input("username","username");
	echo $form->input("password","mot de passe");

	echo $form->submit("submit","Envoyer");
 ?>
 </body>
 </html>
