<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Formulaire d'upload de fichiers</title>
</head>
<body>
	 <form action="../admin/upload.php" name = "fo"	method="post" enctype="multipart/form-data">
		<h2>Upload Fichier</h2>
		<label for="fileUpload">Fichier:</label>
		</br>
		<p>nom cours</p>
		<input type='textarea' name ="nom_cours" id = "nom_cours">
		<input type="file" name="monFichier" id="fileUpload">
		<input type="submit" name="valider" value="Upload">
		<p><strong>Note:</strong> Seuls les formats .jpg, .jpeg, .jpeg, .gif,.pdf, .png sont autorisés jusqu'à une taille maximale de 5 Mo.</p>
	</form>
</body>
</html>