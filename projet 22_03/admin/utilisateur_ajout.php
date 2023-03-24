<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="Style2.css">
	</head>

	<body>

	<h1>Inscription</h1>
	<form id="form1" name="form1" method="post"
			action="utilisateur_ajout_action.php">
		<center>
			<table>
				<tr>
					<td>Nom </td>
					<td><input type="text" name="nom" id="nom"></td>
				</tr>
				<tr>
					<td>Prenom</td>
					<td><input type="text" name="prenom" id="prenom"></td>
				</tr>
				<tr>
					<td>Mail</td>
					<td><input type="text" name="mail" id="mail"></td>
				</tr>
				<tr>
					<td>Mot de passe</td>
					<td><input type="password" name="mdp" id="mdp"></td>
				</tr>
				<tr>
					<td>Confirmer mot de passe</td>
					<td><input type="password" name="cmdp" id="cmdp"></td>
				</tr>
				<tr>
					<td>Date de naissance *</td>
					<td> <input type="date" name="d_naissance" id="d_naissance"></td> 
				</tr>
				<tr>
					<td> type compte</td>
					<td><select name = "type_compte" id = "type_compte">
						<option value = ""> choix type compte </option>
						<option value = "Eleve"> Eleve </option>
						<option value = "Prof"> Prof </option> </select>
					</td>
				<tr>
						<td colspan = "2" align="center"><input type="submit" name="b_ajouter" id="b_ajouter"></td>
					</tr>
					
			</table>
			<a href ="Connexion_utilisateur.php">Connexion</p></a></center>
		</center>
	</form>


	</body>
</html>