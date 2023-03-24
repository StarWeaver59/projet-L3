<?php session_start(); 
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>SCHOOLYARD</title>
		<link rel="stylesheet" href="Style.css">
	</head>
	
	<body>
		<header>
			<h1>SCHOOLYARD</h1>
				<form id="form1" name="form1" method="post" action='../admin/Connexion_utilisateur.php'>
					<input type="submit" value="déconnexion" id="b_deconnexion">
				</form>
			<?php include '../config/unlogin.php'; ?>
			<img src = "image/logo1_sansfond.png" width = "150" id="logo">

			<p> utilisateur :  <?php echo $_SESSION['nom']; ?></ </p>
		</header>
		<div id = "contenue">
			<div id = "navigation">
				<nav class = "navigation_cours">
					<ul>
						<center>
							<button onclick="window.location.href = '../admin/formulaire ajout cours.php';">Ajout Cours</button>
						</center>
					</ul>
					<ul>
						<?php include("../admin/liste cours sommaire.php") ?>
					</ul>
				</nav>
			</div>
			<div id = "espace_cours">
				<h3>ACTUALITES</h3>
				<div class="actu">
					<h3>Actuellement avec le covid, tous les se fera avec cette plateforme pour l'envoie des chapitres des cours. </h3>
					<h3> En ce quiconcerne l'envoie des devoirs, vous allez devoir le faire en envoyant des mails à vos professeur. </h3>
				</div>
				<div class = "Lecon">
				
				</div>
			</div>
			
		</div>
		<footer>
			<p>
				Copiright &copy; SCHOOLYARD - 2022-2023 - All Right Reserved
			</p>
		</footer>
	</body>
	<script src="index.js"></script>
</html>