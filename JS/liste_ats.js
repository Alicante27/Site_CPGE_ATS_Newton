// Initialize and add the map
function initMap() {
  // The location of the center of the map (Bourges centre de la France continentale)
  const  centr  = { lat: 47.1, lng: 2.4 };
  // The map, centered at centr
  const map = new google.maps.Map(document.getElementById("map"), {
  // Zoom pour pouvoir voir métropole (donc ni réunion, ni nouvelle Calédonie, ni Polynésie)
    zoom: 5.2,
    center: centr,
  });
  
  
  // marker 1, Lycée st eloi à aix
  const marker1 = new google.maps.Marker({
    position: { lat: 43.53404746770645, lng: 5.450581115227639 },
    map: map,
  });
    const descr1 =
    '<div id="content">' +
    '<div id="siteNotice">' +
    "</div>" +
    '<h1 id="firstHeading" class="firstHeading">Lycée Saint ELOI</h1>' +
    '<div id="bodyContent">' +
    "<p>9 avenue Jules ISAAC – 13626 AIX-EN-PROVENCE Cedex <br> Mél : s.mahut@lycee-saint-eloi.com</p>" +
    "</div>" +
    "</div>";
  const infowindow1 = new google.maps.InfoWindow({
    content: descr1,
  });
  marker1.addListener("click", () => {
    infowindow1.open({
      anchor: marker1,
      map,
      shouldFocus: false,
    });
  });
  
  
  // marker 2, Lycée Rascol à albi
  const marker2 = new google.maps.Marker({
    position: { lat: 43.9352737794489, lng: 2.153454485080642 },
    map: map,
  });
    const descr2 =
    '<div id="content">' +
    '<div id="siteNotice">' +
    "</div>" +
    '<h1 id="firstHeading" class="firstHeading">Lycée Louis RASCOL</h1>' +
    '<div id="bodyContent">' +
    "<p>10 rue de la République – 81012 ALBI cedex 9 <br> Mél. : 0810004p@ac-toulouse.fr </p>" +
    "</div>" +
    "</div>";
  const infowindow2 = new google.maps.InfoWindow({
    content: descr2,
  });
  marker2.addListener("click", () => {
    infowindow2.open({
      anchor: marker2,
      map,
      shouldFocus: false,
    });
  });
  
  
   // marker 3, Lycée Jean JAURÈS à Argenteuil
  const marker3 = new google.maps.Marker({
    position: { lat: 48.940322326796476, lng: 2.2255193892812333 },
    map: map,
  });
    const descr3 =
    '<div id="content">' +
    '<div id="siteNotice">' +
    "</div>" +
    '<h1 id="firstHeading" class="firstHeading">Lycée Jean JAURÈS</h1>' +
    '<div id="bodyContent">' +
    "<p>25 rue Charles Lecocq – 95104 ARGENTEUIL <br> Mél. : 0950641f@ac-versailles.fr </p>" +
    "</div>" +
    "</div>";
  const infowindow3 = new google.maps.InfoWindow({
    content: descr3,
  });
  marker3.addListener("click", () => {
    infowindow3.open({
      anchor: marker3,
      map,
      shouldFocus: false,
    });
  }); 
 
 
  // marker 4, Lycée Philippe DE GIRARD à Avignon
  const marker4 = new google.maps.Marker({
    position: { lat: 43.92510929043018, lng: 4.80915259987474 },
    map: map,
  });
    const descr4 =
    '<div id="content">' +
    '<div id="siteNotice">' +
    "</div>" +
    '<h1 id="firstHeading" class="firstHeading">Lycée Philippe DE GIRARD</h1>' +
    '<div id="bodyContent">' +
    "<p> 138 Avenue de Tarascon - 84082 AVIGNON cedex 2 <br> Mél : ce.0840005z@ac-aix-marseille.fr </p>" +
    "</div>" +
    "</div>";
  const infowindow4 = new google.maps.InfoWindow({
    content: descr4,
  });
  marker4.addListener("click", () => {
    infowindow4.open({
      anchor: marker4,
      map,
      shouldFocus: false,
    });
  });
 
 
  // marker 5, Lycée Jean MOULIN à Bézier
  const marker5 = new google.maps.Marker({
    position: { lat: 43.34162446068109, lng: 3.232937148672547 },
    map: map,
  });
    const descr5 =
    '<div id="content">' +
    '<div id="siteNotice">' +
    "</div>" +
    '<h1 id="firstHeading" class="firstHeading">Lycée Philippe DE GIRARD</h1>' +
    '<div id="bodyContent">' +
    "<p> Avenue des Martyrs de la Résistance – BP 745 – 34521 BÉZIERS <br> Mél. : ce.0340011c@ac-montpellier.fr </p>" +
    "</div>" +
    "</div>";
  const infowindow5 = new google.maps.InfoWindow({
    content: descr5,
  });
  marker5.addListener("click", () => {
    infowindow5.open({
      anchor: marker5,
      map,
      shouldFocus: false,
    });
  });
 
 
  // marker 6, Lycée Gustave EIFFEL à Bordeaux
  const marker6 = new google.maps.Marker({
    position: { lat: 44.828732329517585, lng: -0.5645348327864881 },
    map: map,
  });
    const descr6 =
    '<div id="content">' +
    '<div id="siteNotice">' +
    "</div>" +
    '<h1 id="firstHeading" class="firstHeading">Lycée Gustave EIFFEL</h1>' +
    '<div id="bodyContent">' +
    "<p> 143 cours de la Marne – CS 31237 – 33074 BORDEAUX cedex <br> Mél. : ce.0330028b@ac-bordeaux.fr </p>" +
    "</div>" +
    "</div>";
  const infowindow6 = new google.maps.InfoWindow({
    content: descr6,
  });
  marker6.addListener("click", () => {
    infowindow6.open({
      anchor: marker6,
      map,
      shouldFocus: false,
    });
  }); 
  
  
  // marker 7, Lycée Dumont d’URVILLE / Institut LEMONNIER à Caen
  const marker7 = new google.maps.Marker({
    position: { lat: 49.19820620417148, lng: -0.3562297134496235 },
    map: map,
  });
    const descr7 =
    '<div id="content">' +
    '<div id="siteNotice">' +
    "</div>" +
    '<h1 id="firstHeading" class="firstHeading">Lycée Dumont d’URVILLE / Institut LEMONNIER</h1>' +
    '<div id="bodyContent">' +
    "<p> 73 rue de Lébisey / 60 rue d'Hérouville <br> BP 45140 14070 CAEN Cedex 5 / CS 80269 14013 CAEN Cedex <br> Mél. : ce.0142131r@ac-caen.fr </p>" +
    "</div>" +
    "</div>";
  const infowindow7 = new google.maps.InfoWindow({
    content: descr7,
  });
  marker7.addListener("click", () => {
    infowindow7.open({
      anchor: marker7,
      map,
      shouldFocus: false,
    });
  });
  
  
  // marker 8, Lycée Jules FERRY à Canne
  const marker8 = new google.maps.Marker({
    position: { lat: 43.55970452537238, lng: 7.022032422491292 },
    map: map,
  });
    const descr8 =
    '<div id="content">' +
    '<div id="siteNotice">' +
    "</div>" +
    '<h1 id="firstHeading" class="firstHeading">Lycée Jules FERRY</h1>' +
    '<div id="bodyContent">' +
    "<p> 82, boulevard de la République – CS 30042 – 06414 CANNES cedex <br> Mél. : ce.0060014h@ac-nice.fr </p>" +
    "</div>" +
    "</div>";
  const infowindow8 = new google.maps.InfoWindow({
    content: descr8,
  });
  marker8.addListener("click", () => {
    infowindow8.open({
      anchor: marker8,
      map,
      shouldFocus: false,
    });
  }); 
  
  
  // marker 9, Lycée LA FAYETTE à CHAMPAGNE-SUR-SEINE
  const marker9 = new google.maps.Marker({
    position: { lat: 48.40391881262109, lng: 2.79675292756784 },
    map: map,
  });
    const descr9 =
    '<div id="content">' +
    '<div id="siteNotice">' +
    "</div>" +
    '<h1 id="firstHeading" class="firstHeading">Lycée LA FAYETTE</h1>' +
    '<div id="bodyContent">' +
    "<p> BP 07 – 77430 CHAMPAGNE-SUR-SEINE <br> Mél. : ce.0770920g@ac-creteil.fr </p>" +
    "</div>" +
    "</div>";
  const infowindow9 = new google.maps.InfoWindow({
    content: descr9,
  });
  marker9.addListener("click", () => {
    infowindow9.open({
      anchor: marker9,
      map,
      shouldFocus: false,
    });
  });
  
  
  // marker 10, Lycée LA FAYETTE à CLERMONT-FERRAND
  const marker10 = new google.maps.Marker({
    position: { lat: 45.7626863878911, lng: 3.13069507922924 },
    map: map,
  });
    const descr10 =
    '<div id="content">' +
    '<div id="siteNotice">' +
    "</div>" +
    '<h1 id="firstHeading" class="firstHeading">Lycée LA FAYETTE</h1>' +
    '<div id="bodyContent">' +
    "<p> 21 bd Robert Shumann – BP 57 <br> 63002 CLERMONT-FERRAND cedex <br> Mél. : 0630021f@ac-clermont.fr </p>" +
    "</div>" +
    "</div>";
  const infowindow10 = new google.maps.InfoWindow({
    content: descr10,
  });
  marker10.addListener("click", () => {
    infowindow10.open({
      anchor: marker10,
      map,
      shouldFocus: false,
    });
  });
  
  
 // marker 11, Lycée Isaac NEWTON - ENREA à CLICHY
  const marker11 = new google.maps.Marker({
    position: { lat: 48.90931151694923, lng: 2.30687092702261 },
    map: map,
  });
    const descr11 =
    '<div id="content">' +
    '<div id="siteNotice">' +
    "</div>" +
    '<h1 id="firstHeading" class="firstHeading">Lycée Isaac NEWTON - ENREA</h1>' +
    '<div id="bodyContent">' +
    "<p> 1 place Jules Verne – 92110 CLICHY-LA-GARENNE <br> Mél. : ce.0920136g@ac-versailles.fr </p>" +
    "</div>" +
    "</div>";
  const infowindow11 = new google.maps.InfoWindow({
    content: descr11,
  });
  marker11.addListener("click", () => {
    infowindow11.open({
      anchor: marker11,
      map,
      shouldFocus: false,
    });
  });


  // marker 12, Lycée Robert  DOISNEAU à CORBEIL-ESSONNES
  const marker12 = new google.maps.Marker({
    position: { lat: 48.613313511596495, lng: 2.4590008871237488 },
    map: map,
  });
    const descr12 =
    '<div id="content">' +
    '<div id="siteNotice">' +
    "</div>" +
    '<h1 id="firstHeading" class="firstHeading">Lycée Robert  DOISNEAU</h1>' +
    '<div id="bodyContent">' +
    "<p> 89 Avenue Serge Dassault – 91813 CORBEIL-ESSONNES <br> Mél. : ats.doisneau@gmail.com </p>" +
    "</div>" +
    "</div>";
  const infowindow12 = new google.maps.InfoWindow({
    content: descr12,
  });
  marker12.addListener("click", () => {
    infowindow12.open({
      anchor: marker12,
      map,
      shouldFocus: false,
    });
  });


   // marker 13, Lycée Gustave EIFFEL à Dijon
  const marker13 = new google.maps.Marker({
    position: { lat: 47.33515095778167, lng: 5.068162688336182 },
    map: map,
  });
    const descr13 =
    '<div id="content">' +
    '<div id="siteNotice">' +
    "</div>" +
    '<h1 id="firstHeading" class="firstHeading">Lycée Gustave EIFFEL</h1>' +
    '<div id="bodyContent">' +
    "<p> 15 avenue Champollion – BP 17430 – 21074 DIJON cedex <br> Mél. : 0211033j@ac-dijon.fr </p>" +
    "</div>" +
    "</div>";
  const infowindow13 = new google.maps.InfoWindow({
    content: descr13,
  });
  marker13.addListener("click", () => {
    infowindow13.open({
      anchor: marker13,
      map,
      shouldFocus: false,
    });
  });
  
  
   // marker 14, Lycée Pierre MENDÈS FRANCE à Epinal
  const marker14 = new google.maps.Marker({
    position: { lat: 48.18741973689518, lng: 6.457137770613263 },
    map: map,
  });
    const descr14 =
    '<div id="content">' +
    '<div id="siteNotice">' +
    "</div>" +
    '<h1 id="firstHeading" class="firstHeading">Lycée Pierre MENDÈS FRANCE</h1>' +
    '<div id="bodyContent">' +
    "<p> 2 rue du Haut des Étages – BP 582 – 88021 ÉPINAL cedex <br> Mél. : ce.0880021@ac-nancy-metz.fr </p>" +
    "</div>" +
    "</div>";
  const infowindow14 = new google.maps.InfoWindow({
    content: descr14,
  });
  marker14.addListener("click", () => {
    infowindow14.open({
      anchor: marker14,
      map,
      shouldFocus: false,
    });
  });


   // marker 15, Lycée André ARGOUGES à GRENOBLE
  const marker15 = new google.maps.Marker({
    position: { lat: 45.17580224221838, lng: 5.74523479067655 },
    map: map,
  });
    const descr15 =
    '<div id="content">' +
    '<div id="siteNotice">' +
    "</div>" +
    '<h1 id="firstHeading" class="firstHeading">Lycée André ARGOUGES</h1>' +
    '<div id="bodyContent">' +
    "<p> 61 rue Léon Jouhaux – 38029 GRENOBLE cedex 2 <br> Mél. : ce.0381603L@ac-grenoble.fr </p>" +
    "</div>" +
    "</div>";
  const infowindow15 = new google.maps.InfoWindow({
    content: descr15,
  });
  marker15.addListener("click", () => {
    infowindow15.open({
      anchor: marker15,
      map,
      shouldFocus: false,
    });
  });
  
  
   // marker 16, Lycée Léonce VIELJEUX à LA ROCHELLE
  const marker16 = new google.maps.Marker({
    position: { lat: 46.17757873138053, lng: -1.1507030135486123 },
    map: map,
  });
    const descr16 =
    '<div id="content">' +
    '<div id="siteNotice">' +
    "</div>" +
    '<h1 id="firstHeading" class="firstHeading">Lycée Léonce VIELJEUX</h1>' +
    '<div id="bodyContent">' +
    "<p> rue des Gonthières – 17026 LA ROCHELLE cedex 1 <br> Mél. : cpge_ats.vieljeux@ac-poitiers.fr </p>" +
    "</div>" +
    "</div>";
  const infowindow16 = new google.maps.InfoWindow({
    content: descr16,
  });
  marker16.addListener("click", () => {
    infowindow16.open({
      anchor: marker16,
      map,
      shouldFocus: false,
    });
  });
 
 
   // marker 17, Lycées Gabriel TOUCHARD et George WASHINGTON à le Mans
  const marker17 = new google.maps.Marker({
    position: { lat: 47.996201142133266, lng: 0.2058471611752666 },
    map: map,
  });
    const descr17 =
    '<div id="content">' +
    '<div id="siteNotice">' +
    "</div>" +
    '<h1 id="firstHeading" class="firstHeading">Lycées Gabriel TOUCHARD et George WASHINGTON</h1>' +
    '<div id="bodyContent">' +
    "<p> 8 place Washington – BP 22160 – 72002 LE MANS cedex <br> Mél. : ce.0720033v@ac-nantes.fr </p>" +
    "</div>" +
    "</div>";
  const infowindow17 = new google.maps.InfoWindow({
    content: descr17,
  });
  marker17.addListener("click", () => {
    infowindow17.open({
      anchor: marker17,
      map,
      shouldFocus: false,
    });
  });
  
  
   // marker 18, Lycée Roland GARROS à LE TAMPON (La Réunion)
  const marker18 = new google.maps.Marker({
    position: { lat: -21.27403672003372, lng: 55.52051467604432 },
    map: map,
  });
    const descr18 =
    '<div id="content">' +
    '<div id="siteNotice">' +
    "</div>" +
    '<h1 id="firstHeading" class="firstHeading">Lycée Roland GARROS</h1>' +
    '<div id="bodyContent">' +
    "<p> rue Roland Garros – BP 461 – 97839 LE TAMPON (La Réunion) <br> Mél. : ce.9740002j@ac-reunion.fr </p>" +
    "</div>" +
    "</div>";
  const infowindow18 = new google.maps.InfoWindow({
    content: descr18,
  });
  marker18.addListener("click", () => {
    infowindow18.open({
      anchor: marker18,
      map,
      shouldFocus: false,
    });
  });
  
  
   // marker 19, Lycée Félix LE DANTEC à LANNION
  const marker19 = new google.maps.Marker({
    position: { lat: 48.73154280892036, lng: -3.448011383393735 },
    map: map,
  });
    const descr19 =
    '<div id="content">' +
    '<div id="siteNotice">' +
    "</div>" +
    '<h1 id="firstHeading" class="firstHeading">Lycée Félix LE DANTEC</h1>' +
    '<div id="bodyContent">' +
    "<p> Rue des Cordiers - BP 80349 – 22303 LANNION <br> Mél : ce.0220023f@ac-rennes.fr </p>" +
    "</div>" +
    "</div>";
  const infowindow19 = new google.maps.InfoWindow({
    content: descr19,
  });
  marker19.addListener("click", () => {
    infowindow19.open({
      anchor: marker19,
      map,
      shouldFocus: false,
    });
  });
  
  
   // marker 20, Lycée César BAGGIO à LILLE
  const marker20 = new google.maps.Marker({
    position: { lat: 50.61770206539666, lng: 3.0665175635795294 },
    map: map,
  });
    const descr20 =
    '<div id="content">' +
    '<div id="siteNotice">' +
    "</div>" +
    '<h1 id="firstHeading" class="firstHeading">Lycée César BAGGIO</h1>' +
    '<div id="bodyContent">' +
    "<p> Boulevard d'Alsace – 59000 LILLE  <br> Mél. : ce.0590121L@ac-lille.fr </p>" +
    "</div>" +
    "</div>";
  const infowindow20 = new google.maps.InfoWindow({
    content: descr20,
  });
  marker20.addListener("click", () => {
    infowindow20.open({
      anchor: marker20,
      map,
      shouldFocus: false,
    });
  });
  
  
   // marker 21, Lycée Édouard BRANLY à LYON
  const marker21 = new google.maps.Marker({
    position: { lat: 45.753170532421336, lng: 4.793308851611589 },
    map: map,
  });
    const descr21 =
    '<div id="content">' +
    '<div id="siteNotice">' +
    "</div>" +
    '<h1 id="firstHeading" class="firstHeading">Lycée Édouard BRANLY</h1>' +
    '<div id="bodyContent">' +
    "<p> 25 rue de la Tourvielle – 69332 LYON cedex 05 <br> Mél. : 0690128P@ac-lyon.fr </p>" +
    "</div>" +
    "</div>";
  const infowindow21 = new google.maps.InfoWindow({
    content: descr21,
  });
  marker21.addListener("click", () => {
    infowindow21.open({
      anchor: marker21,
      map,
      shouldFocus: false,
    });
  });
  
  
   // marker 22, Lycée du REMPART à MARSEILLE
  const marker22 = new google.maps.Marker({
    position: { lat: 43.28954857768544, lng: 5.367237204464094 },
    map: map,
  });
    const descr22 =
    '<div id="content">' +
    '<div id="siteNotice">' +
    "</div>" +
    '<h1 id="firstHeading" class="firstHeading">Lycée du REMPART</h1>' +
    '<div id="bodyContent">' +
    "<p> 1 rue du Rempart – 13007 MARSEILLE <br> Mél. : ce.0130049h@ac-aix-marseille.fr </p>" +
    "</div>" +
    "</div>";
  const infowindow22 = new google.maps.InfoWindow({
    content: descr22,
  });
  marker22.addListener("click", () => {
    infowindow22.open({
      anchor: marker22,
      map,
      shouldFocus: false,
    });
  });
  
  
   // marker 23, Lycée Louis ARMAND à MULHOUSE
  const marker23 = new google.maps.Marker({
    position: { lat: 47.731532916283356, lng: 7.305236676389152 },
    map: map,
  });
    const descr23 =
    '<div id="content">' +
    '<div id="siteNotice">' +
    "</div>" +
    '<h1 id="firstHeading" class="firstHeading">Lycée Louis ARMAND</h1>' +
    '<div id="bodyContent">' +
    "<p> 3 boulevard des Nations – BP 2008 – 68058 MULHOUSE cedex <br> Mél. : ce.0680034t@ac-strasbourg.fr </p>" +
    "</div>" +
    "</div>";
  const infowindow23 = new google.maps.InfoWindow({
    content: descr23,
  });
  marker23.addListener("click", () => {
    infowindow23.open({
      anchor: marker23,
      map,
      shouldFocus: false,
    });
  });
  
  
   // marker 24, Lycée Eugène LIVET à NANTES
  const marker24 = new google.maps.Marker({
    position: { lat: 47.22574542375767, lng: -1.5433132238547473 },
    map: map,
  });
    const descr24 =
    '<div id="content">' +
    '<div id="siteNotice">' +
    "</div>" +
    '<h1 id="firstHeading" class="firstHeading">Lycée Eugène LIVET</h1>' +
    '<div id="bodyContent">' +
    "<p> 16 rue Dufour – 44042 NANTES cedex <br> Mél. : ce.0440029T@ac-nantes.fr </p>" +
    "</div>" +
    "</div>";
  const infowindow24 = new google.maps.InfoWindow({
    content: descr24,
  });
  marker24.addListener("click", () => {
    infowindow24.open({
      anchor: marker24,
      map,
      shouldFocus: false,
    });
  });
  
  
   // marker 25, Institut Emmanuel D'ALZON à NÎMES
  const marker25 = new google.maps.Marker({
    position: { lat: 43.8346138346255, lng: 4.3728224816756995 },
    map: map,
  });
    const descr25 =
    '<div id="content">' +
    '<div id="siteNotice">' +
    "</div>" +
    '<h1 id="firstHeading" class="firstHeading">Institut Emmanuel D&#39ALZON</h1>' +
    '<div id="bodyContent">' +
    "<p> 11 rue Sainte Perpétue – 30020 NÎMES cedex <br> Mél. : secretariat.enseignementsup@dalzon.com </p>" +
    "</div>" +
    "</div>";
  const infowindow25 = new google.maps.InfoWindow({
    content: descr25,
  });
  marker25.addListener("click", () => {
    infowindow25.open({
      anchor: marker25,
      map,
      shouldFocus: false,
    });
  });
  
  
   // marker 26, Lycée Marie CURIE à NOGENT-SUR-OISE
  const marker26 = new google.maps.Marker({
    position: { lat: 49.2660419556013, lng: 2.4618076691972424 },
    map: map,
  });
    const descr26 =
    '<div id="content">' +
    '<div id="siteNotice">' +
    "</div>" +
    '<h1 id="firstHeading" class="firstHeading">Lycée Marie CURIE</h1>' +
    '<div id="bodyContent">' +
    "<p> 47 boulevard Pierre de Coubertin – 60180 NOGENT-SUR-OISE <br> Mél. : ats.nogent@ac-amiens.fr </p>" +
    "</div>" +
    "</div>";
  const infowindow26 = new google.maps.InfoWindow({
    content: descr26,
  });
  marker26.addListener("click", () => {
    infowindow26.open({
      anchor: marker26,
      map,
      shouldFocus: false,
    });
  });
  
  
   // marker 27, Lycée DIDEROT à PARIS
  const marker27 = new google.maps.Marker({
    position: { lat: 48.88196619702106, lng: 2.397641715033829 },
    map: map,
  });
    const descr27 =
    '<div id="content">' +
    '<div id="siteNotice">' +
    "</div>" +
    '<h1 id="firstHeading" class="firstHeading">Lycée DIDEROT</h1>' +
    '<div id="bodyContent">' +
    "<p> 61 rue David d'Angers – 75019 PARIS <br> Mél. : lycee@diderot.org </p>" +
    "</div>" +
    "</div>";
  const infowindow27 = new google.maps.InfoWindow({
    content: descr27,
  });
  marker27.addListener("click", () => {
    infowindow27.open({
      anchor: marker27,
      map,
      shouldFocus: false,
    });
  });
  
  
   // marker 28, Lycée BERGSON-JACQUARD à PARIS
  const marker28 = new google.maps.Marker({
    position: { lat: 48.880944307888356, lng: 2.376290445670244 },
    map: map,
  });
    const descr28 =
    '<div id="content">' +
    '<div id="siteNotice">' +
    "</div>" +
    '<h1 id="firstHeading" class="firstHeading">Lycée BERGSON-JACQUARD</h1>' +
    '<div id="bodyContent">' +
    "<p> 2 rue Bouret – 75019 PARIS <br> Mél. : ats.jacquard@free.fr </p>" +
    "</div>" +
    "</div>";
  const infowindow28 = new google.maps.InfoWindow({
    content: descr28,
  });
  marker28.addListener("click", () => {
    infowindow28.open({
      anchor: marker28,
      map,
      shouldFocus: false,
    });
  });
  
  
   // marker 29, Lycée Yves THÉPOT à QUIMPER
  const marker29 = new google.maps.Marker({
    position: { lat: 47.98863510528838, lng: -4.0866198547197525 },
    map: map,
  });
    const descr29 =
    '<div id="content">' +
    '<div id="siteNotice">' +
    "</div>" +
    '<h1 id="firstHeading" class="firstHeading">Lycée Yves THÉPOT</h1>' +
    '<div id="bodyContent">' +
    "<p> 28 avenue Yves THÉPOT - BP 61 439 - 29104 QUIMPER <br> Mél : ce.0290071v@ac-rennes.fr  </p>" +
    "</div>" +
    "</div>";
  const infowindow29 = new google.maps.InfoWindow({
    content: descr29,
  });
  marker29.addListener("click", () => {
    infowindow29.open({
      anchor: marker29,
      map,
      shouldFocus: false,
    });
  });
  
  
   // marker 30, Lycée Marcel CALLO à REDON
  const marker30 = new google.maps.Marker({
    position: { lat: 47.65492637559608, lng: -2.079330731593608 },
    map: map,
  });
    const descr30 =
    '<div id="content">' +
    '<div id="siteNotice">' +
    "</div>" +
    '<h1 id="firstHeading" class="firstHeading">Lycée Marcel CALLO</h1>' +
    '<div id="bodyContent">' +
    "<p> 21 avenue Étienne Gascon – BP 80324 – 35603 REDON cedex <br> Mél. : contact@lyceemarcelcallo.org </p>" +
    "</div>" +
    "</div>";
  const infowindow30 = new google.maps.InfoWindow({
    content: descr30,
  });
  marker30.addListener("click", () => {
    infowindow30.open({
      anchor: marker30,
      map,
      shouldFocus: false,
    });
  });
  
  
   // marker 31, Lycée François ARAGO à REIMS
  const marker31 = new google.maps.Marker({
    position: { lat: 49.230315665585735, lng: 4.009530684521833 },
    map: map,
  });
    const descr31 =
    '<div id="content">' +
    '<div id="siteNotice">' +
    "</div>" +
    '<h1 id="firstHeading" class="firstHeading">Lycée François ARAGO</h1>' +
    '<div id="bodyContent">' +
    "<p> 1 rue François Arago – 51095 REIMS cedex <br> Mél. : ats@lyceearago.net </p>" +
    "</div>" +
    "</div>";
  const infowindow31 = new google.maps.InfoWindow({
    content: descr31,
  });
  marker31.addListener("click", () => {
    infowindow31.open({
      anchor: marker31,
      map,
      shouldFocus: false,
    });
  });
  
  
   // marker 32, Lycée JOLIOT-CURIE à RENNES
  const marker32 = new google.maps.Marker({
    position: { lat: 48.1270166490081, lng: -1.6492307705436333 },
    map: map,
  });
    const descr32 =
    '<div id="content">' +
    '<div id="siteNotice">' +
    "</div>" +
    '<h1 id="firstHeading" class="firstHeading">Lycée JOLIOT-CURIE</h1>' +
    '<div id="bodyContent">' +
    "<p> 144 boulevard de Vitré – BP 80314 – 35703 RENNES cedex 7 <br> Mél. : scolarite-postbac0350029s@ac-rennes.fr </p>" +
    "</div>" +
    "</div>";
  const infowindow32 = new google.maps.InfoWindow({
    content: descr32,
  });
  marker32.addListener("click", () => {
    infowindow32.open({
      anchor: marker32,
      map,
      shouldFocus: false,
    });
  });
  

   // marker 33, Lycée Blaise PASCAL à ROUEN
  const marker33 = new google.maps.Marker({
    position: { lat: 49.43340982981888, lng: 1.0880893761285375 },
    map: map,
  });
    const descr33 =
    '<div id="content">' +
    '<div id="siteNotice">' +
    "</div>" +
    '<h1 id="firstHeading" class="firstHeading">Lycée Blaise PASCAL</h1>' +
    '<div id="bodyContent">' +
    "<p> 5 rue des Emmurées – BP 1105 – 76174 ROUEN cedex <br> Mél. : ce.0760095r@ac-rouen.fr </p>" +
    "</div>" +
    "</div>";
  const infowindow33 = new google.maps.InfoWindow({
    content: descr33,
  });
  marker33.addListener("click", () => {
    infowindow33.open({
      anchor: marker33,
      map,
      shouldFocus: false,
    });
  });
 
 
   // marker 34, Lycée Paul ÉLUARD à SAINT-DENIS
  const marker34 = new google.maps.Marker({
    position: { lat: 48.942018788590794, lng: 2.366499876433121 },
    map: map,
  });
    const descr34 =
    '<div id="content">' +
    '<div id="siteNotice">' +
    "</div>" +
    '<h1 id="firstHeading" class="firstHeading">Lycée Paul ÉLUARD</h1>' +
    '<div id="bodyContent">' +
    "<p> 15-17 avenue Jean Moulin – 93206 SAINT-DENIS cedex <br> Mél. : ce.0930125f@ac-creteil.fr </p>" +
    "</div>" +
    "</div>";
  const infowindow34 = new google.maps.InfoWindow({
    content: descr34,
  });
  marker34.addListener("click", () => {
    infowindow34.open({
      anchor: marker34,
      map,
      shouldFocus: false,
    });
  });
  
  
   // marker 35, Lycée Déodat DE SÉVERAC et Lycée Joseph GALLIENI à TOULOUSE
  const marker35 = new google.maps.Marker({
    position: { lat: 43.588561766405796, lng: 1.4286860426784427 },
    map: map,
  });
    const descr35 =
    '<div id="content">' +
    '<div id="siteNotice">' +
    "</div>" +
    '<h1 id="firstHeading" class="firstHeading">Lycée Déodat DE SÉVERAC et Lycée Joseph GALLIENI</h1>' +
    '<div id="bodyContent">' +
    "<p> 26 bd Déodat de Séverac – BP 97612 – 31076 TOULOUSE cedex 3 <br> Mél. : scolarite.deodat@ac-toulouse.fr ou 0312759f@ac-toulouse.fr </p>" +
    "</div>" +
    "</div>";
  const infowindow35 = new google.maps.InfoWindow({
    content: descr35,
  });
  marker35.addListener("click", () => {
    infowindow35.open({
      anchor: marker35,
      map,
      shouldFocus: false,
    });
  });
  

   // marker 36, Lycée ALGOUD-LAFFEMAS à VALENCE
  const marker36 = new google.maps.Marker({
    position: { lat: 44.91853465824229, lng: 4.919975988209181 },
    map: map,
  });
    const descr36 =
    '<div id="content">' +
    '<div id="siteNotice">' +
    "</div>" +
    '<h1 id="firstHeading" class="firstHeading">Lycée ALGOUD-LAFFEMAS</h1>' +
    '<div id="bodyContent">' +
    "<p> 37-39 Rue Barthélémy de Laffemas – BP26 – 26901 VALENCE Cedex 9 <br> Mél. : ats.algoudlaffemas@gmail.com </p>" +
    "</div>" +
    "</div>";
  const infowindow36 = new google.maps.InfoWindow({
    content: descr36,
  });
  marker36.addListener("click", () => {
    infowindow36.open({
      anchor: marker36,
      map,
      shouldFocus: false,
    });
  });
  
  
   // marker 37, Lycée Jules FERRY à VERSAILLES
  const marker37 = new google.maps.Marker({
    position: { lat: 48.7949107462913, lng: 2.122615222936423 },
    map: map,
  });
    const descr37 =
    '<div id="content">' +
    '<div id="siteNotice">' +
    "</div>" +
    '<h1 id="firstHeading" class="firstHeading">Lycée Jules FERRY</h1>' +
    '<div id="bodyContent">' +
    "<p> 29 rue du Maréchal Joffre – 78000 VERSAILLES <br> Mél. : 0782565p@ac-versailles.fr </p>" +
    "</div>" +
    "</div>";
  const infowindow37 = new google.maps.InfoWindow({
    content: descr37,
  });
  marker37.addListener("click", () => {
    infowindow37.open({
      anchor: marker37,
      map,
      shouldFocus: false,
    });
  });
  
     // marker 38, Lycée Jules-Garnier  à Nouméa
  const marker38 = new google.maps.Marker({
    position: { lat: -22.269045417271528, lng: 166.4186729028043 },
    map: map,
  });
    const descr38 =
    '<div id="content">' +
    '<div id="siteNotice">' +
    "</div>" +
    '<h1 id="firstHeading" class="firstHeading">Lycée Jules-Garnier</h1>' +
    '<div id="bodyContent">' +
    "<p> 65 av James Cook BP H3 98849 Nouméa cedex <br> Mél. : ce.9830003l@ac-noumea.nc </p>" +
    "</div>" +
    "</div>";
  const infowindow38 = new google.maps.InfoWindow({
    content: descr38,
  });
  marker38.addListener("click", () => {
    infowindow38.open({
      anchor: marker38,
      map,
      shouldFocus: false,
    });
  });
  
  
       // marker 39, Lycée Diadème Te Tara O Mai'Ao à PIRAE
  const marker39 = new google.maps.Marker({
    position: { lat: -17.530111884905725, lng: -149.54976288722372 },
    map: map,
  });
    const descr39 =
    '<div id="content">' +
    '<div id="siteNotice">' +
    "</div>" +
    '<h1 id="firstHeading" class="firstHeading">Lycée Diadème Te Tara O Mai\'Ao</h1>' +
    '<div id="bodyContent">' +
    "<p> Rue Taaone - BP 5694 - 98716 PIRAE <br> Mél. : ce.9840482B@ac-polynesie.pf </p>" +
    "</div>" +
    "</div>";
  const infowindow39 = new google.maps.InfoWindow({
    content: descr39,
  });
  marker39.addListener("click", () => {
    infowindow39.open({
      anchor: marker39,
      map,
      shouldFocus: false,
    });
  });
}

window.initMap = initMap;