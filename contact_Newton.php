<?php session_start(); ?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" lang="fr-fr">

<head>
	<title>ATS Newton</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
	<meta content="R. Achet" name="author" >
	<link rel="icon" type="image/png" href="favicon.png">
	
	<!-- CCS -->
	<link href="CSS/ats.css" rel="stylesheet" >
	<link href="CSS/touch-sideswipe.css" rel="stylesheet" >
	
	
	<script  src="JS/jquery-3.6.1.min.js"></script>
	<script> 
		$(function(){
			$("#Banniere").load("autre_php/banniere.php"); 
		});
	</script>
	<script> 
		$(function(){
			$("#Pied").load("autre_php/pied.php"); 
		});
	</script>
	<script> 
		$(function(){
			$("#MENU").load("autre_php/menu.php"); 
		});
	</script>
	<!-- Script pour afficher/montrer merci stack overflow -->
	<script src="JS/afficher_montrer.js"></script>
</head>


<body>
	<div id="entete">
		<div class="titre1"><h1>Contacter l'équipe pédagogique de l'ATS Newton</h1></div>
		
		<div id="MENU"></div>
	</div>
	

	<div id="conteneur"><div id="principal">
		<?php //affichage des erreurs si elles existent
			if( isset($_SESSION['errors']) ){ ?>
			<div class="alert">
				<?php echo implode("<br>", $_SESSION['errors']); ?>
			</div>
		<?php } unset($_SESSION['errors']); ?>
		
		
		<?php //confirmation envoie du mail si tout va bien
			if( isset($_SESSION['succes']) ){ ?>
			<div class="succes">
				Votre message a été envoyé à l'équipe pédagogique du lycée Newton.
			</div>
		<?php } unset($_SESSION['succes']); ?>		
		
		
		
		<?php // Pour conserver les nom, mail et messages et on les récupère dans session 
			$nom = isset($_SESSION['input']['name']) ? $_SESSION['input']['name'] : '';
			$mail = isset($_SESSION['input']['email']) ? $_SESSION['input']['email'] : '';			
			$message = isset($_SESSION['input']['message']) && !($_SESSION['input']['message'] == '') ? $_SESSION['input']['message'] : "Écrivez votre message ici.";
		?>
		
		<div class="partie" style="text-align: center">
			<form action="contact_Newton_backend.php" method="POST" enctype="multipart/form-data">
				<div style="margin : 10px">
					<div style="margin : 5px">
						<label for="name" class="label_bda3TSi2">Nom:</label>
						<input size="29" type="text" name=name id="name" placeholder="Votre nom" value="<?= $nom ?>" maxlength="254" >
					</div>
					<div style="margin : 5px">
						<label for="email" class="label_bda3TSi2">Mail:</label>
						<input size="29" type="text" name=email id="email" placeholder="Votre mail pour être recontacté" value="<?= $mail ?>" maxlength="254" >
					</div>
				</div>
				<div style="margin : 15px">
					<label for="message">Questions, demandes:</label><br>
					<textarea id="message" name=message rows="12" class="text_contact" ><?= $message ?></textarea>
				</div>
				<div style="margin : 10px">
					<button type="submit" name="SUBMIT">Envoyer</button>
					<button type="reset" name="reset">Tout effacer</button>
				</div>
			</form>
		</div>
		
		<div class="partie" style="text-align: center">
			Vous pouvez aussi envoyer un mail à
			<?php 	$conf = require 'config_mail.php';
				$config_mailto = "mailto:" . $conf['mail']['destinataire_peda_newton']; ?>
			<a href=<?= $config_mailto ?>><?= $conf['mail']['destinataire_peda_newton'] ?></a>
		</div>
		
		
		
		<?php unset($_SESSION['input']); ?>
		
		<div id="Banniere"></div>
	</div></div>
</body>