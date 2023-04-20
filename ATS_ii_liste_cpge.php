<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">

<head>
	<title>ATS Newton</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >	
	<meta name="viewport" content="width=device-width, initial-scale=1" >
	<meta content="R. Achet" name="author" >
	<link rel="icon" type="image/png" href="favicon.png">
	
	<!-- CCS -->
	<link href="CSS/ats.css" rel="stylesheet" >
	<link href="CSS/touch-sideswipe.css" rel="stylesheet" >
	
	<?php // liste_ats.js contient la liste des cpge ATS pour gmap ?>
	<script type="module" src="JS/liste_ats.js"></script>
	
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
</head>



<body>
	<div id="entete">
		<div class="titre1"><h1>Listes des ATS ingénierie industrielle</h1></div>
		
		<div id="MENU"></div>
	</div>
	
	
	<div id="conteneur"><div id="principal">
			
		<div class="partie2">
			<div class="col">
				<div class="titre2"><h2>Choisir un lycée</h2></div>
				<div class="partie"><div class="text2"><p>
					L'ATS Ingénierie Industrielle (ATS ii) est proposé dans 40 Lycées; l’immense majorité (37 lycées) est située
					en France métropolitaine, les trois derniers sont situé à La Réunion, en Polynésie Française <i>(ouverture rentré 2023)</i> et en Nouvelle-Calédonie.<br>
					
					L'année d'ATS est courte; tout temps perdu dans les transports
					n'est pas passé à travailler. Ainsi, il est <b>fortement conseillé d'habiter
					à moins de 30 min en transport</b> de son lycée.
					De nombreux lycées proposent des places d'internat, ce qui résout le problème du transport.
					Vous pouvez découvrir les ATS proches de chez vous sur la carte ci-contre.
				</p>
			
				<div class="titre4">Un cas particulier</div>
				<p>Les lycées Lycée Joseph GALLIENI et  Déodat DE SÉVERAC accueillent chacun une classe d'ATS Ingénierie industrielle; comme
					le recrutement est commun (et une partie de l'équipe éducative), ils ont été regroupés.</p>
				</div></div>
			</div>	
			
			<div class="col">
				<div class="titre2"><h2>Carte des ATS ingénierie industrielle</h2></div>
			
				<?php // La partie qui contient la carte ou le message pour accepter les cookies ?>
				<div class="partie">
					<div class="message_gmap">
						Si vous voulez voire la carte &laquo;Google Map&raquo;, veuillez accepter les cookies et recharger la page.
					</div>
				
					<div id="map"></div>
				</div>
				
				<?php // Script pour afficher la carte ou un message ?>
				<script type="text/javascript" src="JS/afficher_gmap.js"></script>
					
			</div>
		</div>
		
		<div class="titre2"><h2> Adresses et sites web des ATS Ingénierie Industrielle </h2></div>
		<div class="partie">
			<div class="col">
				<div class="case2" ><div class="shadow3" ><div class="content3 " ><div class="text2">
					<b>Lycée Saint ELOI</b> <br>
					9 avenue Jules ISAAC – 13626 AIX-EN-PROVENCE Cedex <br>
					Tél : 04 42 23 44 99 – Fax : 04 42 21 63 63 <br>
					Mél : ce.0131391s@ac-aix-marseille.fr <br>
					Mél : s.mahut@lycee-saint-eloi.com <br>
					Web : <a href="http://www.lycee-saint-eloi.com">http://www.lycee-saint-eloi.com</a>
				</div></div></div></div>
				
				<div class="case2" ><div class="shadow3" ><div class="content3 " ><div class="text2">
					<b>Lycée Louis RASCOL</b> <br>
					10 rue de la République – 81012 ALBI cedex 9 <br>
					Tél. : 05 63 48 25 02 - Fax : 05 63 48 25 03<br>
					Mél. : 0810004p@ac-toulouse.fr<br>
					Web : <a href="http://ats.rascol.net/">http://ats.rascol.net/</a>
				</div></div></div></div>
				
				<div class="case2" ><div class="shadow3" ><div class="content3 " ><div class="text2">
					<b>Lycée Jean JAURÈS</b> <br>
					25 rue Charles Lecocq – 95104 ARGENTEUIL <br>
					Tél. : 01 39 98 50 00 – Fax : 01 39 98 50 01 <br>
					Mél. : 0950641f@ac-versailles.fr <br>
					Web : <a href="https://cpgejaures.fr">https://cpgejaures.fr</a>
				</div></div></div></div>
				
				<div class="case2" ><div class="shadow3" ><div class="content3 " ><div class="text2">
					<b>Lycée Philippe DE GIRARD</b> <br>
					138 Avenue de Tarascon - 84082 AVIGNON cedex 2 <br>
					Tél : 04 13 95 10 00 – Fax : 04 90 88 72 46 <br>
					Mél : ce.0840005z@ac-aix-marseille.fr <br>
					Web : <a href="http://www.campus-avignon.fr">http://www.campus-avignon.fr</a>
				</div></div></div></div>
			
				<div class="case2" ><div class="shadow3" ><div class="content3 " ><div class="text2">
					<b>Lycée Jean MOULIN</b> <br>
					Avenue des Martyrs de la Résistance – BP 745 – 34521 BÉZIERS <br>
					Tél. : 04 67 35 58 92 – Fax : 04 67 35 59 39 <br>
					Mél. : ce.0340011c@ac-montpellier.fr <br>
					Web : <a href="https://ats.sti-beziers.fr">https://ats.sti-beziers.fr</a>
				</div></div></div></div>
					
				<div class="case2" ><div class="shadow3" ><div class="content3 " ><div class="text2">
					<b>Lycée Gustave EIFFEL</b> <br>
					143 cours de la Marne – CS 31237 – 33074 BORDEAUX cedex <br>
					Tél. : 05 56 33 83 00 – Fax : 05 56 33 83 36 <br>
					Mél. : ce.0330028b@ac-bordeaux.fr <br>
					Web : <a href="http://www.eiffel-bordeaux.org">http://www.eiffel-bordeaux.org</a>
				</div></div></div></div>
			
				<div class="case2" ><div class="shadow3" ><div class="content3 " ><div class="text2">
					<b>Lycée Dumont d’URVILLE / Institut LEMONNIER </b><br>
					73 rue de Lébisey / 60 rue d'Hérouville <br>
					BP 45140 14070 CAEN Cedex 5 / CS 80269 14013 CAEN Cedex <br>
					Tél. : 02 31 95 58 00 / 02 31 46 76 00 <br>
					Mél. : ce.0142131r@ac-caen.fr <br>
					Web : <a href="http://dumont.durville.free.fr">http://dumont.durville.free.fr</a> ou
					<a href="http://institut-lemonnier.fr"> http://institut-lemonnier.fr </a>
				</div></div></div></div>
					
				<div class="case2" ><div class="shadow3" ><div class="content3 " ><div class="text2">
					<b>Lycée Jules FERRY </b><br>
					82 boulevard de la République – CS 30042 – 06414 CANNES cedex <br>
					Tél. : 04 93 06 52 00 – Fax : 04 93 06 52 05 <br>
					Mél. : ce.0060014h@ac-nice.fr <br>
					Web : <a href="https://julesferry-cannes.fr/">https://julesferry-cannes.fr/</a>
				</div></div></div></div>
			
				<div class="case2" ><div class="shadow3" ><div class="content3 " ><div class="text2">
					<b>Lycée LA FAYETTE </b><br>
					BP 07 – 77430 CHAMPAGNE-SUR-SEINE <br>
					Tél. : 01 64 69 54 10 – Fax : 01 64 69 54 11 <br>
					Mél. : ce.0770920g@ac-creteil.fr <br>
					Web : <a href="http://www.lyceelafayette.fr">http://www.lyceelafayette.fr</a>
				</div></div></div></div>
					
				<div class="case2" ><div class="shadow3" ><div class="content3 " ><div class="text2">
					<b>Lycée LA FAYETTE </b><br>
					63002 CLERMONT-FERRAND cedex <br>
					Tél. : 04  73 28 08 08 – Fax : 04 73 28 08 42 <br>
					Mél. : 0630021f@ac-clermont.fr <br>
					Web : <a href="https://lycee-lafayette-clermont.fr/"> https://lycee-lafayette-clermont.fr/ </a>
				</div></div></div></div>
			
				<div class="case2" ><div class="shadow3" ><div class="content3 " ><div class="text2">
					<b>Lycée Isaac NEWTON - ENREA </b><br>
					1 place Jules Verne – 92110 CLICHY-LA-GARENNE <br>
					Tél. : 01 41 06 78 78 – Fax : 01 47 37 90 32 <br>
					Mél. : ce.0920136g@ac-versailles.fr <br>
					Web : <a href="https://www.ats-newton.fr">https://www.ats-newton.fr</a>
				</div></div></div></div>

				<div class="case2" ><div class="shadow3" ><div class="content3 " ><div class="text2">
					<b>Lycée Robert  DOISNEAU </b><br>
					89 Avenue Serge Dassault – 91813 CORBEIL-ESSONNES <br>
					Tél. : 01 60 88 81 81 – Fax : 01 60 88 46 51 <br>
					Mél. : ats.doisneau@gmail.com <br>
					Web : <a href="http://ats.doisneau.free.fr">http://ats.doisneau.free.fr</a>
				</div></div></div></div>

				<div class="case2" ><div class="shadow3" ><div class="content3 " ><div class="text2">
					<b>Lycée Gustave EIFFEL </b><br>
					15 avenue Champollion – BP 17430 – 21074 DIJON cedex <br>
					Tél. : 03 80 60 42 12 – Fax : 03 80 60 42 02 <br>
					Mél. : 0211033j@ac-dijon.fr <br>
					Web : <a href="http://lyc21-eiffel.ac-dijon.fr/formation/prepa-ats">http://lyc21-eiffel.ac-dijon.fr/formation/prepa-ats</a>
				</div></div></div></div>
					
				<div class="case2" ><div class="shadow3" ><div class="content3 " ><div class="text2">
					<b>Lycée Pierre MENDÈS FRANCE </b><br>
					2 rue du Haut des Étages – BP 582 – 88021 ÉPINAL cedex <br>
					Tél. : 03 29 81 21 81 – Fax : 03 29 81 21 98 <br>
					Mél. : ce.0880021@ac-nancy-metz.fr <br>
					Web : <a href="http://www4.ac-nancy-metz.fr/cpge-pmf-epinal/">http://www4.ac-nancy-metz.fr/cpge-pmf-epinal/</a>
				</div></div></div></div>

				<div class="case2" ><div class="shadow3" ><div class="content3 " ><div class="text2">
					<b>Lycée André ARGOUGES </b><br>
					61 rue Léon Jouhaux – 38029 GRENOBLE cedex 2 <br>
					Tél. : 04 76 44 48 05 – Fax : 04 76 44 91 05 <br>
					Mél. : ce.0381603L@ac-grenoble.fr <br>
					Web : <a href="https://argouges.ent.auvergnerhonealpes.fr/">https://argouges.ent.auvergnerhonealpes.fr/</a>
				</div></div></div></div>
					
				<div class="case2" ><div class="shadow3" ><div class="content3 " ><div class="text2">
					<b>Lycée Léonce VIELJEUX </b><br>
					rue des Gonthières – 17026 LA ROCHELLE cedex 1 <br>
					Tél. : 05 46 34 79 32 – Fax : 05 46 34 22 288 <br>
					Mél. : cpge_ats.vieljeux@ac-poitiers.fr <br>
					Web : <a href="https://lycee-vieljeux.fr/pf/adaptation-techniciens-superieurs/">https://lycee-vieljeux.fr/pf/adaptation-techniciens-superieurs/</a>
				</div></div></div></div>
			
				<div class="case2" ><div class="shadow3" ><div class="content3 " ><div class="text2">
					<b>Lycées Gabriel TOUCHARD et George WASHINGTON </b><br>
					8 place Washington – BP 22160 – 72002 LE MANS cedex <br>
					Tél. : 02 43 50 16 20 – Fax : 02 43 84 51 50 <br>
					Mél. : ce.0720033v@ac-nantes.fr <br>
					Web : <a href="https://www.touchard-washington.fr/">https://www.touchard-washington.fr/</a>
				</div></div></div></div>
					
				<div class="case2" ><div class="shadow3" ><div class="content3 " ><div class="text2">
					<b> Lycée Roland GARROS </b><br>
					rue Roland Garros – BP 461 – 97839 LE TAMPON (La Réunion) <br>
					Tél. : 262 57 81 00 – Fax : 262 27 94 85 <br>
					Mél. : ce.9740002j@ac-reunion.fr <br>
					Web : <a href="https://etab.ac-reunion.fr/lyc-roland-garros/">https://etab.ac-reunion.fr/lyc-roland-garros/</a>
				</div></div></div></div>

				<div class="case2" ><div class="shadow3" ><div class="content3 " ><div class="text2">
					<b>Lycée Félix LE DANTEC </b><br>
					Rue des Cordiers - BP 80349 – 22303 LANNION <br>
					Tél : 02 96 05 61 71 – Fax: 02 96 37 12 90 <br>
					Mél : ce.0220023f@ac-rennes.fr <br>
					Web : <a href="https://lycee-ledantec.fr/">https://lycee-ledantec.fr/</a>
				</div></div></div></div>
				
				<div class="case2" ><div class="shadow3" ><div class="content3 " ><div class="text2">
					<b> Lycée César BAGGIO </b><br>
					Boulevard d'Alsace – 59000 LILLE  <br>
					Tél. : 03 20 88 67 88 – Fax : 03 20 88 62 17 <br>
					Mél. : ce.0590121L@ac-lille.fr <br>
					Web : <a href="http://www.lycee-baggio.fr"> http://www.lycee-baggio.fr </a>
				</div></div></div></div>
			</div>
			<div class="col">
				<div class="case2" ><div class="shadow3" ><div class="content3 " ><div class="text2">
					<b> Lycée Édouard BRANLY </b><br>
					25 rue de la Tourvielle – 69332 LYON cedex 05  <br>
					Tél. : 04 72 16 70 00 – Fax : 04 72 16 70 01 <br>
					Mél. : 0690128P@ac-lyon.fr <br>
					Web : <a href="http://www.lyceebranly.com">http://www.lyceebranly.com</a>
				</div></div></div></div>
				
				<div class="case2" ><div class="shadow3" ><div class="content3 " ><div class="text2">
					<b> Lycée du REMPART </b><br>
					1 rue du Rempart – 13007 MARSEILLE  <br>
					Tél. : 04 91 14 32 85 – Fax : 04 91 14 32 86 <br>
					Mél. : ce.0130049h@ac-aix-marseille.fr <br>
					Web : <a href="http://www.lyc-rempart.ac-aix-marseille.fr">http://www.lyc-rempart.ac-aix-marseille.fr</a>
				</div></div></div></div>
				
				<div class="case2" ><div class="shadow3" ><div class="content3 " ><div class="text2">
					<b> Lycée Louis ARMAND </b><br>
					3 boulevard des Nations – BP 2008 – 68058 MULHOUSE cedex  <br>
					Tél. : 03 89 33 47 80 – Fax : 03 89 33 47 99 <br>
					Mél. : ce.0680034t@ac-strasbourg.fr <br>
					Web : <a href="http://www.lyc-armand-mulhouse.ac-strasbourg.fr">http://www.lyc-armand-mulhouse.ac-strasbourg.fr</a>
				</div></div></div></div>

				<div class="case2" ><div class="shadow3" ><div class="content3 " ><div class="text2">
					<b> Lycée Eugène LIVET </b><br>
					16 rue Dufour – 44042 NANTES cedex <br>
					Tél. : 02 51 81 23 23 – Fax : 02 51 81 23 36 <br>
					Mél. : ce.0440029T@ac-nantes.fr <br>
					Web : <a href="http://livet.cpge.free.fr/WATS/?page_id=8">http://livet.cpge.free.fr/WATS/?page_id=8</a>
				</div></div></div></div>
				
				<div class="case2" ><div class="shadow3" ><div class="content3 " ><div class="text2">
					<b> Institut Emmanuel D'ALZON  </b><br>
					11 rue Sainte Perpétue – 30020 NÎMES cedex <br>
					Tél. : 04 66 04 93 00 – Fax : 04 66 04 93 04 <br>
					Mél. : secretariat.enseignementsup@dalzon.com <br>
					Web : <a href="http://www.dalzon.com/article.jsp?id_article=321">http://www.dalzon.com/article.jsp?id_article=321</a>
				</div></div></div></div>
				
				<div class="case2" ><div class="shadow3" ><div class="content3 " ><div class="text2">
					<b> Lycée Marie CURIE  </b><br>
					47 boulevard Pierre de Coubertin – 60180 NOGENT-SUR-OISE <br>
					Tél. : 03 44 74 31 31 – Fax : 03 44 74 31 01 <br>
					Mél. : ats.nogent@ac-amiens.fr <br>
					Web : <a href="https://marie-curie-nogent-sur-oise.ac-amiens.fr/">https://marie-curie-nogent-sur-oise.ac-amiens.fr/</a>
				</div></div></div></div>
				
				<div class="case2" ><div class="shadow3" ><div class="content3 " ><div class="text2">
					<b> Lycée DIDEROT </b><br>
					61 rue David d'Angers – 75019 PARIS <br>
					Tél. : 01 40 40 36 36 – Fax : 01 40 40 36 74 <br>
					Mél. : lycee@diderot.org <br>
					Web : <a href="http://www.diderot.org">http://www.diderot.org</a>
				</div></div></div></div>
				
				<div class="case2" ><div class="shadow3" ><div class="content3 " ><div class="text2">
					<b> Lycée BERGSON-JACQUARD </b><br>
					2 rue Bouret – 75019 PARIS <br>
					Tél. : 01 44 84 40 00 – Fax : 01 44 84 40 13 <br>
					Mél. : ats.jacquard@free.fr <br>
					Web : <a href="http://ats.jacquard.free.fr/"> http://ats.jacquard.free.fr/ </a>
				</div></div></div></div>
				
				<div class="case2" ><div class="shadow3" ><div class="content3 " ><div class="text2">
					<b> Lycée Yves THÉPOT </b><br>
					28 avenue Yves THÉPOT - BP 61 439 - 29104 QUIMPER <br>
					Tél : 02 98 90 25 97 – Fax : 02 98 90 47 77 <br>
					Mél : ce.0290071v@ac-rennes.fr  <br>
					Web : <a href="http://www.lycee-thepot.org/">http://www.lycee-thepot.org/</a>
				</div></div></div></div>
				
				<div class="case2" ><div class="shadow3" ><div class="content3 " ><div class="text2">
					<b> Lycée Marcel CALLO </b><br>
					21 avenue Étienne Gascon – BP 80324 – 35603 REDON cedex <br>
					Tél. : 02 99 71 41 33 – Fax : 02 99 72 33 78 <br>
					Mél. : contact@lyceemarcelcallo.org  <br>
					Web : <a href="http://www.lyceemarcelcallo.org">http://www.lyceemarcelcallo.org</a>
				</div></div></div></div>
				
				<div class="case2" ><div class="shadow3" ><div class="content3 " ><div class="text2">
					<b> Lycée François ARAGO </b><br>
					1 rue François Arago – 51095 REIMS cedex <br>
					Tél. : 03 26 06 40 25 – Fax : 03 26 06 65 28 <br>
					Mél. : ats@lyceearago.net  <br>
					Web : <a href="https://ats.lyceearago.net">https://ats.lyceearago.net</a>
				</div></div></div></div>
				
				<div class="case2" ><div class="shadow3" ><div class="content3 " ><div class="text2">
					<b> Lycée JOLIOT-CURIE </b><br>
					144 boulevard de Vitré – BP 80314 – 35703 RENNES cedex 7 <br>
					Tél. : 02 99 28 81 00 – Fax : 02 99 28 81 01 <br>
					Mél. : scolarite-postbac0350029s@ac-rennes.fr <br>
					Web : <a href="https://joliot-curie.wixsite.com/cpge-ats">https://joliot-curie.wixsite.com/cpge-ats</a>
				</div></div></div></div>
				
				<div class="case2" ><div class="shadow3" ><div class="content3 " ><div class="text2">
					<b> Lycée Blaise PASCAL </b><br>
					5 rue des Emmurées – BP 1105 – 76174 ROUEN cedex <br>
					Tél. : 02 32 81 58 00 – Fax : 02 32 81 58 17 <br>
					Mél. : ce.0760095r@ac-rouen.fr <br>
					Web : <a href="http://pascal-lyc.spip.ac-rouen.fr/spip.php?rubrique15"> http://pascal-lyc.spip.ac-rouen.fr/spip.php?rubrique15 </a>
				</div></div></div></div>
				
				<div class="case2" ><div class="shadow3" ><div class="content3 " ><div class="text2">
					<b> Lycée Paul ÉLUARD </b><br>
					15-17 avenue Jean Moulin – 93206 SAINT-DENIS cedex <br>
					Tél. : 01 49 71 70 00 – Fax : 01 49 40 03 09 <br>
					Mél. : ce.0930125f@ac-creteil.fr <br>
					Web : <a href="http://www.lyceepauleluard.fr"> http://www.lyceepauleluard.fr </a>
				</div></div></div></div>
				
				<div class="case2" ><div class="shadow3" ><div class="content3 " ><div class="text2">
					<b> Lycée Déodat DE SÉVERAC et Lycée Joseph GALLIENI </b><br>
					Recrutement commun : dossiers à adresser à Déodat et formation sur les deux sites <br>
					26 bd Déodat de Séverac – BP 97612 – 31076 TOULOUSE cedex 3 <br>
					Tél. : 05 62 13 17 00 (Déodat) ou 05 34 40 51 10 (Galliéni) <br>
					Mél. : scolarite.deodat@ac-toulouse.fr ou 0312759f@ac-toulouse.fr <br>
					Web : <a href="http://deodat.mon-ent-occitanie.fr/"> http://deodat.mon-ent-occitanie.fr/ </a> ou <a href="http://joseph-gallieni.mon-ent-occitanie.fr"> http://joseph-gallieni.mon-ent-occitanie.fr </a>
				</div></div></div></div>
				
				<div class="case2" ><div class="shadow3" ><div class="content3 " ><div class="text2">
					<b> Lycée ALGOUD-LAFFEMAS </b><br>
					37-39 Rue Barthélémy de Laffemas – BP26 – 26901 VALENCE Cedex 9 <br>
					Tél. : 04 75 82 61 30 – Fax : 04 75 56 86 63 <br>
					Mél. : ats.algoudlaffemas@gmail.com <br>
					Web : <a href="https://algoud-laffemas.ent.auvergnerhonealpes.fr/"> https://algoud-laffemas.ent.auvergnerhonealpes.fr/ </a>
				</div></div></div></div>
				
				<div class="case2" ><div class="shadow3" ><div class="content3 " ><div class="text2">
					<b> Lycée Jules FERRY </b><br>
					29 rue du Maréchal Joffre – 78000 VERSAILLES <br>
					Tél. : 01 39 20 11 60 – Fax : 01 39 20 11 61 <br>
					Mél. : 0782565p@ac-versailles.fr <br>
					Web : <a href="http://www.lyc-ferry-versailles.ac-versailles.fr"> http://www.lyc-ferry-versailles.ac-versailles.fr  </a>
				</div></div></div></div>
				
				<div class="case2" ><div class="shadow3" ><div class="content3 " ><div class="text2">
					<b> Lycée Diadème Te Tara O Mai'Ao <i>(ouverture rentré 2023)</i> </b><br>
					Rue Taaone - BP 5694 - 98716 PIRAE (Polynésie Française) <br>
					Tél. : 68940542600 <br>
					Mél. : ce.9840482B@ac-polynesie.pf <br>
					Web : <a href="https://lycee2pirae.com/">https://lycee2pirae.com/</a>
				</div></div></div></div>				
				
				<div class="case2" ><div class="shadow3" ><div class="content3 " ><div class="text2">
					<b> Lycée Jules-Garnier </b><br>
					65 av James Cook BP H3 98849 Nouméa cedex <br>
					Tél. : +687243555 <br>
					Mél. : ce.9830003l@ac-noumea.nc <br>
					Web : <a href="https://webgarnier.ac-noumea.nc/"> https://webgarnier.ac-noumea.nc/  </a>
				</div></div></div></div>
			</div>
		</div>
		
		

		<div id="Banniere"></div>
	</div></div>  <!-- conteneur et principal-->

</body>

</html>

