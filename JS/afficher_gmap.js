// Pour que la carte s'affiche remplacer XXXXXXXXXXXXXXXXXXXXXXXXXXXXX par une clé "GOOGLE Maps JavaScript API"
// CONFIG DE LA CLEF:
// Application restrictions: Websites
// Website restrictions: localhost/*
// API restrictions: 1 API
// Selected APIs: Maps JavaScript API
if (localStorage.getItem('cookieSeen') != 'valider') {
	$('.message_gmap').show();
} else {
	$('.message_gmap2').show();
	let gmap_script = document.createElement("script");
	gmap_script.setAttribute("src", "https://maps.googleapis.com/maps/api/js?key=XXXXXXXXXXXXXXXXXXXXXXXXXXXXX&callback=initMap&v=weekly");
	document.body.appendChild(gmap_script);
}
