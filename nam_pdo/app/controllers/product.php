<?php 
class product extends DController{
	public function __construct()
	{
		parent::__construct();
	}
	public function index(){
		$this->add_category();

	}
	public function add_category(){
		$this->load->view('cpancel/header');
		$this->load->view('cpancel/menu');
		$this->load->view('cpancel/product/add_category');
		$this->load->view('cpancel/footer');

	}
	public function insert_category(){
		$title = $_POST['title_category_product'];
		$desc=  $_POST['desc_category_product'];

		$data= array(
			'title_category_product' =>$title,
			'desc_category_product' =>$desc
		);
		$table= 'tbl_category_product';
		$categorymodel = $this->load->model('categorymodel');
		$return = $categorymodel->insert_category($table,$data);
		if($return==1){
			$message['msg'] = "Thêm sản phẩm thành công";
			header("Location:".BASE_URL."/product/list_category?msg=".urlencode(serialize($message)));
		}else{
			$message['msg'] = "Thêm  sản phẩm tháy bại";
			header("Location:".BASE_URL."/product/list_category?msg=".urlencode(serialize($message)));

		}
	}
	public function list_category(){
		$table= 'tbl_category_product';
		$categorymodel = $this->load->model('categorymodel');
		$data['category_all'] = $categorymodel->category($table);

		$this->load->view('cpancel/header');
		$this->load->view('cpancel/menu');
		$this->load->view('cpancel/product/list_category',$data);
		$this->load->view('cpancel/footer');


	}
	public function delete_category($id){
		$table= 'tbl_category_product';
		$cond = "id_category_product = '$id' ";
		$categorymodel = $this->load->model('categorymodel');
		$return = $categorymodel->delete_category($table,$cond);
		if($return==1){
			$message['msg'] = "Xoá sản phẩm thành công";
			header("Location:".BASE_URL."/product/list_category?msg=".urlencode(serialize($message)));
		}else{
			$message['msg'] = "Xoá sản phẩm tháy bại";
			header("Location:".BASE_URL."/product/list_category?msg=".urlencode(serialize($message)));

		}
	}
	public function edit_category($id){
		$table= 'tbl_category_product';
		$cond = "id_category_product = '$id' ";

		$categorymodel = $this->load->model('categorymodel');
		$data["catebyid"] = $categorymodel->catebyid($table,$cond);

		$this->load->view('cpancel/header');
		$this->load->view('cpancel/menu');
		$this->load->view('cpancel/product/edit_category',$data);
		$this->load->view('cpancel/footer');
	}

	public function update_category($id){
		$table= 'tbl_category_product';
		$cond = "id_category_product = '$id' ";

		$title = $_POST['title_category_product'];
		$desc=  $_POST['desc_category_product'];

		$data= array(
			'title_category_product' =>$title,
			'desc_category_product' =>$desc
		);
		$categorymodel = $this->load->model('categorymodel');
		$return = $categorymodel->upadate_category($table,$data,$cond);
		if($return==1){
			$message['msg'] = "Cập nhập sản phẩm thành công";
			header("Location:".BASE_URL."/product/list_category?msg=".urlencode(serialize($message)));
		}else{
			$message['msg'] = "Cập nhập sản phẩm tháy bại";
			header("Location:".BASE_URL."/product/list_category?msg=".urlencode(serialize($message)));

		}
	}
	public function add_product(){
		$table = 'tbl_category_product';
		$categorymodel = $this->load->model('categorymodel');
		$data['category'] = $categorymodel->category($table);
		$this->load->view('cpancel/header');
		$this->load->view('cpancel/menu');
		$this->load->view('cpancel/product/add_product',$data);
		$this->load->view('cpancel/footer');
	}

