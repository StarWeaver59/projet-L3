<?php
	session_start();
	$f = new fichier();
	$id_utilisateur = $_SESSION['id'];
	$nom_cours = 'math2';
	if($_SESSION['type_compte'] == "Prof"){
		$new2 = $f->get_liste_fichier_prof($bdd, $nom_cours);
		//$chemin = "cours_Prof.php";
	}
	else {
		$new2 = $c->get_liste_fichier_eleve($bdd, $nom_cours);
		//$chemin = "cours_eleve.php";
	}
	$cours ="test";
	
	foreach ($new2 as $new3){
		$fichier = $new3->get_nom();
		$chemin = "../fichier/".$fichier;
		echo "<li>";
		echo "<a id = cours_".$cours." href='$chemin'>";
		echo $new3->get_nom();
		echo "</a>";
		echo "</li>";
	}
?>