<?php 
/**
 * 
 */
class tintuc extends Dcontroller
{
	
	public function __construct()
	{
		$data = array();
		parent::__construct();
	}
	public function index(){
		 $this->danhmuc();
	}
	public function danhmuc($id){
		$table = 'tbl_category_product';
		$post = 'tbl_post';
		$table_post ='tbl_category_post';

		$categorymodel = $this->load->model('categorymodel'); 
		$data['category'] = $categorymodel->category_home($table);
		$data['post']  =$categorymodel->categorypost_home($table_post);
		$data['postbyid']  = $categorymodel->postbyid_home($table_post,$post,$id);
		$this->load->view('header',$data);
		$this->load->view('categorypost',$data);
		$this->load->view('footer');
	}
	public function tatca(){
		$table = 'tbl_category_product';
		$post = 'tbl_post';
		$table_post ='tbl_category_post';
		$categorymodel = $this->load->model('categorymodel'); 
		$data['category'] = $categorymodel->category_home($table);
		$data['post']  =$categorymodel->categorypost_home($table_post);
		$data['list_post']  = $categorymodel->list_post_home($post);
		$this->load->view('header',$data);
		$this->load->view('list_post',$data);
		$this->load->view('footer');
	}
	public function chitiettin($id){
		$table = 'tbl_category_product';
		$post = 'tbl_post';
		$table_post ='tbl_category_post';
		$cond = "$table_post.id_category_post = $post.id_category_post AND $post.id_post = '$id'";
		$categorymodel = $this->load->model('categorymodel');
		$data['category'] = $categorymodel->category_home($table);
		$data['post']  =$categorymodel->categorypost_home($table_post);
		$data['detail_post']  = $categorymodel->detail_post_home($post,$table_post,$cond);
		$this->load->view('header',$data);
		$this->load->view('detail_post',$data);
		$this->load->view('footer');
	}
}
 ?>