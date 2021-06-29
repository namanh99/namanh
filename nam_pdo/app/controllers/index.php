<?php 

class index extends DController{
	
	public function __construct()
	{
		$data = array();
		parent::__construct();
	}

	public function index(){
		$this->homepage();
	}
	public function homepage(){
		$table = 'tbl_category_product';
		$table_product ='tbl_product';
		$table_post ='tbl_category_post';
		$post ='tbl_post';
		$categorymodel = $this->load->model('categorymodel'); 
		$data['category'] = $categorymodel->category_home($table);
		$data['post']  =$categorymodel->categorypost_home($table_post);
		$data['product_hot'] = $categorymodel->product_hot($table_product);
		$data['post_index'] = $categorymodel->post_index($post);
		$this->load->view('header',$data);
		$this->load->view('slide',$data);
		$this->load->view('home',$data);	
		$this->load->view('footer');
	}	
	

	public function notfound(){
		$table ='tbl_category_product';
		$table_post ='tbl_category_post';
		$categorymodel = $this->load->model('categorymodel');
		$data['category'] = $categorymodel->category_home($table);
		$data['post'] = $categorymodel->categorypost_home($table_post);
		$this->load->view('header',$data);
		$this->load->view('404');
		$this->load->view('footer');
		
	}

	
		
		
}

	
	


	

 ?>
