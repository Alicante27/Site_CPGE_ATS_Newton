
	<div id="touchSideSwipe" class="touch-side-swipe">
			<div  class="nav_center">
				<div class="topnav_grp">
				<div class="topnav" style="padding-top: 5px;">
					<a href="ATS_ii_Newton.php" style="min-height: 22px;"><b>ATS - Lycée Newton</b></a>
				</div>
				<div class="topnav" style="padding: 1px;">
					<a href="resultat_Newton.php" class="topnav_sous_section">Résultats</a>
					<a href="contact_Newton.php" class="topnav_sous_section">Contacter l'équipe pédagogique</a>
				</div>
				</div>

				<div class="topnav_grp">
				<div class="topnav" style="padding-top: 5px;">	
					<a href="ATS_ii_presentation.php" style="min-height: 22px;"><b>Présentation de l'ATS ii</b></a>
				</div>
				<div class="topnav" style="padding: 1px;">			
					<a href="ATS_ii_liste_cpge.php" class="topnav_sous_section">Liste des ATS ii</a>
					<a href="ATS_ii_candidater.php" class="topnav_sous_section">Candidater en ATS ii</a>
					<a href="ATS_ii_ecole_inge.php" class="topnav_sous_section">Écoles d'ingénieurs</a>
				</div>
				</div>
			</div>
    </div>
	
	
	<script src="JS/touch-sideswipe.js"></script>
    <script type="text/javascript">
        var config = {
            elementID: 'touchSideSwipe',
            elementWidth: 400, //px
            elementMaxWidth: 0.8, // *100%
            sideHookWidth: 44, //px
            moveSpeed: 0.2, //sec
            opacityBackground: 0.8,
            shiftForStart: 50, // px
            windowMaxWidth: 1024, // px
        }
        var touchSideSwipe = new TouchSideSwipe(config);
    </script>
    <script>
        document.getElementById('callOpen').addEventListener('click', function(){touchSideSwipe.tssOpen()});
        document.getElementById('callClose').addEventListener('click', function(){touchSideSwipe.tssClose()});
    </script>
	
	
	<script type="text/javascript">
	//Script pour mettre en évidence le lien courant dans le menu
		var url = document.URL;
		var name = url.substring(url.lastIndexOf('/')+1);
		if (name=='') {
			var filename = "[href='ATS_ii_Newton.php\']";
		} else {
			if (name.indexOf('?')==-1) {
			} else {
				var name = name.substring(0,name.indexOf('?'));
			}
			if (name.indexOf('#')==-1) {
			} else {
				var name = name.substring(0,name.indexOf('#'));
			}
			var filename = "[href='"+ name + ".php\']";
		}
		document.querySelector(filename).className += ' active';
	</script>
	
