<html lang='fr'>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">

	<title>Mon Profile</title>

	<!--  CSS Perso -->
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/profil.css">

</head>

<body>

	<!-- Band RYCEKA -Evènements- -Lieux- -Inscription/Connexion- -->
	<?php include_once("Navbar.php");
	?>

	<span id="title">
		Mon profil  
	</span>

	<div id="infoBox">
        <form method = "post" action = "Controle/ModifProfile.php">
		<div id="profil">
		<span style="color:green"></span><span>Votre profile</span>
		</div>

		<span class="intitule">Modifier vos activités préférées :</span><br>
		<div class="champ" id="activitesFav">
			<div>
			<?php if(strpos($_SESSION['Activite'], 'Football') !== false)
			      { ?>
					<input type="Checkbox" checked="checked" name="foot">
			<?php } else { ?>
				<input type="Checkbox" name="foot">
			<?php } ?>
					<label for="foot">Foot</label><br>


			<?php if(strpos($_SESSION['Activite'], 'Tennis') !== false)
			      { ?>
					<input type="Checkbox" checked="checked" name="tennis">
			<?php } else { ?>
				<input type="Checkbox" name="tennis">
			<?php } ?>
					<label for="tennis">Tennis</label><br>


			<?php if(strpos($_SESSION['Activite'], 'Basket') !== false)
			      { ?>
					<input type="Checkbox" checked="checked" name="basket">
			<?php } else { ?>
				<input type="Checkbox" name="basket">
			<?php } ?>
					<label for="basket">Basket</label><br>
			
			</div>
			<div class="checkLast">
			<?php if(strpos($_SESSION['Activite'], 'Hockey') !== false)
			      { ?>
					<input type="Checkbox" checked="checked" name="hpckey">
			<?php } else { ?>
				<input type="Checkbox" name="hockey">
			<?php } ?>
					<label for="hockey">Hockey</label><br>

			<?php if(strpos($_SESSION['Activite'], 'Natation') !== false)
			      { ?>
					<input type="Checkbox" checked="checked" name="natation">
			<?php } else { ?>
				<input type="Checkbox" name="natation">
			<?php } ?>
					
					<label for="natation">Natation</label><br>

			<?php if(strpos($_SESSION['Activite'], 'Athletisme') !== false)
			      { ?>
					<input type="Checkbox" checked="checked" name="athletisme">
			<?php } else { ?>
				<input type="Checkbox" name="athletisme">
			<?php } ?>
					
					<label for="athletisme">Athletisme</label><br>
				
			</div>
		</div><br>

		<span class="intitule">Modifier mot de passe ? </span>
		<div id="saisieMdp">

		<span id="info">Pour des raisons de sécurité, veuillez saisir votre ancien mot de passe, puis
		saisissez le nouveau.</span><br><br>
	   
	   <span>Ancien : </span><br>
	    <input type="text" rows="1" cols="15" name = "passwordOld"><br><br>
		<span style=" color:red;"><?php if(isset($_SESSION['errorOld'])) {echo $_SESSION['errorOld']; unset($_SESSION['errorOld']);}?> </span> <br>
	    <span>Nouveau : </span><br>
	    <input type="text" rows="1" cols="15" name = "passwordNew">
	    
	    <button id="save">Sauvegarder</button>

	    </div>

		</form>

	    </div>
		

	</div>



</body>		

<footer>
	<div id="contact">Notre contact ryceka@XXX.com </div>
	<div id="aboutAmiens">A propos d'Amiens</div>
</footer>	

	<script type="text/javascript" src="js/main.js"></script>


</html>


