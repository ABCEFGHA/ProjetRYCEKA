<html lang='fr'>
    <head>
    	<meta charset="utf-8">
      <meta name="viewport" content="width=device-width">

      <title>Accueil</title>

<!--  CSS Leaflet -->
      <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.2/dist/leaflet.css"
     integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14="
     crossorigin=""/>

<!--  CSS GeoCoder -->
     <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />

<!--  CSS Routing Machine  -->
     <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />


<!--  CSS RYCEKA -->
      <link rel="stylesheet" href="css/main.css">
      <link rel="stylesheet" href="css/accueil.css">

    </head>

    <body>

<!-- JS Leaflet -->
		<script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js"
     integrity="sha256-o9N1jGDZrf5tS+Ft4gbIK7mYMipq9lqpVJ91xHSyKhg="
     crossorigin=""></script>

<!-- JS GeoCoder -->
     <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>

<!-- JS Routing -->
     <script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>

     <?php include_once("Navbar.php");?>

		<!-- Green Band-->

		<div id="greenBand">
			<span id="title">
			 DECOUVRONS AMIENS 
			</span>

			<!-- Black Rectangle -Evènements- -Lieux- -Activites- -->
				<div id="CheckboxRect">
					<div class="button" id="evenements">
						Evènements
					</div>
					<div class="button" id="lieux">
						Lieux
					</div>
					<div class="button" id="activites">
						Activités
					</div>
				</div>

				<div id="CheckboxRect2">

					<div class="Checkbox" id="cbxEvent">

						  <span class="close" id="closeE">&times;</span><br>

						<form>
							<input type="Checkbox" name="EFoot">
							<label for="EFoot">Matchs de Foot</label><br>
							<input type="Checkbox" name="ETennis">
							<label for="ETennis">Matchs de tennis</label><br>
							<input type="Checkbox" name="EHippique">
							<label for="EHippique">Course Hippique</label><br>
						</form>
					</div>


					<div class="Checkbox" id="cbxLieux">

						<span class="close" id="closeL">&times;</span><br>

						<form>
							<input type="Checkbox" name="Hippodrome">
							<label for="Hippodrome">Hippodrome</label><br>

							<input type="Checkbox" name="SDL">
							<label for="SDL">Stade de la Licorne</label><br>

							<input type="Checkbox" name="Coliseum">
							<label for="Coliseum">Coliseum</label><br>

							<input type="Checkbox" name="PST">
							<label for="PST">Parc Saint-Pierre</label><br>

							<input type="Checkbox" name="Team5">
							<label for="Team5">Team Five</label><br>
						</form>
					</div>

					<div class="Checkbox" id="cbxActivites">

						<span class="close" id="closeA">&times;</span><br>

						<form>
							<input type="Checkbox" name="foot">
							<label for="foot">Foot</label><br>

							<input type="Checkbox" name="tennis">
							<label for="tennis">Tennis</label><br>

							<input type="Checkbox" name="basket">
							<label for="basket">Basket</label><br>
						
							<input type="Checkbox" name="hockey">
							<label for="hockey">Hockey</label><br>

							<input type="Checkbox" name="natation">
							<label for="natation">Natation</label><br>

							<input type="Checkbox" name="athletisme">
							<label for="athletisme">Athletisme</label><br>
						</form>
					</div>

				</div>

			</div>

			<div id="LightGreenRect">
				<div id="map">
				</div>

				<!-- Informations concernant le lieu -->

				<div id="Rect4InfoLieux">
					<div id="nomLieu">
						<span>-</span>
						<span>Stade de la Licorne<span>
						<span>-</span>
					</div>

					<div id="slideShow">
						<span class="fleche">&#10094;</span>
						<div id="pictures"></div>
						<span class="fleche">&#10095;</span>
					</div>

					<table id="tableau">
  					<tr>
    					<th>HORAIRE</th>	
    					<th>PRIX ENTREE</th>
  					</tr>
  					<tr>
    					<td>24/7</td>
    					<td>Gratuit</td>
  					</tr>
					</table>

					<div id="description">
					</div>


					<button id="btnPosition">OBTENIR MA POSITION</button>

				</div>


			</div> 
			     
			    <?php 
				  require_once("Connexion.php");
				  $connect = new Connexion();
				  // Recuperation des lieux;
				  $Lieux = $connect ->Affiche_Lieux();
				  $json = json_encode($Lieux);
				?>
				    <script type="text/javascript" src="js/main.js" defer></script>
					
				 
				<script type="text/javascript" defer>
					var Lieux = <?= $json; ?>;
					let json = JSON.stringify(Lieux);
					json = JSON.parse(json);
					
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

let markerLicorne = [];
for(var i = 0; i<json.length; i++)
{
	markerLicorne[i] = L.marker([json[i].latitude,json[i].longitude]).addTo(map).on('click', markerOnclick);
	markerLicorne[i].bindPopup(json[i].nomL);

}

var title = document.querySelector("#nomLieu");

function markerOnclick(e){
	var popup = e.target.getPopup();
	
	//alert(popup.getContent());
	title.innerHTML = popup.getContent();
}
	
	var grayIcon = new L.Icon({
  		iconUrl: 'src/img/grayMarker.png',
  		iconSize: [30,40],
  	});
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

				</script>
    </body>	

    <footer>
       <div id="contact">Notre contact ryceka@XXX.com </div>
       <div id="aboutAmiens">A propos d'Amiens</div>
    </footer>	
</html>



	<!--
			<video id="video" autoplay muted loop>
				<source src="src/ville.mp4" type="video/mp4">
			</video>
		-->
