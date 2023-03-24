<?php session_start(); 
	
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Cours n°1</title>
        <link rel="stylesheet" href="StyleCours.css">
    </head>
    <body>
		<header>
			<h1><a href="index.php">SCHOOLYARD</a></h1>
			<form id="form1" name="form1" method="post" action='../admin/Connexion_utilisateur.php'>
					<input type="submit" value="déconnexion" id="b_deconnexion">
				</form>
			<?php include '../config/unlogin.php'; ?>
			<p> <?php echo $_SESSION['nom']; ?> </p>
			<img src = "image/logo1_sansfond.png" width = "150" id="logo">
		</header>
        <div id = "contenue">
			<div id = "navigationCoursInscrit">
				<h3>COURS</h3>
				<nav class = "navigation_cours">
					<ul>
						<?php include("../admin/liste cours sommaire.php") ?>
					</ul>
					<ul>
						<?php include("../admin/formulaire inscription cours.php") ?>
					</ul>
				</nav>
				
			</div>
			<div id = "espace_cours">
				<table id="tableEspaceCours">
					<?php include("../admin/liste fichier sommaire.php") ?>
					<tr>
						
					</tr>
				</table>
			</div>
			<div id = "chatCours">
				<h3>DISCUSSION</h3>
			</div>
		</div>
		<footer>
			<p>
				Copiright &copy; SCHOOLYARD - 2022-2023 - All Right Reserved
			</p>
		</footer>
    </body>
	<script src="cours.js"></script>
</html>