// Initialisation de la carte sur Amiens

var lat = 49.894067;
var lon = 2.295753;
var macarte = null;
// Initialisation de la carte

function initMap()
{
	macarte = L.map('zoneMap').setView([lat,lon],11);

	// On récupère la carte sur openstreetmap
	L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', 
	{
        // Il est toujours bien de laisser le lien vers la source des données
        attribution: 'données © <a href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="//openstreetmap.fr">OSM France</a>',
        minZoom: 1,
        maxZoom: 10
     }).addTo(macarte);     
}

window.onload = function(){
	initMap();
}