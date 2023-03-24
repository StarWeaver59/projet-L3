<?php
	session_start(); 
	include("../inc/connexion.php");
	include("../classes/cours.php");
	$nom_cours = $_POST['nom_cours'];
	
	
	$q = "Select * FROM cours WHERE nom_cours = '$nom_cours'";
	$result = $bdd->requetev2($q);
	$result = mysqli_fetch_row($result);
	if($result == 0){
		$c = new Cours();
		$c->set_nom_cours($_POST['nom_cours']);
		$c->set_id_proprio($_SESSION['id']);
		$c->set_nb_eleve(0);
		if ($c->enregistrer($bdd)){
			print "Ajout Cours ok.";
			echo "<script>window.location.href = '../site/index.php';</script>";
		}
	}
	else {
		//echo "le nom de cours est déja prit";
		echo "<script>window.location.href = '../site/cours1.php';</script>";
		

	}
?>
