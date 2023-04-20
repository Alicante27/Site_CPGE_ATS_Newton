<?php 
$errors = [];
session_start();
	
unset($_SESSION['errors']);
unset($_SESSION['input']);

if (!isset($_POST['message']) || $_POST['message'] == '' || $_POST['message'] == 'Écrivez votre message ici.'){
		$errors['message'] = "Vous n'avez pas renseigné de message.";
}

if (!isset($_POST['name']) || $_POST['name'] == ''){
		$errors['name'] = "Vous n'avez pas renseigné de nom.";
}

if (!isset($_POST['email']) || $_POST['email'] == '' || !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
		$errors['email'] = "Vous n'avez pas renseigné de mail valide.";
}

if ( !empty($errors) ){
	$_SESSION['errors'] = $errors;
	$_SESSION['input'] = $_POST;
	header("location: contact_Newton.php");
}else{
	$conf = require 'config_mail.php';
	$destinataire = $conf['mail']['destinataire_peda_newton'];
	$headers = "From: Website <".$destinataire.">\r\nReply-To: ".$destinataire;
	$sujet = "Contact pédagogique de M." . $_POST['name'];
	
	mail($destinataire, $sujet, "Réponse à: " . $_POST['email'] . " Message:  " . $_POST['message'] , $headers );
	
	$_SESSION['succes'] = [0];
	header("location: contact_Newton.php");
}
?>