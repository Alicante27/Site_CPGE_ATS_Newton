<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">

<head>
	<title>ATS Newton</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" >
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
	<meta content="R. Achet" name="author" >
	<link rel="icon" type="image/png" href="favicon.png">
	<meta name="description" content="Recrutement et inscription en ATS au lycée Newton.
	La CPGE ATS est une formation en un an ouvertes aux élèves titulaires d'un BTS ou d'un BUT 2 industriel, technique ou scientifique." />
	<!-- CCS -->
	<link href="CSS/ats.css" rel="stylesheet" >
	<link href="CSS/touch-sideswipe.css" rel="stylesheet" >
	
	<!-- les script -->
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
	
	<!-- Pour les graphes -->
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>




<body>

	<div id="entete">	
		<div class="titre1"><h1>ATS ingénierie industrielle - Lycée Newton</h1></div>
	
		<div id="MENU"></div>
	</div>
	
		
	<div id="conteneur">
				
		<div id="principal">
				
			<div class="titre2"> <h2>Le lycée Newton-ENREA (Clichy-la-Garenne)</h2> </div>
			
			<div class="case_centr" ><div class="shadow" ><div class="content2" >
			<div class="text2" style="text-align:center"><div class="alert">
				La <b>date limite</b> pour déposer un dossier de <b>candidature</b> pour l'année 2023/2024 est le <b>24 mai.</b>
			</div></div></div></div></div>
			
			
			<div class="partie2">
				<div class="col_85">
					<div class="partie">
					
							<div class="text2"><p>
								Le <a href="https://www.lycee-newton.fr/" >lycée Newton-ENREA (Clichy-la-Garenne)</a> est spécialisé dans les sciences appliquées avec un fort accent sur l'enseignement suppérieur, ainsi parmi les 1400 élèves du lycées
								plus d'un quart sont en <a href="https://sites.google.com/site/ptsinewton/">CPGE PTSI-PT</a> et <b>ATS Ingénierie Industrielle</b> ou en Sections de Techniciens Supérieurs.<br>
								Le lycée Newton dispose d'un <b>internat mixte</b> où les étudiants en Classes Préparatoires sont <b>prioritaire</b>
								sur les autres élèves. L'hébergement en <b>chambre individuelle</b> offre d'excellentes conditions de travail et de confort.
								À titre indicatif, le coût de l'internat en <b>pension complète</b> s'élève à environ <a href="https://www.lycee-newton.fr/le-lycee/l-internat"> 1500 € pour l'année scolaire 2020-2021</a>.
							</p></div>	

							<div class="partie2">
								<div class="col_img">
									<div class="case_centr2"><div class="img_500">
										<img src="images_newton/_DSC8863_DxO.jpg" alt="Photo Newton" style="width: 99%" >
									</div></div>
								</div>
								<div class="col_img">
									<div class="case_centr2"><div class="img_500">
										<img src="images_newton/_DSC7797_DxO.jpg" alt="Photo Newton" style="width: 99%" >
									</div></div>
								</div>
							</div>
							
					</div>
				</div> <!--fin col 85-->
				
				<div class="col_15">
					<div class="partie">
						<div style="text-align: center;">
							<b> Lycée Newton-ENREA</b><br>
							<a  href="https://www.lycee-newton.fr/"><div class="logo_newton">
									<img src="images_newton/logo_newton.png" alt="Logo newton" style="width:90%;max-width: 120px;" >
							</div></a>
						
						</div>
						<div style="text-align: center">
							<b>Adresse:</b><br>
							1 place Jules Verne <br>
							92110 Clichy-la-Garenne <br><br>
							
							<b>Secrétariat:</b><br>
							Tel: 01 41 06 78 78 <br>
							Mail: <a href="mailto:ce.0920136g@ac-versailles.fr">ce.0920136g@ac-versailles.fr</a><br><br>
							
							<b>Accès en transport en commun:</b><br>
						</div>
							&#8226; Métro 13 et 14.<br>
							&#8226; Transilien L.<br>
							&#8226; Bus lignes 54, 74, 304, 340, 341 et 174.
					</div>
					<div class="partie">
						<div style="text-align: center"><b>Contacter l'équipe pédagogique</b><br>
							<a href="contact_Newton.php">Formulaire de contact</a> ou <br>
							<?php 	$conf = require 'config_mail.php';
									$config_mailto = "mailto:" . $conf['mail']['destinataire_peda_newton']; ?>
							<a href=<?= $config_mailto ?>><?= $conf['mail']['destinataire_peda_newton'] ?></a>
						</div>
					</div>
					<div class="partie">
						<div style="text-align: center">
							<b>Espace élèves CPGE</b><br>
							<a href="http://130.93.156.125/"><div class="logo_newton">
								<img src="images_newton/logo_moodle.svg" alt="Logo newton" style="width: 90%" >
							</div></a>
						</div>
					</div>
				</div> <!--fin col 15-->
				
			</div>
			
				<div class="titre2"> <h2>Les CPGE ATS</h2> </div>
				<div class="partie">
					<div class="titre4">En général</div>
					<div class="text2"><p>
						Les <i>Classes Préparatoires aux grandes écoles Adaptation Technicien Supérieur</i>
						offrent aux étudiants titulaires d'un  diplôme de niveau Bac+2 (<b>BTS</b>, <b>BUT/DUT</b> ou diplôme équivalent)
						scientifique ou technologique la possibilité de préparer en <b>un an</b> les concours d'entrée dans les <b>écoles
						d'ingénieurs</b> et, pour certaines, dans les écoles vétérinaires. Des passerelles permettent aussi aux étudiants qui
						le souhaitent de poursuivre leurs études à l’université.
						Les ATS sont principalement labellisées <i>Ingénierie Industrielle</i>; mais il existe aussi des classes d'ATS
						<i>Génie Civil</i>, <i>Métiers de la Chimie</i> et <i>Biologie</i>.<br>
						De plus, il existe des ATS <i>Économie-Gestion</i>, qui préparent à intégrer une école de commerce et
						des ATS <i>Métiers de l'Horticulture et du Paysage</i> qui préparent aux écoles nationales supérieures du paysage.
					</p></div>
					
					<div class="titre4">ATS ingénierie industrielle</div>
					
					<div class="text2"><p>
						L'ATS ingénierie industrielle (ATS ii) est une formation proposé dans <a href="ATS_ii_liste_cpge.php">40 lycées en France
						métropolitaine et d'Outre-Mer</a>, elle est ouvertes aux élèves titulaires d'un BTS
						ou d'un BUT/DUT industriel, technique ou scientifique.
						À la fin de l'année, les étudiants passent un <a href="https://concours.ensea.fr/portail/ats.html">concours</a>
						réservé aux élèves d'ATS ingénierie industrielle permettant d'intégrer des <a href="ATS_ii_ecole_inge.php">écoles d'ingénieurs</a>.
						Il est également possible d'intégrer des écoles d'ingénieurs sur dossier.
					</p></div>
					
					<div style="text-align: center"><button  style="margin: 5px" id="toggle-button">En savoir plus sur une filière</button></div>
		
					<div class="target"><div style="margin-left: auto; margin-right: auto;"><table class="tfixed">
						<tr>
							<td ><div class="case" ><div class="shadow_index" ><a href="ATS_ii_presentation.php" class="content" >
								
								<div class="logo" ><img alt="Logo ii" src="images/Ingenieur_icon.png" height="99%"></div>
								<div class="texte2">
									ATS ingénierie industrielle
								</div>
							</a></div></div></td>
							
							<td><div class="case">	<div class="shadow_index"><a href="https://www.onisep.fr/Ressources/Univers-Formation/Formations/Post-bac/classe-preparatoire-ats-genie-civil" class="content">
								
								<div class="logo"><img alt="Logo GC" src="images/civil_icon.png" height="99%" ></div>
							
								<div class="texte2">
									ATS génie civil
								</div>
							</a></div></div></td>
						</tr>
						<tr>
							<td><div class="case"><div class="shadow_index"><a href="https://www.onisep.fr/Ressources/Univers-Formation/Formations/Post-bac/classe-preparatoire-ats-metiers-de-la-chimie" class="content">
								
								<div class="logo"><img alt="Logo chem" src="images/chemist_icon.png" height="99%" ></div>

								<div class="texte2">
									ATS métiers de la Chimie
								</div>
							</a></div></div></td>
						
							<td><div class="case"><div class="shadow_index"><a href="https://www.onisep.fr/Ressources/Univers-Formation/Formations/Post-bac/classe-preparatoire-ats-biologie" class="content">

								<div class="logo"><img alt="Logo Bio" src="images/Biology_icon.png" height="99%" ></div>

								<div class="texte2">
									ATS biologie
								</div>
							</a></div></div></td>
						</tr>
						<tr>
							<td><div class="case"><div class="shadow_index"><a href="https://www.onisep.fr/Ressources/Univers-Formation/Formations/Post-bac/classe-preparatoire-ats-metiers-de-l-horticulture-et-du-paysage" class="content">
								
								<div class="logo"><img alt="Logo horti" src="images/horti_icon.png" height="99%" ></div>

								<div class="texte2">
									ATS métiers de l'horticulture et du paysage
								</div>
							</a></div></div></td>
						
							<td><div class="case"><div class="shadow_index"><a href="https://www.onisep.fr/Ressources/Univers-Formation/Formations/Post-bac/classe-preparatoire-ats-economie-gestion" class="content">

								<div class="logo"><img alt="Logo Eco" src="images/Eco_Gest_icon.png" height="99%" ></div>

								<div class="texte2">
									ATS économie-gestion
								</div>
							</a></div></div></td>
						</tr>
					</table> </div></div>
					
					<?php // Script pour afficher/montrer merci stack overflow ?>
					<script type="text/javascript">
						document.getElementById('toggle-button').addEventListener('click', function () {
							toggle(document.querySelectorAll('.target'));
						});
					</script>
				</div>
				
				
				<div class="titre2"> <h2>Recrutement et inscription en ATS au lycée Newton</h2> </div>
				<div class="partie">
					<div class="case_centr" ><div class="shadow" ><div class="content2" >
					<div class="text2">
						La procédure de recrutement au lycée Newton est <a href="ATS_ii_candidater.php">commune aux autres ATS ingénierie industrielle</a>.
						Les critères de sélection pour intégrer la classe d'ATS prennent en compte:
						<ul>
							<li>Les résultats et surtout la progression pendant les formations antérieure (lycée) et actuelle (BTS ou BUT/DUT).
							<li>Les appréciations générales portées par les professeurs des formations antérieure et actuelle.
							<li>Le comportement personnel face au travail et à la vie de classe : ponctualité, assiduité, autodiscipline dans le travail.
						</ul>
						<div style="text-align: center; margin-top: 10px;">
							<b>Pas d'autocensure!</b> La prépa ATS du lycée Newton accueille chaque année des profils très divers.
						</div>
					</div></div></div></div>
					
					<div style="text-align: center"><button  style="margin: 5px" id="toggle-button2">Origine des élèves de l'ATS Newton (promotion 2023)</button></div>
	
					
					<div class="target_origine"><div class="partie2">				
						<div class="col_graphe"><div style="max-width:450px">
							
								<canvas id="Bac" ></canvas>
									<script>
										const ct = document.getElementById('Bac').getContext('2d');
										
										const data_bac = {
											labels: [
												"Pro",
												"Techno",
												"Général",
												"Général (étranger)"
											],
											datasets: [
												{
												data: [
													5,
													8,
													13,
													3
													],
											  backgroundColor: [
														"#3366CC",
														"#cc33b3",
														"#cc9933",
														"#33cc4d"
														],
											  hoverBackgroundColor: [
														"#3366CC",
														"#cc33b3",
														"#cc9933",
														"#33cc4d"
													],
											}
										  ]
										};
										
										const Bac = new Chart(ct, {
											type: 'pie',
											data: data_bac,
											options: {
												responsive: true,
												plugins: {
												  legend: {
													position: 'top',
												  },
												  title: {
													display: true,
													text: 'Type de Bac'
												  }
												}
											},
										});
									</script>
						</div></div>
									
									
						<div class="col_graphe"><div style="max-width:450px"><div class="case_centr2">
									<canvas id="Post_bac" ></canvas>
									<script>
										const ctx = document.getElementById('Post_bac').getContext('2d');
										
										const data_post_bac = {
											labels: [
												"BTS",
												"DUT",
												"DUT (étranger)"
											],
											datasets: [
												{
												data: [
													17,
													10,
													2
													],
											  backgroundColor: [
														"#3366CC",
														"#cc3366",
														"#66cc33"
														],
											  hoverBackgroundColor: [
														"#3366CC",
														"#cc3366",
														"#66cc33"
													],
											}
										  ]
										};
										
										const Post_bac = new Chart(ctx, {
											type: 'pie',
											data: data_post_bac,
											options: {
												responsive: true,
												plugins: {
												  legend: {
													position: 'top',
												  },
												  title: {
													display: true,
													text: 'Type de diplôme Bac +2'
												  }
												}
											},
										});
									</script>
						</div></div></div>
					</div></div>
									
					
					<?php // Script pour afficher/montrer merci stack overflow ?>
					<script type="text/javascript">
						document.getElementById('toggle-button2').addEventListener('click', function () {
							toggle(document.querySelectorAll('.target_origine'));
						});
					</script>
					
					
					<div class="text2">
						Quand un élève est admis au lycée Newton, il est contacté par l'administration du lycée	qui lui indique la procédure d'inscription.
						L'inscription en ATS n'est définitive qu'après réception du diplôme de BTS ou de BUT. L'équipe pédagogique organise une <b>réunion en
						juin avec les admis</b> afin de présenter l'ATS, le lycée Newton et de donner du travail à faire pour la rentrée.				
					</div>
				
				</div>
		
		
			<div id="Pied"></div>			
			<div id="Banniere"></div>
		</div> <!-- principal -->
	</div>	<!-- conteneur --> 
</body>

</html>

