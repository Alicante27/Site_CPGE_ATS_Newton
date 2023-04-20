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
		<div class="titre1"><h1>Écoles d'ingénieurs après l'ATS ingénierie industrielle</h1></div>
		
			<div id="MENU"></div>
	</div>


	<div id="conteneur"><div id="principal">
	
		<div class="titre2"><h2> Intégrer une école d'ingénieur </h2></div>		
		<div class="partie">
			<div class="text2"><p>
				Les écoles d'ingénieurs sélectionnent leurs futurs étudiants via des concours (épreuves écrites et/ou orales) ou des dossiers.
				Le concours national ATS est la façon la plus courante d'intégrer une école, mais il y a beaucoup de moyens possibles:
			</p></div>
			<ul>
				<li> Le <a href="https://concours.ensea.fr/portail/ats.html">concours national ATS</a> (environ 500 places dans une cinquantaine d'écoles d'ingénieurs <i>statut étudiant ou apprenti</i>). </li>
				<li> Le <a href="http://concours.ensea.fr/portail/dut-bts.html">concours BTS/DUT</a> (<b>uniquement</b> pour une école, ou une filière d'école, <b>non proposée</b> au concours ATS). </li>
				<li> Le <a href="https://www.centralesupelec.fr/fr/le-cursus-ingenieur?tab=programme-grande-ecole-voies-dadmission">concours CentraleSupélec</a> (20 places <i>statut apprenti</i>). </li>
				<li> La <a href="http://admissions.polytech-reseau.org/frontblocks/Candidats/"> candidature commune Polytech</a> (9 écoles, <b>pour certaines spécialités non proposés</b> au concours ATS <i>statut étudiant</i>). </li>
				<li> La <a href="https://www.groupe-insa.fr/preparer/comment-candidater">candidature commune INSA</a> (candidature commune à 10 écoles du groupe INSA et partenaires <i>statut étudiant</i>). </li>
				<li> La <a href="https://www.groupe-ut.fr/">candidature commune UT</a> (candidature commune aux 3 écoles du groupe UT <i>statut étudiant ou apprenti</i>). </li>
				<li> La <a href="https://www.ingenieur-eni.fr/">candidature commune ENI</a> (candidature commune à 3 des 4 écoles du groupe ENI <i>statut étudiant ou apprenti</i>). </li>
				<li> La <a href="https://alternance.imt.fr/">candidature commune IMT</a> (candidature commune à 13 écoles de l'Institut Mines-Télécom et partenaires <i>statut apprenti</i>). </li>
				<li> La <a href="https://www.concoursavenir.fr/avenir-plus">procédure avenir +</a> (candidature commune à 7 écoles <i>statut étudiant ou apprenti</i>). </li>
				<li> La majorités des écoles d'ingénieurs recrutent sur <b>dossier</b> (se renseigner sur le site de chaque école).</li>
			</ul>
			<div class="text2"><p>
				Beaucoup d'écoles d'ingénieures recrutent des étudiant d'ATS de plusieurs façon (par exemple via le concours ATS et sur dossier).
				Renseignez vous bien pour maximiser vos chance d'intégrer l'école de vos rêve.
			</p></div>
		</div>
		
		
		<div class="titre2"><h2> Formation initiale sous statut d'étudiant/apprenti et formation continue </h2></div>		
		<div class="partie">
			<div class="text2">
				<p>Lors de vos recherches sur les écoles d'ingénieurs vous allez croiser ces expressions qui décrivent trois statuts distincts pour des formations d'ingénieurs.</p>
				
				<p>La <i>formation initiale</i> désigne une formation dans le parcours scolaire classique de l'étudiant qui lui permet d’acquérir un diplôme
				avant d'entrer sur le marché du travail.
				La <i>formation continue</i> désigne une reprise d'études pour quelqu'un qui est déjà sur le marché du travail.
				Les étudiants d'ATS ne sont donc pas concernés par la formation continue.</p>
				
				<p>La <i>formation initiale</i> peut s’effectuer sous statut <i>étudiant</i> ou <i>apprenti</i>.
				La <i>formation initiale sous statut d'apprenti</i>, souvent désigné <i>apprentissage</i>,  <i>alternance</i> ou <i>FISA</i> est une formation où l'étudiant passe son temps
				entre l'école d'ingénieur et une entreprise. La majorité des écoles d'ingénieurs de France proposent aujourd'hui ce type de formation.
				L'étudiant  apprenti a <a href="https://www.alternance.emploi.gouv.fr/simulateur-alternant/etape-1">un salaire qui augmente avec les années</a>,
				et il n'a pas à payer de frais de scolarité (qui peuvent être très élevés dans les écoles privées).
				De plus, l’apprenti est souvent embauché par l'entreprise qui l’accueille dès l'obtention du diplôme.</p>
			</div>
			
			<div style="text-align: center" ><button id="toggle-button">En savoir plus sur l'alternance</button></div>

			<div class="target">
					<div class="text2"><p>
						L'inscription dans une formation en alternance n'est valable que lorsqu'un <b>contrat est signé</b> avec une entreprise, la date limite pour signer ce contrat dépend de l'école.
						Selon les écoles un certain nombre ou toutes les formations proposées peuvent êtres choisies sous statut apprenti; de plus le diplôme d'ingénieur délivré à la fin de
						la formation peut être différent pour les étudiants ou pour les apprentis. La sélection pour les formations par apprentissage est, en générale, plus facile que pour les formations
						sous statut étudiant. Légalement, l'étudiant apprenti doit avoir <b>moins de 30 ans</b>.
					</p></div>
		
					<div class="titre4"> Partenariat école-entreprise: </div>	
					<div class="text2"><p>			
						Le partenariat école/entreprise/élève passe souvent par un institut spécialisé. Ces instituts <i>ne délivrent pas de diplôme</i>, ils se chargent des
						relations écoles/entreprise et parfois de la sélection des candidats.<br>
						Liste (non exhaustive) d'instituts partenaires:
					</p></div>	
					
					<ul>
						<li> <a href="https://www.ingenieurs2000.com/">Ingénieurs 2000 </a>. </li>
						<li> <a href="https://www.mecavenir.com/">Mecavenir</a>.</li>
						<li> Les <a href="https://fr.wikipedia.org/wiki/Institut_des_techniques_d%27ing%C3%A9nieur_de_l%27industrie"> instituts des techniques d'ingénieur de l'industrie (ITII)</a> (23 instituts régionaux).</li>
						<li> L'<a href="https://www.isupfere.minesparis.psl.eu/Presentation/Objectifs-FC-FA/">ISUPFERE</a> (mines de Paris en apprentissage).</li>
						<li> L'<a href="https://www.ifria.fr/">Institut de Formation Régional des Industries Alimentaires</a>(pour des formations d'agroalimentaire).</li>
						<li> <a href="https://www.francechimie.fr/">France chimie</a> (pour des formations de chimie).</li>
						<li> IST, ITC BTP-OI, IESFF, Sup BTP, IPHC, CIRFAP, ISPA, AFIA, ISIP, IF3E, ARSFI, ATEE, AFITPPACA, etc ... </li>			
					</ul>
			</div>
				
			<?php // Script pour afficher/montrer merci stack overflow ?>
			<script type="text/javascript">
				document.getElementById('toggle-button').addEventListener('click', function () {
					toggle(document.querySelectorAll('.target'));
				});
			</script>
			
		</div>
		
		<div id="BDA3TSi2" class="titre2"><h2> Base d'aide à l'admission des ATS Ingénierie Industrielle </h2></div>		
		<div class="partie">
			<div class="text2" style="text-align: center" >
				Dernière mise à jour en <b>décembre 2022</b>.
			</div>
			<div class="text2">
				<ul>
					<li> Cette base de données a pour objectif de présenter rapidement les différentes voies d'admission à une école et les différentes écoles accessibles avec
					chaque voie d'admission. </li>
					<li> Base de donnée mise à jour à la main bénévolement à partir d'informations glanées sur internet. </li>
					<li><a href="contact_erreur.php">Merci d'utiliser le formulaire de contact pour signaler les erreurs</a>.</li>
				</ul>
			</div>
		</div>
		
		<?php
			// Pour conserver l'affichage de la recherche et on récupère la recherche
			$nom = isset($_GET['recherche1']) ? $_GET['recherche1'] : '';
			$ville = isset($_GET['recherche2']) ? $_GET['recherche2'] : '';			
			$Mots_clef = isset($_GET['recherche3']) ? $_GET['recherche3'] : '';
			$statut = isset($_GET['choix_statut']) ? $_GET['choix_statut'] : '';
		?>


		<div class="recherche">
			<div style="text-align: center"><h3>Recherche d'école</h3></div>
			
			<?php // Le formulaire GET car recherche, action="#BDA3TSi2" pour remettre la vue sur le titre ?>
			<form method="GET" action="#BDA3TSi2" id="recherche_ecole" autocomplete="on"> 
				<div class="form"><label for="nom" class="label_bda3TSi2">Nom:</label> <input id=nom type="text" name="recherche1" placeholder="un seul mot" value="<?=$nom?>" maxlength="254" width="177px"> </div>
				<div class="form"><label for="ville" class="label_bda3TSi2">Ville:</label> <input id=ville type="text" name="recherche2" placeholder="un seul mot" value="<?=$ville?>" maxlength="254" width="177px"> </div>
				<div class="form"><label for="mot_clef" class="label_bda3TSi2">Mot-clef:</label> <input id=mot_clef type="text" name="recherche3" placeholder="un seul mot" value="<?=$Mots_clef?>" maxlength="254" width="177px"> </div>
				<div class="form" ><label for="statut" class="label_bda3TSi2">Statut:</label>
					<select id="statut" name="choix_statut" form="recherche_ecole" style="width : 177px; height: 24px;" >
						<option <?php if ($statut == 'Étudiant/Apprenti' or $statut == '') {echo  "selected=\"selected\"";}  ?> value="Étudiant/Apprenti" >Étudiant ou Apprenti</option>
						<option <?php if ($statut == 'Étudiant') {echo  "selected=\"selected\"";}  ?> value="Étudiant" >Étudiant</option>
						<option <?php if ($statut == 'Apprenti') {echo   "selected=\"selected\"" ;}  ?> value="Apprenti" >Apprenti</option>
						<option <?php if ($statut == 'toutes') {echo   "selected=\"selected\"" ;}  ?> value="toutes" >Tous</option>
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
					$config['dbname'].';'.$config['host'].';charset=utf8mb4',
					$config['id'],
					$config['pwd']
				);
				
				$conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}
			
			//Cas d'erreur
			catch (Exception $e)
			{
				die('Erreur SQL, contacter l\'administateur:' . $e ->getMessage());
			}

			//On récupère les data est on forme le "bon tableau" via de if et elsif selon le statuts
			if ( $statut == 'Apprenti' or $statut == 'Étudiant' )
			{
				// on prépare la querry pour éviter l'injection sql dans les cas "étudiant" ou "apprenti"
				$q = $conn -> prepare("SELECT * FROM ecole
				WHERE (`Nom` LIKE :nom)
				AND (`Ville` LIKE :ville)
				AND (`Mots clef` LIKE :m_clef)
				AND (`Statut 1` LIKE :stat1
				OR `Statut 2` LIKE :stat2
				OR `Statut 3` LIKE :stat3)
				ORDER BY `Nom`");

				// Code horrible pour donner les bonnes valeurs aux paramètres de statuts
				$statut_param = $statut;
				$statut_param = "%$statut_param%";				
				$q -> bindParam( ':stat1' , $statut_param, PDO::PARAM_STR);
				$q -> bindParam( ':stat2' , $statut_param, PDO::PARAM_STR);
				$q -> bindParam( ':stat3' , $statut_param, PDO::PARAM_STR);
				
			}
			elseif ( $statut == 'Étudiant/Apprenti' or  $statut == '')
			{
				// on prépare la querry pour éviter l'injection sql dans le cas "Étudiant/Apprenti"
				$q = $conn-> prepare("SELECT * FROM ecole
				WHERE ((`Nom` LIKE :nom)
				AND (`Ville` LIKE :ville)
				AND (`Mots clef` LIKE :m_clef)
				AND (`Acce 1` != ''))
				ORDER BY `Nom`"); 	
			}
			else {
				// on prépare la querry pour éviter l'injection sql dans le cas "sans restriction"
				$q = $conn-> prepare("SELECT * FROM ecole
				WHERE ((`Nom` LIKE :nom)
				AND (`Ville` LIKE :ville)
				AND (`Mots clef` LIKE :m_clef))
				ORDER BY `Nom`");
			}
			
				
			// Code horrible pour donner les bonnes valeurs aux paramètres nom, ville et mots clef
			// trim supprime les espaces (et d'autres caractères) du début/fin des strings
			$nom_param = trim($nom);
			$nom_param = "%$nom_param%";
			$q -> bindParam( ':nom' , $nom_param, PDO::PARAM_STR);
			$ville_param = trim($ville);
			$ville_param = "%$ville_param%";			
			$q -> bindParam( ':ville' , $ville_param, PDO::PARAM_STR);
			$Mots_clef_param = trim($Mots_clef);
			$Mots_clef_param = "%$Mots_clef_param%";				
			$q -> bindParam( ':m_clef' , $Mots_clef_param, PDO::PARAM_STR);
			
			// On exécute enfin la querry...
			$q -> execute();
		?>
			
		<div class="partie">
			<div class="form">
			Écoles trouvées :
			<b>
			<?php //Afficher le nombre de résultats
				$count = $q -> rowCount();
				printf(" %d\n", $count );
			?>
			</b></div>

			<?php //Afficher la première ligne du tableau ?>
			<table class="talt"><tbody> 
				<tr>
					<td> <div class="text2">
							<b>Nom</b>
							<div style="color:grey">Ville</div>
					</div></td>
					<td> <div class="text2"><b>Prix annuel</b></div></td>
					<td> <div class="text2"><b>Site web</b></div></td>
					<td> <div class="text2"><b>Voie d’admission (Statut)</b></div></td>
				</tr>
			
				<?php
					//on récupère enfin la bonne partie de la base de donnée
					while( $r = $q->fetch(PDO::FETCH_BOTH)){


				//Une ligne du tableau ?>
				<tr>
					<td><div class="text2"><?php echo $r['Nom']; ?>
						<div class="cut-ville"><?php echo $r['Ville']; ?></div> 
						</div>
					</td>
					<td> <div class="text2"><?php echo $r['prix']; ?></div></td>
					<td>
						<div class="cut-url"><a href="<?php echo $r['Site Web']; ?>"><?php echo $r['Site Web']; ?></a></div>
						<div class="cut-icon"><a href="<?php echo $r['Site Web']; ?>"><img src="images/web.png" alt="Site web" width="40" height="40" ></a></div>
					</td>
					<td><div class="text2"><div style="min-width:72px">
						<?php // 1er acce possible
							if ($r['Acce 1']==NULL)
							// &#8226 est un point noir afin de faire style liste
							{ echo "&#8226; Ne recrute pas d'ATS ii";}
							else {//ajout d'un word break
								$statut1 = !($r['Statut 1'] == 'Étudiant/Apprenti') ? $r['Statut 1'] : 'Étudiant/<wbr>Apprenti';
								echo "&#8226; ", $r['Acce 1'],"  (", $statut1 , ")<br>";
							}
							
							// 2nd acce possible
							if ($r['Acce 2']==NULL)
								{ }
							else {//ajout d'un word break
								$statut2 = !($r['Statut 2'] == 'Étudiant/Apprenti') ? $r['Statut 2'] : 'Étudiant/<wbr>Apprenti';
								echo "&#8226; ", $r['Acce 2'],"  (", $statut2 , ")<br>";
							}
							
							// 3eme acce possible
							if ($r['Acce 3']==NULL)
							{ }
							else {//ajout d'un word break
								$statut3 = !($r['Statut 3'] == 'Étudiant/Apprenti') ? $r['Statut 3'] : 'Étudiant/<wbr>Apprenti';
								echo "&#8226; ", $r['Acce 3'],"  (", $statut3 , ")<br>";
							} ?>
					</div></div></td>  
				</tr>

			<?php
				}
			?>
			</tbody></table>
		</div>
		

		<div id="Pied"></div>
		<div id="Banniere"></div>	

	</div></div>  <!--  conteneur et principal  -->

</body>

</html>