<?php
class Inscription_cours
{
	private $_id_cours;
	private $_id_utilisateur;
	
	
	public function set_id_utilisateur($x){
		$this->_id_utilisateur = $x;
	}
	
	public function set_id_cours($x){
		$this->_id_cours = $x;
	}
	
	public function enregistrer(Mysql $bdd){
		$q = "INSERT INTO inscription_cours (id_cours,id_utilisateur)
		VALUES ('$this->_id_cours','$this->_id_utilisateur')";
		return $bdd->requetev2($q);
	}
	
	function supprimer(Mysql $bdd, $id_utilisateur){
		$q ="DELETE FROM inscription_cours 
		WHERE id_utilisateur = $id_utilisateur";
		return $bdd->requete($q);
	}
	
	public function modifier(Mysql $bdd, $id_cous){
		$q = "UPDATE inscription_cours
			SET	id_cours = 'this->_id_cours,id_proprio = 'this->_id_proprio'
			WHERE id_cours = $id_cours|| id_utilisateur = $id_utilisateur";
		return $bdd->requete($q);
	}
	
	public function get_id_cours(){
		return $this->_id_cours; 
	}
	
	public function get_id_utilisateur(){
		return $this->_id_utilisateur;
	}
	
	public function get_un($bdd, $id){
		$q = "SELECT * WHERE $bdd";
		$res = $bdd->requete($q);
		$row = mysqli_fetch_array($res);
		$f->set_id($row['id']);
		$f->set_nom($row['nom']);
		$f->set_type($row['type']);
		echo $u;
	}
	
	public function get_liste_inscrit_cours($bdd, $order_by="id", $order_type="ASC"){
		$q = "SELECT * FROM inscription_cours ORDER BY $order_by $order_type";
		$res = $bdd->requete($q);
		while($row = mysqli_fetch_array($res)){
			$i = new Inscription_cours();
			$i->set_id_cours($row['id_cours']);
			$i->set_id_utilisateur($row['id_utilisateur']);
			
			$a_inscription_cours[] = $i;
		}
		return $a_inscription_cours;
	}
}
?>
