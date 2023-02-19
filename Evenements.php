<html lang='fr'>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">

	<title>Evenements</title>

	<!--  CSS Perso -->
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/evenement.css">

</head>

<body>

	<?php include_once("Navbar.php");?>

	<!-- Disposition Textes & Images --> 

	<div class="maindiv">


		<span id="title">
			EVENEMENTS 
		</span>

		<?php 
		require_once("Connexion.php");
		$connect = new Connexion();

		$resultFoot = $connect->Affiche_EventFoot();
		$resultAth = $connect->Affiche_EventAth();
		$resultTennis = $connect->Affiche_EventTennis();
		$resultNat = $connect->Affiche_EventNat();
		$resultDanse = $connect->Affiche_EventDanse();
		$resultHockey = $connect->Affiche_EventHockey();
		$resultHip = $connect->Affiche_EventHip();
		$resultBasket = $connect->Affiche_EventBasket();

		?>

		<div id="mainSection">

			<div class="sportDiv" id="divFoot">
				<span class="plusL" id="pllFoot">+</span>
				<span id="text">FOOTBALL</span>
				<span class="plusR" id="plrFoot">+</span>
			</div>

			<div class="tab" id="tfoot">
				<table>
					<tr>
						<th>Evenements</th>
						<th>Lieu</th>
						<th>Date</th>
						<th>Début</th>
						<th>Fin</th>
						<th>Prix</th>
					</tr>
					<?php
					foreach ($resultFoot as $value) {
						echo '<tr>';
						echo '<td>';
						echo $value['nomE'];
						echo '</td>';
						echo '<td>';
						echo $value['nomL'];
						echo '</td>';
						echo '<td>';
						echo $value['dateM'];
						echo '</td>';
					?>
						<td class="reduce">
							<?php echo $value['heureD']; ?>
						</td>
						<td class="reduce">						
							<?php echo $value['heureF']; ?>
						</td>
						<td class="reduce">						
							<?php echo $value['prix']; ?>
						</td>
					<?php
						echo '</tr>';
					}
				?>
				</table>
			</div>

			<div class="sportDiv" id="divTennis">
				<span class="plusL" id="pllTennis">+</span>
				<span id="text">TENNIS</span>
				<span class="plusR" id="plrTennis">+</span>
			</div>

			<div class="tab" id="tTennis">
				<table>
					<tr>
						<th>Evenements</th>
						<th>Lieu</th>
						<th>Date</th>
						<th>Début</th>
						<th>Fin</th>
						<th>Prix</th>
					</tr>
				<?php
					foreach ($resultTennis as $value) {
						echo '<tr>';
						echo '<td>';
						echo $value['nomE'];
						echo '</td>';
						echo '<td>';
						echo $value['nomL'];
						echo '</td>';
						echo '<td>';
						echo $value['dateM'];
						echo '</td>';
					?>

						<td class="reduce">
							<?php echo $value['heureD']; ?>
						</td>
						<td class="reduce">						
							<?php echo $value['heureF']; ?>
						</td>
						<td class="reduce">						
							<?php echo $value['prix']; ?>
						</td>
					<?php
						echo '</tr>';
					}
				?>
				</table>
			</div>

			<div class="sportDiv" id="divBasket">
				<span class="plusL" id="pllBasket">+</span>
				<span id="text">BASKET</span>
				<span class="plusR" id="plrBasket">+</span>
			</div>

			<div class="tab" id="tBasket">
				<table>
					<tr>
						<th>Evenements</th>
						<th>Lieu</th>
						<th>Date</th>
						<th>Début</th>
						<th>Fin</th>
						<th>Prix</th>
					</tr>
					<?php
					foreach ($resultBasket as $value) {
						echo '<tr>';
						echo '<td>';
						echo $value['nomE'];
						echo '</td>';
						echo '<td>';
						echo $value['nomL'];
						echo '</td>';
						echo '<td>';
						echo $value['dateM'];
						echo '</td>';
					?>
						<td class="reduce">
							<?php echo $value['heureD']; ?>
						</td>
						<td class="reduce">						
							<?php echo $value['heureF']; ?>
						</td>
						<td class="reduce">						
							<?php echo $value['prix']; ?>
						</td>
					<?php
						echo '</tr>';
					}
				?>
				</table>
			</div>

			<div class="sportDiv" id="divHockey">
				<span class="plusL" id="pllHockey">+</span>
				<span id="text">HOCKEY</span>
				<span class="plusR" id="plrHockey">+</span>
			</div>

			<div class="tab" id="tHockey">
				<table>
					<tr>
						<th>Evenements</th>
						<th>Lieu</th>
						<th>Date</th>
						<th>Début</th>
						<th>Fin</th>
						<th>Prix</th>
					</tr>
					<?php
					foreach ($resultHockey as $value) {
						echo '<tr>';
						echo '<td>';
						echo $value['nomE'];
						echo '</td>';
						echo '<td>';
						echo $value['nomL'];
						echo '</td>';
						echo '<td>';
						echo $value['dateM'];
						echo '</td>';
					?>
						<td class="reduce">
							<?php echo $value['heureD']; ?>
						</td>
						<td class="reduce">						
							<?php echo $value['heureF']; ?>
						</td>
						<td class="reduce">						
							<?php echo $value['prix']; ?>
						</td>
					<?php
						echo '</tr>';
					}
				?>
				</table>
			</div>

			<div class="sportDiv" id="divAth">
				<span class="plusL" id="pllAth">+</span>
				<span id="text">ATHLETISME</span>
				<span class="plusR" id="plrAth">+</span>
			</div>

			<div class="tab" id="tAth">
				<table>
					<tr>
						<th>Evenements</th>
						<th>Lieu</th>
						<th>Date</th>
						<th>Début</th>
						<th>Fin</th>
						<th>Prix</th>
					</tr>
					<?php
					foreach ($resultAth as $value) {
						echo '<tr>';
						echo '<td>';
						echo $value['nomE'];
						echo '</td>';
						echo '<td>';
						echo $value['nomL'];
						echo '</td>';
						echo '<td>';
						echo $value['dateM'];
						echo '</td>';
					?>
						<td class="reduce">
							<?php echo $value['heureD']; ?>
						</td>
						<td class="reduce">						
							<?php echo $value['heureF']; ?>
						</td>
						<td class="reduce">						
							<?php echo $value['prix']; ?>
						</td>
					<?php
						echo '</tr>';
					}
				?>
				</table>
			</div>
	
			<div class="sportDiv" id="divDanse">
				<span class="plusL" id="pllDanse">+</span>
				<span id="text">DANSE</span>
				<span class="plusR" id="plrDanse">+</span>
			</div>

			<div class="tab" id="tDanse">
				<table>
					<tr>
						<th>Evenements</th>
						<th>Lieu</th>
						<th>Date</th>
						<th>Début</th>
						<th>Fin</th>
						<th>Prix</th>
					</tr>
					<?php
					foreach ($resultDanse as $value) {
						echo '<tr>';
						echo '<td>';
						echo $value['nomE'];
						echo '</td>';
						echo '<td>';
						echo $value['nomL'];
						echo '</td>';
						echo '<td>';
						echo $value['dateM'];
						echo '</td>';
					?>
						<td class="reduce">
							<?php echo $value['heureD']; ?>
						</td>
						<td class="reduce">						
							<?php echo $value['heureF']; ?>
						</td>
						<td class="reduce">						
							<?php echo $value['prix']; ?>
						</td>
					<?php
						echo '</tr>';
					}
				?>
				</table>
			</div>

		</div>


	</div>

</body>		

<footer>
	<div id="contact">Notre contact ryceka@XXX.com </div>
	<div id="aboutAmiens">A propos d'Amiens</div>
</footer>	

<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/evenement.js"></script>

</html>


