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
	<link rel="stylesheet" href="css/accueil2.css">

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

				<form method="post" action="controle/filtrageE.php">
					<input type="Checkbox" name="foot">
					<label for="EFoot">Matchs de Foot</label><br>
					<input type="Checkbox" name="tennis">
					<label for="ETennis">Matchs de tennis</label><br>
					<input type="Checkbox" name="hockey">
					<label for="EHockey">Matchs de Hockey</label><br>
					<input type="Checkbox" name="hippique">
					<label for="EHippique">Course Hippique</label><br>
					<input type="Checkbox" name="danse">
					<label for="EDanse">Spectacle de danse</label><br>
					<button id="filterEvent" class="filtre"  type="submit">Filtrer</button>
				</form>
			</div>


			<div class="Checkbox" id="cbxLieux">

				<span class="close" id="closeL">&times;</span><br>

				<form method="post" action="controle/filtrageL.php">
					<input type="Checkbox" name="SDU">
					<label for="SDU">Stade Urbain Wallet</label><br>

					<input type="Checkbox" name="Hippodrome">
					<label for="Hippodrome">Hippodrome</label><br>

					<input type="Checkbox" name="SDL">
					<label for="SDL">Stade de la licorne</label><br>

					<input type="Checkbox" name="Coliseum">
					<label for="Coliseum">Coliseum</label><br>

					<input type="Checkbox" name="La veilliere">
					<label for="La veilliere">La veilliere</label><br>

					<input type="Checkbox" name="Team5">
					<label for="Team5">Team5</label><br>

					<input type="Checkbox" name="PST">
					<label for="PST">Parc Saint Pierre</label><br>

					<input type="Checkbox" name="PH">
					<label for="PH">Parc de la Hotoie</label><br>

					<input type="Checkbox" name="RCA">
					<label for="RCA">RCA Tennis</label><br>

					<input type="Checkbox" name="ASPTT">
					<label for="ASPTT">ASPTT</label><br>

					<input type="Checkbox" name="CSB">
					<label for="CSB">Complexe Sportif Beaumarchais</label><br><br>

					<input type="Checkbox" name="ASC">
					<label for="ASC">Amiens Sporting Club</label><br>

					<input type="Checkbox" name="GymnaseH">
					<label for="GymnaseH">Gymnase de la Hotoie</label><br>

					<input type="Checkbox" name="Zenith">
					<label for="Zenith">Zenith</label><br>

					<input type="Checkbox" name="ADD">
					<label for="ADD">Atelier des danses</label><br>

					<input type="Checkbox" name="TCA">
					<label for="TCA">Tennis Club Amiens Métropole</label><br><br>

					<input type="Checkbox" name="AACT">
					<label for="AACT">Athletic Club Tennis</label><br>

					<input type="Checkbox" name="CSA">
					<label for="CSA">CSA Montieres Etouvie</label><br>

					<input type="Checkbox" name="ESPA">
					<label for="ESPA">Espérance Sportive Pigeonnier</label><br><br>

					<input type="Checkbox" name="Mégacite">
					<label for="Mégacité">Mégacité</label><br>

					<input type="Checkbox" name="MDC">
					<label for="MDC">Maison de la culture</label><br>

					<button id="filterLieu" class="filtre"  type="submit">Filtrer</button><br><br>
				</form>
			</div>

			<div class="Checkbox" id="cbxActivites">

				<span class="close" id="closeA">&times;</span><br>

				<form method="post" action="controle/filtrageA.php">
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
					<button id="filterAct" class="filtre" type="submit">Filtrer</button>

				</form>
			</div>

		</div>

	</div>

	<div id="LightGreenRect">

		<button style="z-index: 2; position: absolute; margin-left: 10%; margin-top: 3%" id="btnCenter">
			Recentrer
		</button>

		<div id="map">




		</div> 

		<button id="btnPosition">
			<img  id="img" src="src/img/localisation.png">
		</button> 


		<div id="Rect4InfoLieux">

			<div id="lieu">
				<span id="less" style="margin-left: 10px;">+</span>
				<span id="nomL">Stade de la Licorne</span>
				<span id="less" style="margin-right: 10px;">+</span>

			</div>

			<div id="slideShow">
				<div id="pictures">
					<img  id="photo" src="src\img\lieu\Stade de la licorne.jpg" alt="error" width="100%" height="100%">
				</div>
			</div>

			<table id="tableau">
				<tr>
					<th>HORAIRE</th>	
					<th>ENTREE</th>
				</tr>
				<tr>
					<td id="horaire">24/7</td>
					<td ><span id="prix">Payant</span></td>
				</tr>
			</table>

					<!--<div id="description">
					</div>  -->

				</div> 
			</div>


			<!-- Informations concernant le lieu -->

			<?php 
			require_once("Connexion.php");
			$connect = new Connexion();
			$activite = "";
            $Lieux ;
			if(isset($_SESSION['Lieux'])){
				$Lieux = $_SESSION['Lieux'];
				unset($_SESSION['Lieux']);

			}else{
				if (isset($_SESSION['Activite']))
				{
					$activite = $_SESSION['Activite'];
				}
				$Lieux = $connect ->Affiche_Lieux($activite);
			}
				$json = json_encode($Lieux);


			?>


			<script type="text/javascript" defer>
				var Lieux = <?= $json; ?>;
				let json = JSON.stringify(Lieux);
				json = JSON.parse(json);

				var map;
				var mainLayer;
				var lat = 49.894067;
				var lon = 2.295753;
				var zoomlevel = 14;
				var markers = [];

				
				function initMap(){

//			Coordonnées ville d'Amiens pour centrer la carte
				/*	var lat = 49.894067;
					var lon = 2.295753;
					var zoomlevel = 14; */



// 			Récupération de la carte 
					map = L.map('map').setView([lat,lon],zoomlevel);
					mainLayer = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png',
					{
						maxZoom: 19,
						minZoom: 12,
						attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
					}).addTo(map);

					mainLayer.addTo(map);


