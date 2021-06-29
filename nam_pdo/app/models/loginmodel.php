<?php 

class loginmodel extends DModel{
	public function __construct(){
		// echo "this is homemodel.php";
		parent::__construct();
	}
	public function login($table_admin,$username,$password){
		$sql = "SELECT * FROM $table_admin WHERE username=? AND password=?";
		return $this->db->affectedRows($sql,$username,$password);	
	}

	public function getLogin($table_admin,$user,$password){
		$sql = "SELECT * FROM $table_admin WHERE username =? AND password=?";
		return $this->db->selectUser($sql,$user,$password);
	}
	
}

 ?>

 