<?php
	include("../classes/fichier.php");

	$c2 = new Cours();
	if($_SESSION['type_compte'] == "Prof"){
		$new2 = $c2->get_liste_cours_prof($bdd, $id_utilisateur);
		$chemin = "cours1.php";
	}
	else {
		$new2 = $c2->get_liste_cours_eleve($bdd, $id_utilisateur);
		$chemin = "cours_eleve.php";
	}
	$cours ="test";
	if($_SESSION['type_compte']= "eleve"){
		$q3 = "SELECT COUNT(*) 
		FROM cours, inscription_cours 
		WHERE cours.id_cours = inscription_cours.id_cours 
		AND '$id_utilisateur' = inscription_cours.id_utilisateur";
	}
	if($_SESSION['type_compte']= "prof"){
		$utilisateur = $_SESSION['id'];
		$q3 = "SELECT COUNT(*) 
		FROM cours 
		WHERE id_proprio =  '$utilisateur'";
	}
		$res3 = $bdd->requetev2($q3);
		$res3 = mysqli_fetch_row($res3);
		$res3 = intval($res3[0]);
		if($res3 == 0){
			echo "pas de cours inscrit";
		}
		else {
			foreach ($new2 as $new3){
				$nom_cours = $new3->get_nom();
				echo "<tr>";
				echo "<td colspan='3' width='23.19%'>";
				echo "<center>";
				echo "<div id= 'titreLecon'>";
				echo "<h3 id ='$nom_cours'>".$new3->get_nom()."</h3>";
				echo "</div>";
				echo "</center>";
				echo "</td>";
				echo "</tr>";
				
				echo "<tr>";
				echo "<td width='23.19%'  colspan='2'>";
				echo "<div class = 'LeconChapitre'>";
				
				$f = new fichier();
				$new4 = $f->get_liste_fichier_prof($bdd, $nom_cours);
				
				$cours ="test";
				$q2 = "SELECT COUNT(*) FROM cours, fichier WHERE cours.id_cours = fichier.id_cours AND nom_cours ='$nom_cours';";
				$res2 = $bdd->requetev2($q2);
				$res2 = mysqli_fetch_row($res2);
				$res2 = intval($res2[0]);
				if($res2 == 0){
					echo "pas de fichier dans ce cours";
				}
				else{
					foreach ($new4 as $new5){
						$fichier = $new5->get_nom();
						$chemin = "../fichier/".$fichier;
						echo "<li>";
						echo "<a id = cours_".$cours." href='$chemin' target='_blank'>";
						echo $fichier;
						echo "</a>";
						echo "</li>";
					}
				}
			}
		}
	
?>