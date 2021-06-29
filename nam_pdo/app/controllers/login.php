<?php 

class login extends DController{
	
	public function __construct()
	{
		$message= array();
		$data = array();
		parent::__construct();
	}

	public function index(){
		$this->login();
	}
	public function login(){
		Session::init();
		if(Session::get("login")==true){
			header("Location:".BASE_URL."/login/dashboard"); 
		}
		$this->load->view('cpancel/login');

		
	}
	public function dashboard(){
		Session::checkSession();
		$this->load->view('cpancel/header');
		$this->load->view('cpancel/menu');
		$this->load->view('cpancel/footer');
	}

	public function authen_login(){
		$username = $_POST['username'];
		$password = md5($_POST['password']);

		$table_admin = 'tbl_admin';
		$loginmodel = $this->load->model('loginmodel');

		$count = $loginmodel->login($table_admin,$username,$password);

		if($count==0){
			$message['msg'] = "User hoặc Password sai, nhập lại";
			header("Location:".BASE_URL."/login");
		}else{
			$result = $loginmodel->getLogin($table_admin,$user,$password);
			Session::init();
			Session::set('login', true);
			Session::set('username',$result[0]['username']);
			Session::set('userid',$result[0]['admin_id']);
			// Session::distroy();
			header("Location:".BASE_URL."/login/dashboard");
			
		}

	}
	public function logout(){
		Session::init();
		// session_destroy();
		unset($_SESSION['login']);
		header("Location:".BASE_URL."/login");
	}

	
	
		
		
}

	
	


	

 ?>
