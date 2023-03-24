<?php
class Utilisateur
{
	private $_id;
	private $_nom;
	private $_prenom;
	private $_d_naissance;
	private $_mail;
	private $_mdp;
	private $_type_compte;

	public function set_nom($s){
		if (strlen($s) == 0) exit("Utilisateur : le nom est obligatoire");
		$this->_nom = $s;
	}
	
	public function set_prenom($s){
		if (strlen($s) == 0) exit("Utilisateur : le nom est obligatoire");
		$this->_prenom = $s;
	}
	
	public function set_mail($s, Mysql $bdd){
		if (strlen($s)== 0) exit("Utilisateur : le mail est obligatoire");
		
		$q = "SELECT Mail from utilisateur WHERE Mail = '$s'";
		$result = $bdd->requetev2($q);
		$result = mysqli_fetch_row($result);
		if($result == 0){
			if (strlen($s) < 5 or strlen($s) > 50) exit("Le mail doit faire entre 5 et 50 caractères");
			$this->_mail = $s;
		}
		else {
			exit("Mail deja utiliser");
		}
	}
	
	
	public function set_mdp($s, $c){
		if($s == $c){
			if (strlen($s)== 0) $s = "1234";
			$s = sha1($s);
			$this->_mdp = $s;
		}
		else {
			exit("Les mot de passe ne corresponde pas !");
		}
	}

	public function set_type_compte($s){
		$this->_type_compte = $s;
	}
	
	public function set_d_naissance($s){
		$this->_d_naissance = $s;
	}
	
	public function set_id($x){
		$this->_id = $x;
	}
	
	public function enregistrer(Mysql $bdd){
		$q = "INSERT INTO utilisateur (Nom, Prenom, date_de_naissance, Mail, Mdp, id, Type_compte)
		VALUES ('$this->_nom', '$this->_prenom', '$this->_d_naissance', '$this->_mail','$this->_mdp', null, '$this->_type_compte')";
		return $bdd->requetev2($q);
	}
	
	function supprimer(Mysql $bdd, $id){
		$q ="DELETE FROM utilisateur 
		WHERE id = $id";
		return $bdd->requete($q);
	}
	
	public function modifier(Mysql $bdd, $id){
		$q = "UPDATE utilisateur
			SET	nom = '$this->_nom', prenom = '$this->_prenom', d_naissance = '$this->_d_naissance', mail = '$this->_mail', mdp = '$this->_mdp', type_compte = 'this->_type_compte',
			WHERE id = $id";
		return $bdd->requete($q);
	}
	
	public function get_id(){
		return $this->_id; 
	}
	
	public function get_nom(){
		return $this->_nom ;
	}
	
	public function get_prenom(){ 
		return $this->_prenom;
	}
	
	public function get_mail(){ 
		return $this->_mail; 
	}
	
	public function get_type_compte(){
		return $this->_type_compte;
	}
	
	public function get_mdp(){
		return $this->_mdp;
	}
	
	public function get_dnaissance(){
		return $this->_d_naissance;
	}
	
	public function get_un($bdd, $id){
		$q = "SELECT * WHERE $bdd";
		$res = $bdd->requete($q);
		$row = mysqli_fetch_array($res);
		$u->set_d_naissance($row['d_naissance']);
		$u->set_id($row['id']);
		$u->set_mail($row['mail']);
		$u->set_mdp($row['mdp']);
		$u->set_nom($row['nom']);
		$u->set_prenom($row['prenom']);
		$u->set_type_compte($row['type_compte']);
		echo $u;
	}
	
	public function get_liste($bdd, $order_by="id", $order_type="ASC"){
		$q = "SELECT * FROM utilisateur ORDER BY $order_by $order_type";
		$res = $bdd->requete($q);
		while($row = mysqli_fetch_array($res)){
			$u = new Utilisateur();
			$u->set_d_naissance($row['date_de_naissance']);
			$u->set_id($row['id']);
			$u->set_mail($row['Mail']);
			$u->set_nom($row['Nom']);
			$u->set_prenom($row['Prenom']);
			$u->set_type_compte($row['Type_compte']);
			$a_user[] = $u;
		}
		return $a_user;
	}
}
?>
