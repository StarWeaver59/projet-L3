<?php

class Mysql{
	
	private $_serveur = "localhost";
	private $_login;
	private $_mdp;
	private $_bdd;
	private $_cnx;
	
	public function set_serveur($s){
		$this-> _serveur = $s;
	}
	
	public function set_login($s){
		$this-> _login = $s;
	}
	
	public function set_mdp ($s){
		$this-> _mdp = $s;
	}
	
	public function set_bdd ($s){
		$this-> _bdd= $s;
	}
	
	public function set_cnx($s){
		return $this->_cnx;
	}
	
	public function connexion(){
		$this->_cnx = mysqli_connect($this->_serveur, $this->_login, $this->_mdp);
		if (!$this->_cnx)
		exit("Erreur de connexion bdd : " .mysqli_error());
		if (!mysqli_select_db($this->_cnx,$this->_bdd))
		exit("Erreur : bdd inexistante : " .mysqli_error());
}
	
	public function requete($q){
		$res = $this->_cnx->query($q);
		if (!$res) exit("<pre>Erreur dans la requete [$q] : " .mysqli_error() . "</pre>");
		return $res;
	}
	
	public function requetev2($q){
		$res = mysqli_query($this->_cnx,$q);
		if (!$res) exit("<pre>Erreur dans la requete [$q] : " .mysqli_error($this->_cnx) . "</pre>");
		return $res;
	}
}
?>