<?php
	include("../inc/connexion.php");
	include("../classes/utilisateur.php");
	$u = new Utilisateur();
	$u->set_nom($_POST['nom']);
	$u->set_prenom($_POST['prenom']);
	$u->set_mail($_POST['mail'],$bdd);
	$u->set_mdp($_POST['mdp'],$_POST['cmdp'],);
	$u->set_d_naissance($_POST['d_naissance']);
	$u->set_type_compte($_POST['type_compte']);
	if ($u->enregistrer($bdd))
		print "Ajout utilisateur ok.";	
?>
