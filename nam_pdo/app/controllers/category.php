<?php 

class category extends DController{
	
	public function __construct()
	{
		$data = array();
		parent::__construct();
	}

	
	public function category(){
		$table_category_product = 'tbl_category_product';
		$categorymodel = $this->load->model('categorymodel');
		$data['category'] = $categorymodel->category($table_category_product);
		$this->load->view('category',$data);
	}

	public function catebyid(){
		$table_category_product = 'tbl_category_product';
		$categorymodel = $this->load->model('categorymodel');
		$id = '123';
		$data['catebyid']= $categorymodel->catebyid($table_category_product,$id);
		$this->load->view('catebyid',$data);
	}

	public function addcategory(){
		$this->load->view('addcategory',);
	}

	public function insertcategory(){
		$table_category_product = 'tbl_category_product';
		$categorymodel = $this->load->model('categorymodel');
		$title = $_POST['title'];
		$desc = $_POST['desc'];
		$data= array(
			'title_category_product' => $title,
			'desc_category_product' => $desc
		);
		$result = $categorymodel->insertcategory($table_category_product,$data);
		if($result ==1){
			$message['msg'] = 'Thêm dữ liệu thành công';
		}else{
			$message['msg'] = 'Thêm dữ liệu thất bại';
		}
		$this->load->view('addcategory',$message);

	}

	public function updatecategory(){
		$table_category_product = 'tbl_category_product';
		$categorymodel = $this->load->model('categorymodel');
		$cond ="tbl_category_product.id_category_product = 123";
		$data= array(
			'title_category_product' => 'ee',
			'desc_category_product' => 'meeeee'
		);
		$result = $categorymodel->updatecategory($table_category_product,$data,$cond);
		if($result ==1){
			echo  'Cập nhập dữ liệu thành công';
		}else{
			echo 'Cập nhập dữ liệu thất bại';
		}
	}

	public function deleteCategory(){

		$categorymodel = $this->load->model('categorymodel');
		$table_category_product = 'tbl_category_product';
		
		
		

		$cond = "tbl_category_product.id_category_product=124";

		

		$result  = $categorymodel->deletecategory($table_category_product,$cond);
		
		if($result ==1){
			echo  'Xoá dữ liệu thành công';
		}else{
			echo 'Xoá dữ liệu thất bại';
		}
	}

	
	
		
		
}

	
	


	

 ?>
