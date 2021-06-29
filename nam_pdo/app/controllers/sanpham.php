<?php 
/**
 * 
 */
class sanpham extends Dcontroller
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
		$table_product ='tbl_product';
		$table_post ='tbl_category_post';
		$categorymodel = $this->load->model('categorymodel'); 
		$data['category'] = $categorymodel->category_home($table);
		$data['category_by_id'] = $categorymodel->categorybyid_home($table,$table_product,$id);
		$data['post']  =$categorymodel->categorypost_home($table_post);
		$this->load->view('header',$data);
		$this->load->view('categoryproduct',$data);
		$this->load->view('footer');
	}
	public function tatca(){
		$table = 'tbl_category_product';
		$table_product ='tbl_product';
		$table_post ='tbl_category_post';
		$categorymodel = $this->load->model('categorymodel'); 
		$data['category'] = $categorymodel->category_home($table);
		$data['list_product'] = $categorymodel->list_product_home($table_product);
		$data['post']  =$categorymodel->categorypost_home($table_post);
		$this->load->view('header',$data);
		$this->load->view('list_product',$data);
		$this->load->view('footer');
	}
	public function chitietsp($id){
		$table = 'tbl_category_product';
		$table_product ='tbl_product';
		$table_post ='tbl_category_post';
		$cond = "$table.id_category_product = $table_product.id_category_product AND $table_product.id_product = '$id' ";
		$categorymodel = $this->load->model('categorymodel');
		$data['category'] = $categorymodel->category_home($table);

		$data['post']  = $categorymodel->categorypost_home($table_post);

		$data['detail_product'] = $categorymodel->details_product_home($table_product,$table,$cond);

		foreach ($data['detail_product'] as $key => $cate) {
			$id_cate = $cate['id_category_product'];
		}

		$cond_related = "$table.id_category_product = $table_product.id_category_product AND $table.id_category_product = '$id_cate' AND $table_product.id_product NOT IN ('$id')";//AND $table_product.id_product NOT IN ('$id') để xoa bỏ id đã truy cập vào


		$data['related'] = $categorymodel->related_product_home($table,$table_product,$cond_related);

		$this->load->view('header',$data);
		$this->load->view('detail_product',$data);
		$this->load->view('footer');
	}
	 public function sanphamhot(){
		$table = 'tbl_category_product';
		$table_product ='tbl_product';
		$table_post ='tbl_category_post';
		$categorymodel = $this->load->model('categorymodel'); 
		$data['category'] = $categorymodel->category_home($table);
		$data['post']  =$categorymodel->categorypost_home($table_post);
		$data['product_hot'] = $categorymodel->product_hot($table_product);
		$this->load->view('header',$data);
		$this->load->view('product_hot',$data);
		$this->load->view('footer');
	}
}
 ?>