	public function insert_product(){
		
		$title =$_POST['title_product'];
		$price =$_POST['price_product'];
		$quantity =$_POST['quantity_product'];
		$desc =$_POST['desc_product'];
		$hot = $_POST['product_hot'];
		$id = $_POST['id_category_product'];

		$image =$_FILES['image_product']['name'];
		$tmp_image = $_FILES['image_product']['tmp_name'];

		$div = explode(".", $image);
		$file_ext = strtolower(end($div));
		$unique_image = $div[0].time().'.'.$file_ext;

		$path_uploads = "public/uploads/product/".$unique_image;
		$data= array(
			'title_product' =>$title,
			'price_product' =>$price,
			'quantity_product' =>$quantity,
			'desc_product' =>$desc,
			'product_hot' =>$hot,
			'id_category_product' =>$id,
			'image_product' =>$unique_image

		);
		$table = 'tbl_product';
		$categorymodel = $this->load->model('categorymodel');
		$return = $categorymodel->insert_product($table,$data);
		
		if($return==1){
			move_uploaded_file($tmp_image, $path_uploads);
			$message['msg'] = "Thêm sản phẩm thành công";
			header("Location:".BASE_URL."/product/list_product?msg=".urlencode(serialize($message)));
		}else{
			$message['msg'] = "Thêm  sản phẩm thất bại";
			header("Location:".BASE_URL."/product/list_product?msg=".urlencode(serialize($message)));

		}
		
	}
	public function list_product(){
		$table = 'tbl_product';
		$categorymodel = $this->load->model('categorymodel');
		$data['product'] = $categorymodel->product($table);
		$this->load->view('cpancel/header');
		$this->load->view('cpancel/menu');
		$this->load->view('cpancel/product/list_product',$data);
		$this->load->view('cpancel/footer');
	}
	public function delete_product($id){
		$table = 'tbl_product';
		$cond ="id_product='$id'";
		$categorymodel = $this->load->model('categorymodel');
		$return = $categorymodel->delete_product($table,$cond);
		if($return==1){
			
			$message['msg'] = "Xoá sản phẩm thành công";
			header("Location:".BASE_URL."/product/list_product?msg=".urlencode(serialize($message)));
		}else{
			$message['msg'] = "Xoá  sản phẩm thất bại";
			header("Location:".BASE_URL."/product/list_product?msg=".urlencode(serialize($message)));

		}
	}
	public function edit_product($id){
		$table = 'tbl_product';
		$table_category ='tbl_category_product';
		$cond = "id_product='$id'";
		$categorymodel = $this->load->model('categorymodel');
		$data['category'] = $categorymodel->category($table_category);
		$data['product_id'] = $categorymodel->product_id($table,$cond);
		$this->load->view('cpancel/header');
		$this->load->view('cpancel/menu');
		$this->load->view('cpancel/product/edit_product',$data);
		$this->load->view('cpancel/footer');
	}

	public function update_product($id){
		$table = 'tbl_product';
		$cond = "tbl_product.id_product = '$id'";
		$categorymodel = $this->load->model('categorymodel');

		$title =$_POST['title_product'];
		$price =$_POST['price_product'];
		$quantity =$_POST['quantity_product'];
		$desc =$_POST['desc_product'];
		$hot = $_POST['product_hot'];
		$id = $_POST['id_category_product'];

		$image =$_FILES['image_product']['name'];
		$tmp_image = $_FILES['image_product']['tmp_name'];

		$div = explode(".", $image);
		$file_ext = strtolower(end($div));
		$unique_image = $div[0].time().'.'.$file_ext;

		$path_uploads = "public/uploads/product/".$unique_image;


		if($image){			
			$data['product_id'] = $categorymodel->product_id($table_category,$cond);
			foreach ($data['product_id'] as $key => $value) {
				$path_unlink = "public/uploads/product/";
				unlink($path_unlink.$value['image_product']);
			}
			$data= array(
				'title_product' =>$title,
				'price_product' =>$price,
				'quantity_product' =>$quantity,
				'desc_product' =>$desc,
				'product_hot' =>$hot,
				'id_category_product' =>$id,
				'image_product' =>$unique_image

			);
			move_uploaded_file($tmp_image, $path_uploads);

		}else{
			$data= array(
				'title_product' =>$title,
				'price_product' =>$price,
				'quantity_product' =>$quantity,
				'desc_product' =>$desc,
				'product_hot' =>$hot,
				'id_category_product' =>$id,
				// 'image_product' =>$unique_image

			);
		}
		$return = $categorymodel->update_product($table,$data,$cond);
		if($return==1){
			
			$message['msg'] = "Thêm sản phẩm thành công";
			header("Location:".BASE_URL."/product/list_product?msg=".urlencode(serialize($message)));
		}else{
			$message['msg'] = "Thêm  sản phẩm thất bại";
			header("Location:".BASE_URL."/product/list_product?msg=".urlencode(serialize($message)));

		}
	}
}
 
 ?>