//  			Mis en place des markers 

					for(var i = 0; i<json.length; i++)
					{
						markers[i] = L.marker([json[i].latitude,json[i].longitude]).addTo(map).on('click', markerOnclick);
						markers[i].bindPopup(json[i].nomL);
					}
				} 

				initMap();



				// NEW CODE

				/*	

				var filterE = document.querySelector("#filterEvent");
				var EFoot = document.querySelector("#EFoot");


				filterE.addEventListener("click",function(){
					if(EFoot.checked ){
					for(var i = 0; i <markers.length; i++){
						markers.shift();
					}
					alert(markers.length);
					}
				}); */

				var recentrer = document.querySelector("#btnCenter");
				recentrer.addEventListener("click",function(){
					map.panTo(new L.LatLng(lat,lon));

				})



// 				Gestion des itinéraires
				var routingControl = L.Routing.control({
					geocoder : L.Control.Geocoder.nominatim(),
					language : "fr",
				}).addTo(map);


// 				Position de l'utilisateur
				var maPosition;
				var malongitude;
				var malatitude

//				Gestion itinéraire 	

// 				Méthode de la map pour récupérer la géolocalisation de l'utilisateur locate(<Locate options> options?)
				var getPostion = document.querySelector("#btnPosition");
				getPostion.addEventListener("click",function(){

					navigator.geolocation.getCurrentPosition(function(position){
						maPosition = position;
						malongitude = maPosition.coords.longitude;
						malatitude = maPosition.coords.latitude;

// 				Initialisation du point de départ par rapport à position actuelle de l'utilisateur
						var currentPoints;
						var currentPointArr;
						currentPoints = routingControl.getWaypoints();
						currentPointArr = currentPoints[1];
						routingControl.setWaypoints([L.latLng(malatitude,malongitude),currentPointArr]);
					})
				})				


//				Evenement Infos Lieux

//				Display and Hide TAB
				var infoLieu = document.querySelector("#Rect4InfoLieux");


				routingControl.addEventListener('waypointschanged',function (e){

					var currentWayPts = routingControl.getWaypoints();
					console.log(currentWayPts);

					if( currentWayPts[0].name != "" && currentWayPts[1].name != ""){
						infoLieu.style.width = "0%";
						infoLieu.style.border = "none";
					}else if(currentWayPts[0].name == "" || currentWayPts[1].name == ""  )
					{
						infoLieu.style.width = "18%";
					}



				}); 

				var title = document.querySelector("#nomL");
				var prix = document.querySelector("#prix")
				var photo = document.querySelector("#photo");
				var horaire = document.querySelector("#photo");


				function markerOnclick(e){


					var prixValue;
					var horaireValue;

//							Display Image et Nom

					var popup = e.target.getPopup();
					var string = popup.getContent();
					title.innerHTML = popup.getContent();
					photo.src = "src/img/lieu/"+string+".jpg";

					var coord = e.latlng;

//							Affichage de l'adresse du marker
					var currentPoints;
					var currentPointDep;
					currentPoints = routingControl.getWaypoints();
					currentPointDep = currentPoints[0];
					


					routingControl.setWaypoints([currentPointDep,L.latLng(coord.lat,coord.lng)]);

							//Horaire et Prix
					switch (string){
					case "Hippodrome":
						prixValue = "Payant";
						horaireValue = "Variable"
						break;
					case "La veillere" :
						prixValue = "Gratuit";
						horaireValue = "9h00-19H00";
						break;
					case "Stade de la licorne":
						prixValue = "Payant";
						horaireValue = "9H30-17h30"
						break;
					case "Team5":
						prixValue = "Payant";
						horaireValue = "10H00-00H00"
						break;
					case "Maison de la culture":
						prixValue = "Payant";
						horaireValue = "13H00-19H00"
						break;  
					case "Mégacité":
						prixValue = "Payant";
						horaireValue = "8h15-18h00"
						break;
					case "Zenith":
						prixValue = "Payant";
						horaireValue = "Variable"
						break;
					case "Coliseum":
						prixValue = "Payant";
						horaireValue = "8h00-20h00"
						break;
					default :
						prixValue = "Gratuit";
						horaireValue ="Journee"
					} 


					prix.innerHTML = prixValue;
					horaire.innerHTML = horaireValue;

							// Display & Hide


				}




			</script>
		</body>	



		<footer>
			<div id="contact">Notre contact ryceka@XXX.com </div>
			<div id="aboutAmiens">A propos d'Amiens</div>
		</footer>	

		<script type="text/javascript" src="js/accueil2.js"></script>
		<script type="text/javascript" src="js/main.js"></script>


		</html>



	<!--
			<video id="video" autoplay muted loop>
				<source src="src/ville.mp4" type="video/mp4">
			</video>
		-->
