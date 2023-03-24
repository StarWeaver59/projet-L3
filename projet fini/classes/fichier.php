<?php
class fichier
{
	private $_id;
	private $_nom;
	private $_size;
	private $_type;
	private $_id_cours;
	

	public function set_nom($s){
		if (strlen($s) == 0) exit("Le fichier doit avoir un nom");
		$this->_nom = $s;
	}

	public function set_id_cours($x){
		$this->_id_cours = $x;
	}
	
	public function set_size($s){
		$this->_size = $s;
	}
	
	public function set_type($s){
		$this->_type= $s;
	}
	
	
	public function set_id($x){
		$this->_id = $x;
	}
	
	public function enregistrer(Mysql $bdd){
		$q = "INSERT INTO fichier (nom,id,type,taille,id_cours)
		VALUES ('$this->_nom', null, '$this->_type','$this->_size','$this->_id_cours')";
		return $bdd->requetev2($q);
	}
	
	function supprimer(Mysql $bdd, $id){
		$q ="DELETE FROM fichier 
		WHERE id = $id";
		return $bdd->requete($q);
	}
	
	public function modifier(Mysql $bdd, $id){
		$q = "UPDATE fichier
			SET	nom = '$this->_nom',type = 'this->_type',taille = 'this->_size'
			WHERE id = $id";
		return $bdd->requete($q);
	}
	
	public function get_id(){
		return $this->_id; 
	}
	
	public function get_nom(){
		return $this->_nom ;
	}
	

	public function get_type(){
		return $this->_type;
	}
	
	public function get_id_cours(){
		return $this->_id_cours;
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
	
	public function get_liste_fichier($bdd, $order_by="id", $order_type="ASC"){
		$q = "SELECT * FROM fichier ORDER BY $order_by $order_type";
		$res = $bdd->requete($q);
		while($row = mysqli_fetch_array($res)){
			$f = new Fichier();
			$f->set_id($row['id']);
			$f->set_nom($row['nom']);
			$f->set_type($row['type']);
			$f->set_id_cours($row['id_cours']);
			$a_file[] = $f;
		}
		return $a_file;
	}
	public function get_liste_fichier_prof($bdd,$nom_cours, $order_by="nom_cours", $order_type="ASC"){
		$q = "SELECT nom 
		FROM cours, fichier 
		WHERE cours.id_cours = fichier.id_cours 
		AND nom_cours ='$nom_cours'
		ORDER BY nom_cours ASC;";
		$res = $bdd->requetev2($q);
		$q2 = "SELECT COUNT(*) FROM cours, fichier WHERE cours.id_cours = fichier.id_cours AND nom_cours ='$nom_cours';";
		$res2 = $bdd->requetev2($q2);
		$res2 = mysqli_fetch_row($res2);
		$res2 = intval($res2[0]);
		if($res2 == 0){
		}
		else {
			while($row = mysqli_fetch_array($res)){
				$f = new Fichier();
				$f->set_nom($row['nom']);
				
				$a_file[] = $f;
			}
			return $a_file;
			}
	}
}
?>
