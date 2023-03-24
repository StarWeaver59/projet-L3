<?php
	
if(isset($_POST['b_deconnexion'])) {
	session_destroy();
	$_SESSION['nom']  = "";
	header("Location : 'Connexion_utilisateur.php'");
}
?>


