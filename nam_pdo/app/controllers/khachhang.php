<?php 

class khachhang extends DController{
	
	public function __construct()
	{
		$data = array();
		parent::__construct();
	}

	
	public function dangxuat(){
		Session::init();
		Session::destroy();
		$message['msg'] = "Đăng xuất tk thành công ";
		header("Location:".BASE_URL."/khachhang/dangnhap?msg=".urlencode(serialize($message)));
	}	
	public function dangnhap(){
		
		$table = 'tbl_category_product';
		$table_product ='tbl_product';
		$table_post ='tbl_category_post';
		$post ='tbl_post';
		$categorymodel = $this->load->model('categorymodel'); 

		$data['category'] = $categorymodel->category_home($table);
		$data['post']  =$categorymodel->categorypost_home($table_post);
		
		$data['post_index'] = $categorymodel->post_index($post);
		Session::init();
		$this->load->view('header',$data);
		
		$this->load->view('customer_login');	
		$this->load->view('footer');
	}

	public function insert_dangky(){
		$name =$_POST['txtHoTen'];
		$phone =$_POST['txtDienThoai'];
		$address =$_POST['txtDiaChi'];
		$email =$_POST['txtEmail'];
		$password = $_POST['txtMatKhau'];
		
		$table_customer = 'tbl_customer';
		
		$data = array(
			'customer_name' => $name,
			'customer_phone' => $phone,
			'customer_address' => $address,
			'customer_email' => $email,
			'customer_password' => md5($password)
			

		);
		
		$customermodel = $this->load->model('customermodel');
		$result = $customermodel->insert_customer($table_customer,$data);
		
		if($result==1){
			
			$message['msg'] = "Đăng ký  thành công";
			header("Location:".BASE_URL."/khachhang/dangnhap?msg=".urlencode(serialize($message)));
		}else{
			$message['msg'] = "Đăng ký thất bại";
			header("Location:".BASE_URL."/khachhang/dangnhap?msg=".urlencode(serialize($message)));

		}
	}
	 public function login_customer(){
		$username = $_POST['username'];
		$password = md5($_POST['password']);

		$table_customer = 'tbl_customer';
		$customermodel = $this->load->model('customermodel');

		$count = $customermodel->login($table_customer,$username,$password);

		if($count==0){
			$message['msg'] = "User hoặc Password sai, nhập lại";
			header("Location:".BASE_URL."/khachhang/dangnhap?msg=".urlencode(serialize($message)));
		}else{
			$result = $customermodel->getLogin($table_customer,$user,$password);
			Session::init();
			Session::set('customer', true);
			Session::set('customer_name',$result[0]['customer_name']);
			Session::set('customer_id',$result[0]['customer_id']);
			// Session::distroy();
			$message['msg'] = "Đăng nhập tài khoản thành công";
			header("Location:".BASE_URL."/khachhang/dangnhap?msg=".urlencode(serialize($message)));
			
		}
	}

		
}

	
	


	

 ?>
