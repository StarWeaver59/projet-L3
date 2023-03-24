<?php 
	include("../inc/connexion.php");
	
	$q = 
	"SELECT nom 
	FROM cours, fichier 
	WHERE cours.id_cours = fichier.id_cours 
	AND nom_cours ='math2';";
	$result = $bdd->requetev2($q);
	$result = mysqli_fetch_row($result);
	var_dump($result);




?>