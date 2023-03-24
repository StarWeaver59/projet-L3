<?php
class Cours
{
	private $_id_cours;
	private $_nom_cours;
	private $_nb_eleve;
	private $_id_proprio;
	

	public function set_nom_cours($s){
		if (strlen($s) == 0) exit("Le cours doit avoir un nom");
		$this->_nom_cours = $s;
	}

	public function set_nb_eleve($s){
		$this->_nb_eleve = $s;
	}
	
	public function set_id_proprio($x){
		$this->_id_proprio = $x;
	}
	
	public function set_id_cours($x){
		$this->_id_cours = $x;
	}
	
	public function enregistrer(Mysql $bdd){
		$q = "INSERT INTO cours (nom_cours,id_cours,nb_eleve,id_proprio)
		VALUES ('$this->_nom_cours', null,'$this->_nb_eleve','$this->_id_proprio')";
		return $bdd->requetev2($q);
	}
	
	function supprimer(Mysql $bdd, $id_cours){
		$q ="DELETE FROM cours 
		WHERE id_cours = $id_cours";
		return $bdd->requete($q);
	}
	
	public function modifier(Mysql $bdd, $id_cous){
		$q = "UPDATE cours
			SET	nom = '$this->_nom_cours',nb_eleve ='$this->_nb_eleve',id_proprio = 'this->_id_proprio'
			WHERE id_cours = $id_cours";
		return $bdd->requete($q);
	}
	
	public function get_id_cours(){
		return $this->_id_cours; 
	}
	
	public function get_nom(){
		return $this->_nom_cours ;
	}
	

	public function get_nb_eleve(){
		return $this->_nb_eleve;
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
	
	public function get_liste_cours($bdd, $order_by="id", $order_type="ASC"){
		$q = "SELECT * FROM cours ORDER BY $order_by $order_type";
		$res = $bdd->requete($q);
		while($row = mysqli_fetch_array($res)){
			$c = new Cours();
			$c->set_id_cours($row['id_cours']);
			$c->set_nom_cours($row['nom_cours']);
			$c->set_nb_eleve($row['nb_eleve']);
			$c->set_id_proprio($row['id_proprio']);
			
			$a_cours[] = $c;
		}
		return $a_cours;
	}
	
	public function get_liste_cours_prof($bdd,$id_utilisateur, $order_by="id_cours", $order_type="ASC"){
		$q = "SELECT * 
		FROM cours 
		WHERE id_proprio = '$id_utilisateur' 
		ORDER BY $order_by $order_type ";
		$q2 = $q2 = "SELECT COUNT(*) 
		FROM cours 
		WHERE cours.id_proprio = '$id_utilisateur'";
		$res2 = $bdd->requetev2($q2);
		$res2 = mysqli_fetch_row($res2);
		$res2 = intval($res2[0]);
		$res = $bdd->requetev2($q);
		if($res2 != 0){
			while($row = mysqli_fetch_array($res)){
				$c = new Cours();
				$c->set_nom_cours($row['nom_cours']);
				
				$a_cours[] = $c;
			}
			return $a_cours;
		}
		
	}
	
	public function get_liste_cours_eleve($bdd,$id_utilisateur, $order_by="id_cours", $order_type="ASC"){
		$q = 
		"SELECT nom_cours
		FROM cours, inscription_cours
		WHERE cours.id_cours = inscription_cours.id_cours 
		AND '$id_utilisateur' = inscription_cours.id_utilisateur";
		$q2 = "SELECT COUNT(*) 
		FROM cours, inscription_cours 
		WHERE cours.id_cours = inscription_cours.id_cours 
		AND '$id_utilisateur' = inscription_cours.id_utilisateur";
		$res2 = $bdd->requetev2($q2);
		$res2 = mysqli_fetch_row($res2);
		$res2 = intval($res2[0]);
		$res = $bdd->requetev2($q);
		if($res2 == 0){
		}
		else {
			while($row = mysqli_fetch_array($res)){
				$c = new Cours();
				$c->set_nom_cours($row['nom_cours']);
				
				$a_cours[] = $c;
			}
			return $a_cours;
		}
	}
}
?>
