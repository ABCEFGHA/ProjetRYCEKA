<html lang='fr'>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">

	<title>Connexion</title>

	<!--  CSS Perso -->
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/connexion.css">

</head>

<body>
	<?php session_start(); ?>
	<!-- Band RYCEKA -Evènements- -Lieux- -Inscription/Connexion- -->
	<div id="topBlackBand">
		<div id="navigationBand">
			<div id="Ryceka">
				<span  style="color:white;">
					RY<span style="color:green;">CEKA</span>
				</span>
			</div>
			<div class="navigationItems" id="navEvents"> Evènements </div>
			<div class="navigationItems" id="navPlaces"> Lieux</div>
			<div class="navigationItems" id="navCon"> Inscription/Connexion</div>
		</div>
	</div>

	<div id="mainDivC">

		<div id="title">
			CONNEXION / INSCRIPTION  
		</div>

		<!-- <img id="speaker" src="src/img/speaker.png" alt="error"> -->


		<div id="text">
		Hello<span>&#128075;&#127997;</span>jeune étudiant amiéniois ! Tu es un passioné de sport ? Tu souhaites reprendre une activité sportive mais tu ne connais pas encore bien la ville ?  Une envie de décompresser après une journée de cours ? Ce site est fait pour toi! Viens découvrir les lieux et les activités que te propose ta ville ! En t'inscrivant tu auras ta propre carte personnalisée suivant tes préférences. Hâte que tu nous rejoignes <span>&#128521;</span> ! 
		</div>

		<div id="divConnexion">
			<form method = "post" action = "Controle/login.php">
				<input type="text" placeholder="UserID" name="id" required>
				<input type="password" placeholder="Mot de passe" name="pwd" required>
				<span style="color:red;"> <?php if (isset($_SESSION['errorC'])) { echo '<br>'.$_SESSION['errorC'];unset($_SESSION['errorC']);} ?> </span>
				<span id="mdpOubliee">Mot de passe oubliée </span>
		</div>


		<div id="choixUtilisateur">
				<button class="btn" type="submit">SE CONNECTER</button>
				<button class="btn" id="inscription" type="button">S'INSCRIRE </button>
		</div>

		<div id="text2">Acceder à la carte sans s'inscrire</div>


		</form>

	</div>


</body>		

<footer>
	<div id="contact">Notre contact ryceka@XXX.com </div>
	<div id="aboutAmiens">A propos d'Amiens</div>
</footer>	

<script type="text/javascript" src="js/connexion.js"></script>
<script type="text/javascript" src="js/main.js"></script>



</html>


