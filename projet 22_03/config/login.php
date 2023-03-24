<?php
session_start();
include("../inc/connexion.php");
// Vérifie si le formulaire de connexion a été soumis
if (isset($_POST['b_ajouter'])) {
	global $bdd;

	extract($_POST);
	if(!empty($Mail) && !empty($Mdp)){
		$Mdp = sha1($Mdp);
		$q = "Select * FROM utilisateur WHERE Mail = '$Mail' AND Mdp = '$Mdp'";
		$result = $bdd->requetev2($q);
		
		$result = mysqli_fetch_row($result);
		if($result == 0){
			echo "mdp ou mail incorecte";
			echo "<script>window.location.href = '../site/index.php';</script>";
			
		}
		else {
			$_SESSION['nom']  = $result[0];
			$_SESSION['id'] = intval($result[5]);
			$_SESSION['type_compte'] = $result[6];
		}
		echo "<script>window.location.href = '../site/index.php';</script>";
	}

		
	else {
		echo "Veuillez completer l'ensemble des champ";
	}
	
}

?>