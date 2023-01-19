
//Initialisation de la carte
var map;
var mainLayer;
function initMap(){

	//Coordonnées ville d'Amiens
	var lat = 49.894067;
	var lon = 2.295753;
	var zoomlevel = 12;

	// Récupération de la carte pointant sur Amiens
	map = L.map('map').setView([lat,lon],zoomlevel);
	mainLayer = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png',
	{
  	  maxZoom: 19,
  	  minZoom: 10,
   	 attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
	}).addTo(map);

 	mainLayer.addTo(map);

// Initialisation de la fenêtre de gestion d'itinéraire

//  Mis en place des markers 
 	var markerLicorne = L.marker([49.89467767374285,2.263876168762741]).addTo(map);
	markerLicorne.bindPopup("Stade de la licorne");  

	var markerStPierre = L.marker([49.899183139216674, 2.3079308674727854]).addTo(map);
	var markerTeam5 = L.marker([49.926114946621546, 2.3011540692834784]).addTo(map);  
	
 	var grayIcon = new L.Icon({
  		iconUrl: 'src/img/grayMarker.png',
  		iconSize: [30,40],
  	});

 	var markerColiseum = L.marker([49.894001789866294, 2.2891742259289494],{icon: grayIcon}).addTo(map); 
 	markerColiseum.bindPopup("Coliseum");  
} 
initMap();

// Ajout de la gestion des itinéraires
var routingControl = L.Routing.control({
	geocoder : L.Control.Geocoder.nominatim(),
	language : "fr",
}).addTo(map);


// Récupération de la position de l'utilisateur
var maPosition;
var malongitude;
var malatitude

var getPostion = document.querySelector("#btnPosition");
getPostion.addEventListener("click",function(){

	navigator.geolocation.getCurrentPosition(function(position){
		maPosition = position;
		malongitude = maPosition.coords.longitude;
		malatitude = maPosition.coords.latitude;

// On initialise le point de départ à la position actuelle de l'utilisateur
		routingControl.setWaypoints([L.latLng(malatitude,malongitude)]);
	})
})


// Ecouteurs sur Evenements, Lieux, Activites

// Variables Evenements
var evenements = document.querySelector("#evenements");
var cbxE = document.querySelector("#cbxEvent");
var closeE = document.querySelector("#closeE");

evenements.addEventListener("click",function(){
	cbxE.style.height = "65%";
});
closeE.addEventListener("click",function(){
	cbxE.style.height = "0%";
});

// Variables Lieux
var lieux = document.querySelector("#lieux");
var cbxL = document.querySelector("#cbxLieux");
var closeL = document.querySelector("#closeL");

lieux.addEventListener("click",function(){
	cbxL.style.height = "65%";
});
closeL.addEventListener("click",function(){
	cbxL.style.height = "0%";
});


// Variables activites
var activites = document.querySelector("#activites");
var cbxA = document.querySelector("#cbxActivites");
var closeA = document.querySelector("#closeA");

activites.addEventListener("click",function(){
	cbxA.style.height = "65%";
});

closeA.addEventListener("click",function(){
	cbxA.style.height = "0%";
});






