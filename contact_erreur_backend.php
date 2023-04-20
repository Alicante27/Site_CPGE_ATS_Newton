<?php 
session_start();

$conf = require 'config_mail.php';
$liste_mail = $conf['mail'];

if (!isset($_POST['message_erreur']) || ($_POST['message_erreur']=='') || ($_POST['message_erreur']=='Soyez précis et concis.')){
	header("location: contact_erreur.php");
}else{	
	mail($liste_mail['destinataire_BDA3TSi2'] , 'Signalement erreur BDA3TSi2' , $_POST['message_erreur'] );
	$_SESSION['envoie'] = [0];
	header("location: contact_erreur.php");
}
?>