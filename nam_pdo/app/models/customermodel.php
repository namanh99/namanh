<?php 
/**
 * 
 */
class customermodel extends Dmodel
{	
	public function __construct()
	{
		parent::__construct();
	}

	// public function category($table_category_product){
	// 	$sql="SELECT * FROM $table_category_product ORDER BY id_category_product DESC";
	// 	return $this->db->select($sql);
	// 	// $sql="SELECT * FROM $table_category_product ORDER BY id_category_product DESC";
	// 	// $statement=$this->db->prepare($sql);
	// 	// $statement->execute();
	// 	// return  $statement->fetchAll(PDO::FETCH_ASSOC);
	// }


	// public function catebyid($table_category_product,$cond){
	// 	$sql="SELECT * FROM $table_category_product WHERE $cond";
		
	// 	return $this->db->select($sql,$cond);
	// 	// $sql = "SELECT * FROM $table_category_product WHERE id_category_product=:id";
	// 	// $statement = $this->db->prepare($sql);
	// 	// $statement->bindParam(':id',$id );
	// 	// $statement->execute();
	// 	// return $statement->fetchAll();
	// }

	public function insert_customer($table_customer,$data){
		return $this->db->insert($table_customer,$data);
	}
	public function login($table_admin,$username,$password){
		$sql = "SELECT * FROM $table_admin WHERE customer_email=? AND customer_password=?";
		return $this->db->affectedRows($sql,$username,$password);	
	}

	public function getLogin($table_admin,$user,$password){
		$sql = "SELECT * FROM $table_admin WHERE customer_email =? AND customer_password=?";
		return $this->db->selectUser($sql,$user,$password);
	}
	// 	// $sql="INSERT INTO $table_category_product(title_category_product,desc_category_product) VALUES(:title,:desc_category_product) ";
	// 	// $statement= $this->db->prepare($sql);
		
	// 	// return $statement->execute($data);
	// }
	// public function updatecategory($table_category_product,$data,$cond){
	// 	return $this->db->update($table_category_product,$data,$cond);
	// 	// $sql ="UPDATE $table_category_product SET title_category_product=:title,desc_category_product=:desc_category_product WHERE $cond";
	// 	// $statement= $this->db->prepare($sql);
	// 	// return $statement->execute($data);
	// }

	// public function deletecategory($table_category_product	,$cond,$limit=1){
	// 	return $this->db->delete($table_category_product,$cond);
	// }

}
