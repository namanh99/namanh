<?php 
/**
 * 
 */
class categorymodel extends Dmodel
{	
	public function __construct()
	{
		parent::__construct();
	}

	public function category($table_category_product){
		$sql="SELECT * FROM $table_category_product ORDER BY id_category_product DESC";
		return $this->db->select($sql);
		// $sql="SELECT * FROM $table_category_product ORDER BY id_category_product DESC";
		// $statement=$this->db->prepare($sql);
		// $statement->execute();
		// return  $statement->fetchAll(PDO::FETCH_ASSOC);
	}


	public function catebyid($table_category_product,$cond){
		$sql="SELECT * FROM $table_category_product WHERE $cond";
		
		return $this->db->select($sql,$cond);
		// $sql = "SELECT * FROM $table_category_product WHERE id_category_product=:id";
		// $statement = $this->db->prepare($sql);
		// $statement->bindParam(':id',$id );
		// $statement->execute();
		// return $statement->fetchAll();
	}

	public function insertcategory($table_category_product,$data){
		return $this->db->insert($table_category_product,$data);
		// $sql="INSERT INTO $table_category_product(title_category_product,desc_category_product) VALUES(:title,:desc_category_product) ";
		// $statement= $this->db->prepare($sql);
		
		// return $statement->execute($data);
	}
	public function updatecategory($table_category_product,$data,$cond){
		return $this->db->update($table_category_product,$data,$cond);
		// $sql ="UPDATE $table_category_product SET title_category_product=:title,desc_category_product=:desc_category_product WHERE $cond";
		// $statement= $this->db->prepare($sql);
		// return $statement->execute($data);
	}

	public function deletecategory($table_category_product	,$cond,$limit=1){
		return $this->db->delete($table_category_product,$cond);
	}

	// DANH MỤC SẢN PHẨM
	public function insert_category($table,$data){
		return $this->db->insert($table,$data);
	}
	public function delete_category($table,$cond){
		return $this->db->delete($table,$cond);
	}
	public function upadate_category($table,$data,$cond){
		return $this->db->update($table,$data,$cond);
	}
	//BÀI VIẾT
	public function insert_product($table,$data){
		return $this->db->insert($table,$data);
	}
	public function product($table){
		$sql= "SELECT * FROM $table ORDER BY id_product DESC ";
		return $this->db->select($sql);
	}
	public function delete_product($table,$cond){
		return $this->db->delete($table,$cond);
	}
	public function product_id($table_category_product,$cond){
		$sql="SELECT * FROM $table_category_product WHERE $cond";
		
		return $this->db->select($sql);
		
	}
	public function update_product($table,$data,$cond){
		return $this->db->update($table,$data,$cond);
	}

	//fontend table_category_product
	public function category_home($table_category_product){
		$sql="SELECT * FROM $table_category_product ORDER BY id_category_product DESC";
		return $this->db->select($sql);
		
	}
	public function categorybyid_home($table,$table_product,$id){
		$sql = "SELECT * FROM $table,$table_product WHERE $table.id_category_product = $table_product.id_category_product AND $table_product.id_category_product = '$id' ORDER BY $table_product.id_product DESC";
		return $this->db->select($sql);
	}
	public function list_product_home($table){
		$sql="SELECT * FROM $table ORDER BY $table.id_product DESC";
		return $this->db->select($sql);
	}
	public function categorypost_home($table_post){
		$sql="SELECT * FROM $table_post ORDER BY id_category_post DESC";
		return $this->db->select($sql);
	}
	public function postbyid_home($table_post,$post,$id){
		$sql = "SELECT * FROM $post,$table_post WHERE $post.id_category_post = $table_post.id_category_post AND $post.id_category_post = '$id' ORDER BY $post.id_post DESC";
		return $this->db->select($sql);
	}
	public function list_post_home($post){
		$sql="SELECT * FROM $post ORDER BY id_post DESC";
		return $this->db->select($sql);
	}
	public function details_product_home($table_product,$table,$cond){
		$sql = "SELECT * FROM $table_product,$table WHERE $cond";
		return $this->db->select($sql);
	}
	public function related_product_home($table,$table_product,$cond_related){
		$sql = "SELECT * FROM $table,$table_product WHERE $cond_related";
		return $this->db->select($sql);
	}
	public function detail_post_home($post,$table_post,$cond){
		$sql = "SELECT * FROM $post,$table_post WHERE $cond";
		return $this->db->select($sql);
	}
	public function product_hot($table_product){
		$sql = "SELECT * FROM $table_product ORDER BY id_product DESC";
		return $this->db->select($sql);
	}
	public function post_index($post){
		$sql = "SELECT * FROM $post ORDER BY id_post DESC LIMIT 5 ";
	
		return $this->db->select($sql);
	}
} 