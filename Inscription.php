<html lang='fr'>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">

	<title>Inscription</title>

	<!--  CSS Perso -->
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/inscription.css">

</head>

<body>

	<!-- Band RYCEKA -Evènements- -Lieux- -Inscription/Connexion- -->
	
	<?php include_once("Navbar.php");?>

	<div id="mainDivI">

		<div id="title">
			INSCRIPTION
			<span style="text-decoration:none">&#128221;</span>
		</div>


		<div id="inscBox">
			<form method = "post" action = "Controle/traitement.php">
				<br> <!-- Pas propre -->
				<span class="intitule2">Identifiant *</span><br>
				<input class="saisie" type="text" name="identifiant" class="champ" id="identifiant" rows="1" cols="15" required />
				<span class="intitule2" style="color:red;"> <?php if (isset($_SESSION['error1'])) { echo $_SESSION['error1'];unset($_SESSION['error1']); } ?> </span>
				<br>

				<span class="intitule2">Mot de passe *</span><br>
				<input class="saisie" type="password"  name="password" class="champ" id="mdp" rows="1" cols="15"required />
				<span  class="intitule2" style="color:red;"> <?php if (isset($_SESSION['error2'])) { echo $_SESSION['error2']; unset($_SESSION['error2']);} ?> </span>
				<br>
				<span class="intitule2">Confirmer le mot de passe *</span><br>
				<input class="saisie" type="password" name="password_confirm" class="champ" id="mdp2" rows="1" cols="15"required />
				<span class="intitule2" style="color:red;"> <?php if (isset($_SESSION['error3'])) { echo $_SESSION['error3']; unset($_SESSION['error2']);} ?> </span>
				<br>

				<span class="intitule2"> Votre livre préféré ? *</span><br>
				<input class="saisie"  type="text"  name="livre" class="champ"  rows="1" cols="25" required />
				<br>

				<span class="intitule2">Activités favorites</span><br><br>
				<div class="champ" id="activitesFav">
					<div style="width: 50%;">

						<input type="Checkbox" name="foot">
						<label for="foot">Foot</label><br>

						<input type="Checkbox" name="tennis">
						<label for="tennis">Tennis</label><br>

						<input type="Checkbox" name="basket">
						<label for="basket">Basket</label><br>

					</div>
					<div  style="width:50%;"class="checkLast">

						<input type="Checkbox" name="hockey">
						<label for="hockey">Hockey</label><br>

						<input type="Checkbox" name="natation">
						<label for="natation">Natation</label><br>

						<input type="Checkbox" name="athletisme">
						<label for="athletisme">Athletisme</label><br>

					</div>

				</div>
				<button type="submit" class="button1">S'inscrire</button>

			</form>

			<div class = "intitule" style="margin:auto; color:green; width:100%">
				<?php if (isset($_SESSION['succes'])) { echo '<br>'.$_SESSION['succes']; unset($_SESSION['succes']);} ?>
			</div>

		</div>

	</div>



</body>		

<footer>
	<div id="contact">Notre contact ryceka@XXX.com </div>
	<div id="aboutAmiens">A propos d'Amiens</div>
</footer>	
	<script type="text/javascript" src="js/main.js"></script>

</html>


