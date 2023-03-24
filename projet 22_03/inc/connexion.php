<?php
include("../classes/Mysql.php");
	$bdd = new Mysql();
	$bdd->set_serveur("localhost");
	$bdd->set_login("root");
	$bdd->set_mdp("");
	$bdd->set_bdd("site_web_projet");
	$bdd->connexion();
?>