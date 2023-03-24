<?php
	include("../inc/connexion.php");
	include("../classes/cours.php");
	$c = new Cours();
	$id_utilisateur = $_SESSION['id'];
	if($_SESSION['type_compte'] == "Prof"){
		$new2 = $c->get_liste_cours_prof($bdd, $id_utilisateur);
		$chemin = "cours1.php";
		$q2 = "SELECT COUNT(*) 
		FROM cours 
		WHERE cours.id_proprio = '$id_utilisateur'";
	}
	else {
		$new2 = $c->get_liste_cours_eleve($bdd, $id_utilisateur);
		$chemin = "cours_eleve.php";
		$q2 = "SELECT COUNT(*) 
		FROM cours, inscription_cours 
		WHERE cours.id_cours = inscription_cours.id_cours 
		AND '$id_utilisateur' = inscription_cours.id_utilisateur";
	}
	$res2 = $bdd->requetev2($q2);
	$res2 = mysqli_fetch_row($res2);
	$res2 = intval($res2[0]);
	if($res2 == 0){
		echo "pas de cours inscrit";
		echo "<a href = 'cours_eleve'>";
		echo "</br>";
		echo "espace cours";
		echo "</a>";
	}
	else {
		foreach ($new2 as $new3){
			echo "<li>";
			echo '<a id = cours href='.$chemin.'>';
			echo $new3->get_nom();
			echo "</a>";
			echo "</li>";
		}
	}
?>