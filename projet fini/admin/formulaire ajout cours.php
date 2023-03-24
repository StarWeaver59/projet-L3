<?php session_start()
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="Style2.css">
	</head>

	<body>

	<h1>AJOUT DE COURS</h1>
	<form id="form1" name="form1" method="post" action="../admin/ajout cours.php">
		<center>
			<table>
				<tr>
					<td>Nom cours </td>
					<td>
						<input type="text" name="nom_cours" id="nom_cours">
					</td>
				</tr>
				<td colspan = "2" align="center"><input type="submit" name="b_ajouter_cours" id="b_ajouter_cours">
				</td>
			</table>
		</center>
	</form>


	</body>
</html>