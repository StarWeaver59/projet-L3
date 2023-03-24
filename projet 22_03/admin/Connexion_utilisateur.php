<?
session_start();
include '../config/login.php';
?>

<html>
	<head>
		<link rel="stylesheet" href="Style2.css">
	</head>
   
	<body>
	<h1>CONNEXION</h1>
	<div id ="image">
	<form id="form1" name="form1" method="post" action='../config/login.php'>
		<center>
			<table>
				<tr>
					<td>Mail </td>
					<td><input type="text" name="Mail" id="Mail"></td>
				</tr>
				<tr>
					<td>Mot de passe</td>
					<td><input type="password" name="Mdp" id="Mdp"></td>
				</tr>
				<tr>
					<td colspan = "2" align="center">
						<input type="submit" name="b_ajouter" id="b_ajouter" action = "../site/index.php" />
					</td>
				</tr>
			</table>
			<a href ="utilisateur_ajout.php"> Inscription</p></a></center>
	</form>
	</div>

	</body>
</html>