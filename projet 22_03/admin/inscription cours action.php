<?php
	session_start(); 
	include("../inc/connexion.php");
	include("../classes/inscription cours.php");
	
	$nom_cours = $_POST['nom_cours'];
	$q = "Select * FROM cours WHERE nom_cours = '$nom_cours'";
	$result = $bdd->requetev2($q);
	$result = mysqli_fetch_row($result);
	
	//var_dump($result);
	$id_cours = $result[0];
	
	
	$i = new Inscription_cours();
	$i->set_id_cours($id_cours);
	$i->set_id_utilisateur($_SESSION['id']);
	if ($i->enregistrer($bdd)){
		print "Ajout Inscription cours ok.";
		if($_SESSION['type_compte'] = "eleve"){
			echo "<script>window.location.href = '../site/cours_eleve.php';</script>";
		}
		else if($_SESSION['type_compte'] = "prof"){
			echo "<script>window.location.href = '../site/cours1.php';</script>";
		}
	}
?>
