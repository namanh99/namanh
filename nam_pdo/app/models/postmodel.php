<?php 
/**
 * 
 */
class postmodel extends Dmodel
{
	
	public function __construct()
	{
		parent::__construct();
	}
	public function insert_category($table,$data){
		return $this->db->insert($table,$data);
	}
	public function category_all($table){
		$sql ="SELECT * FROM $table ORDER BY id_category_post DESC";
		return $this->db->select($sql);
	}
	public function delete_category($table,$cond){
		return $this->db->delete($table,$cond);
	}
	public function category_id($table,$cond){
		$sql ="SELECT * FROM $table WHERE $cond";
		return $this->db->select($sql);
	}
	public function upadate_category($table,$data,$cond){
		return $this->db->update($table,$data,$cond);
	}
	//BAID VIẾT
	public function insert_post($table,$data){
		return $this->db->insert($table,$data);
	}
	public function delete_post($table,$cond){
		return $this->db->delete($table,$cond);
	}
	public function post_id($table,$cond){
		$sql = "SELECT * FROM $table WHERE $cond";
		return $this->db->select($sql);
	}
	public function update_post($table,$data,$cond){
		return $this->db->update($table,$data,$cond);
	}
}
 ?>