<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">

<head>
	<title>ATS Newton</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" >
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
	<meta content="R. Achet" name="author" >
	<link rel="icon" type="image/png" href="favicon.png">
	
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
</head>



<body>
	<div id="entete">
		<div class="titre1"><h1>Résultats de l'ATS Newton de 2020 à 2022</h1></div>
		
		<div id="MENU"></div>
	</div>
		
	<div id="conteneur"><div id="principal">

		<div class="titre2"><h2>Résumé des résultats des promotions 2020 à 2022</h2></div>	
		
		<div class="partie">
			<div class="text2">		
			<table class="talt"><tbody>
				<tr>
					<td>  </td>
					<td> <b>Promotion 2022</b> </td>
					<td> <b>Promotion 2021</b> </td>
					<td> <b>Promotion 2020</b></td>
				</tr>
				<tr>
					<td> <b> Concours ATS</b> </td>
					<td> 8 </td>
					<td> 17 </td>
					<td> 18</td>
				</tr>
				<tr>
					<td> <b> École sur dossier</b> </td>
					<td> 11 </td>
					<td> 8 </td>
					<td> 9 </td>
				</tr>							
					<tr>
					<td> Université </td>
					<td> 3 </td>
					<td> 1 </td>
					<td> 1 </td>
				</tr>
				<tr>
					<td> Autre </td>
					<td> 5 </td>
					<td> 2 </td>
					<td> 5 </td>
				</tr>
				<tr>
					<td> Effectif </td>
					<td> 27 </td>
					<td> 28 </td>
					<td> 33 </td>
				</tr>								
			</tbody></table>
			</div>
		</div>			


		<div id="rech_promo" class="titre2"><h2>École intégrée promotion 2020 à 2022</h2></div>	
		
		<div class="partie message_smatphone">
			Page optimisée pour les écran de plus de 800 pixels de large, veuillez utiliser votre smartphone en mode paysage.
		</div>
		
		<?php
			// Pour conserver l'affichage de la recherche et on récupère la recherche
			$nom = isset($_GET['recherche1']) ? $_GET['recherche1'] : '';
			$bac = isset($_GET['choix_bac']) ? $_GET['choix_bac'] : '';			
			$bac_plus_2 = isset($_GET['choix_bac+2']) ? $_GET['choix_bac+2'] : '';
			$statut = isset($_GET['choix_statut']) ? $_GET['choix_statut'] : '';
			$promo = isset($_GET['choix_Promo']) ? $_GET['choix_Promo'] : '';
		?>


		<div class="recherche">
			<div style="text-align: center"><h3>Critères de recherches:</h3></div>
			
			<?php // Le formulaire GET car recherche, action="#rech_promo" pour remettre la vue sur le titre ?>
			
			<form method="GET" action="#rech_promo" id="recherche_ecole" autocomplete="on">
					<div class="form"><label for="nom" class="label_promo">École:</label>
						<input id=nom type="text" name="recherche1" placeholder="un seul mot" value="<?=$nom?>" maxlength="254" width="177px">
					</div>
					<div class="form" ><label for="bac" class="label_promo">Bac:</label>
						<select id="bac" name="choix_bac" form="recherche_ecole" style="width : 177px; height: 25px;" >
							<option <?php if ($bac == 'Général') {echo  "selected=\"selected\"";}  ?> value="Général" >Général</option>
							<option <?php if ($bac == 'Techno') {echo  "selected=\"selected\"";}  ?> value="Techno" >Techno</option>
							<option <?php if ($bac == 'Pro') {echo   "selected=\"selected\"" ;}  ?> value="Pro" >Pro</option>
							<option <?php if ($bac == '') {echo   "selected=\"selected\"" ;}  ?> value="" >Tous</option>
						</select>
					</div>
					<div class="form" ><label for="bac+2" class="label_promo">Bac+2:</label>
						<select id="bac+2" name="choix_bac+2" form="recherche_ecole" style="width : 177px; height: 25px;" >
							<option <?php if ($bac_plus_2 == 'DUT' ) {echo  "selected=\"selected\"";}  ?> value="DUT" >DUT</option>
							<option <?php if ($bac_plus_2 == 'BTS') {echo  "selected=\"selected\"";}  ?> value="BTS" >BTS</option>
							<option <?php if ($bac_plus_2 == '' ) {echo   "selected=\"selected\"" ;}  ?> value="" >Tous</option>
						</select>
					</div>
					<div class="form" ><label for="statut" class="label_promo">Statut:</label>
						<select id="statut" name="choix_statut" form="recherche_ecole" style="width : 177px; height: 25px;" >
							<option <?php if ($statut == 'Étudiant/Apprenti' or $statut == '') {echo  "selected=\"selected\"";}  ?> value="Étudiant/Apprenti" >Étudiant ou Apprenti</option>
							<option <?php if ($statut == 'Étudiant') {echo  "selected=\"selected\"";}  ?> value="Étudiant" >Étudiant</option>
							<option <?php if ($statut == 'Apprenti') {echo   "selected=\"selected\"" ;}  ?> value="Apprenti" >Apprenti</option>
							<option <?php if ($statut == 'tous') {echo   "selected=\"selected\"" ;}  ?> value="tous" >Tous</option>
						</select>
					</div>
					<div class="form" ><label for="Promo" class="label_promo">Promotion:</label>
						<select id="Promo" name="choix_Promo" form="recherche_ecole" style="width : 177px; height: 25px;" >
							<option <?php if ($promo == '2020') {echo  "selected=\"selected\"";}  ?> value="2020" >2020</option>
							<option <?php if ($promo == '2021') {echo  "selected=\"selected\"";}  ?> value="2021" >2021</option>
							<option <?php if ($promo == '2022') {echo   "selected=\"selected\"" ;}  ?> value="2022" >2022</option>
							<option <?php if ($promo == '') {echo   "selected=\"selected\"" ;}  ?> value="" >Toutes</option>
						</select>
					</div>
				<?php //Le bouton de recherche ?>				
				<div class="rechercher" ><input type="SUBMIT" value="Rechercher"></div>
			</form>
			
		</div>


		<?php
			//Ficher de configuration connexion SQL
			$conf = require 'config_sql.php';
			$config = $conf['database'];

			// connexion à mysql et gestion de la non connexion pour cacher les info de config
			try
			{
				//Connexion mysql en PDO pour éviter injection SQL avec "prepared statements and parameterized queries"
				$conn = new PDO(
					$config['dbname'].';'.$config['host'].';charset=utf8',
					$config['id'],
					$config['pwd']
				);
				
				$conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}
			
			//Cas d'erreur
			catch (Exception $e)
			{
				die('Erreur SQL, contacter l\'administateur: ' . $e ->getMessage());
			}

			//On récupère les data est on forme le "bon tableau" via de if et elsif selon le statuts
			if ( $statut == 'Apprenti' or $statut == 'Étudiant' )
			{
				// on prépare la querry pour éviter l'injection sql dans les cas "étudiant" ou "apprenti"
				$q = $conn -> prepare("SELECT * FROM resultats 
				WHERE (`Promo` LIKE :promo )
				AND (`BAC` LIKE :bac)
				AND (`BTS/DUT` LIKE :bac_plus_2)
				AND (`Ecole` LIKE :nom)
				AND (`Statut` LIKE :statut)
				ORDER BY `Ecole`");

				// valeur du  paramètre :statut
				$statut_param = $statut;
				$statut_param = "%$statut_param%";				
				$q -> bindParam( ':statut' , $statut_param, PDO::PARAM_STR);
				
				// valeur du  paramètre :nom
				$nom_param = trim($nom);
				$nom_param = "%$nom_param%";
				$q -> bindParam( ':nom' , $nom_param, PDO::PARAM_STR);
				
			}
			elseif ( $statut == 'Étudiant/Apprenti' or  $statut == '')
			{
				// on prépare la querry pour éviter l'injection sql dans le cas "Étudiant/Apprenti"
				$q = $conn-> prepare("SELECT * FROM resultats 
				WHERE (`Promo` LIKE :promo )
				AND (`BAC` LIKE :bac)
				AND (`BTS/DUT` LIKE :bac_plus_2)
				AND (`Ecole` LIKE :nom)
				AND (`Statut` IS NOT NULL)
				ORDER BY `Ecole`");

				// valeur du  paramètre :nom
				$nom_param = trim($nom);
				$nom_param = "%$nom_param%";
				$q -> bindParam( ':nom' , $nom_param, PDO::PARAM_STR);				
			}
			elseif ( $nom == '')
			{
				// on prépare la querry pour éviter l'injection sql dans le cas "sans restriction"
				$q = $conn-> prepare("SELECT * FROM resultats 
				WHERE (`Promo` LIKE :promo )
				AND (`BAC` LIKE :bac)
				AND (`BTS/DUT` LIKE :bac_plus_2)
				ORDER BY  COALESCE(`Ecole`, 'Z')");
			}
			else 
			{
				// on prépare la querry pour éviter l'injection sql dans le cas "sans restriction"
				$q = $conn-> prepare("SELECT * FROM resultats 
				WHERE (`Promo` LIKE :promo )
				AND (`BAC` LIKE :bac)
				AND (`BTS/DUT` LIKE :bac_plus_2)
				AND (`Ecole` LIKE :nom)
				ORDER BY `Ecole`");
	
				// valeur du  paramètre :nom	
				$nom_param = trim($nom);
				$nom_param = "%$nom_param%";
				$q -> bindParam( ':nom' , $nom_param, PDO::PARAM_STR);
			}
			
				
			// Code horrible pour donner les bonnes valeurs aux paramètres 
			// trim supprime les espaces (et d'autres caractères) du début/fin des strings
			

			$bac_param = $bac;
			$bac_param = "%$bac_param%";			
			$q -> bindParam( ':bac' , $bac_param, PDO::PARAM_STR);
			
			$bac_plus_2_param = $bac_plus_2;
			$bac_plus_2_param = "%$bac_plus_2_param%";				
			$q -> bindParam( ':bac_plus_2' , $bac_plus_2_param, PDO::PARAM_STR);
			
			$promo_param = $promo;
			$promo_param = "%$promo_param%";
			$q -> bindParam( ':promo' , $promo_param, PDO::PARAM_STR);			
			
			// On exécute enfin la querry...
			$q -> execute();
		?>
			
		<div class="partie">
			<div class="form">
			Résultats trouvées :
			<b>
			<?php //Afficher le nombre de résultats
				$count = $q -> rowCount();
				printf(" %d\n", $count );
			?>
			</b></div>

			<?php //Afficher la première ligne du tableau ?>
			<table class="talt_cache"><tbody> 
				<tr>
					<td> <div class="text2"><b>Promotion</b></div> </td>
					<td> <div class="text2"><b>Bac</b></div></td>
					<td> <div class="text2"><b>Bac+2</b></div></td>
					<td> <div class="text2"><b>École</b></div></td>
					<td > <div class="text2"><b>Concours/<wbr>Dossier</b></div></td>
					<td > <div class="text2"><b>Statut</b></div></td>
				</tr>
			
				<?php
					//on récupère enfin la bonne partie de la DB
					while( $r = $q->fetch(PDO::FETCH_BOTH)){


				//Une ligne du tableau ?>
				<tr>
					<td><div class="text2"><?php echo $r['Promo']; ?></div></td>
					<td><div class="text2">
						<?php  if ($r['Bac']=="") {
							echo "&#63;";
						} else{
							echo  $r['Bac'];
						} ?>
					</div></td>
					<td><div class="text2">
						<?php  if ($r['BTS/DUT']=="") {
							echo "&#63;";
						} else{
							echo  $r['BTS/DUT'];
						} ?>
					</div></td>
					<td><div class="text2">
						<?php  if ($r['Ecole']=="") {
							echo "&#63;";
						} else{
							echo  $r['Ecole'];
						} ?>
					</div></td>
					<td><div class="text2">
						<?php  if ($r['Concours/Dossier']=="") {
							echo "&#63;";
						} else{
							echo  $r['Concours/Dossier'];
						} ?>
					</div></td>
					<td><div class="text2">
						<?php  if ($r['Statut']=="") {
							echo "&#63;";
						} else{
							echo  $r['Statut'];
						} ?>
					</div></td> 
				</tr>

			<?php
				}
			?>
			</tbody></table>

		</div>
		
		<div id="Banniere"></div>
		
	</div></div> <!-- conteneur -->


</body>

</html>

