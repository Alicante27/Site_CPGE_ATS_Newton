<?php session_start(); ?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" lang="fr-fr">

<head>
	<title>Contact BDA3TSi2</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
	<meta content="R. Achet" name="author" >
	<link rel="icon" type="image/png" href="favicon.png">
	
	<!-- CCS -->
	<link href="CSS/ats.css" rel="stylesheet" >
</head>



<body>
	<div id="conteneur"><div id="principal">
		<div class="titre2"><h2>Formulaire de signalement d'erreur dans la base d'aide à l'admission des ATS Ingénierie Industrielle</h2></div>
		
		
		<?php //confirmation envoie du mail si tout va bien
			if( isset($_SESSION['envoie']) ){ ?>
			<div class="succes">
				Votre message a été envoyé à l'administrateur de la base d'aide à l'admission des ATS Ingénierie Industrielle.
			</div>
		<?php } unset($_SESSION['envoie']); ?>		
		
		
		<div class="partie" style="text-align: center">
			<form action="contact_erreur_backend.php" method="POST"enctype="multipart/form-data">
				<div style="margin : 15px">
					<label for="message">Signaler une erreur:</label><br>
					<textarea id="message" name=message_erreur rows="12"  class="text_contact" >Soyez précis et concis.</textarea>
				</div>
				<div style="margin : 10px">
					<button type="submit" name="SUBMIT">Envoyer</button>
					<button type="reset" name="reset">Effacer </button>
				</div>
			</form>
		</div>
		
		<div style="text-align: center; margin-top: 25px;">
			<div >
				<a style="background-color: #b2b4cf;  border: 1px dotted; display: inline-flex;" href="ATS_ii_ecole_inge.php#BDA3TSi2" >Retour à la base d'aide à l'admission des ATS Ingénierie Industrielle.</a>
			</div>
		</div>
		
		<?php unset($_SESSION['input_erreur']); ?>
		
	</div></div>
</body>