<?php 

class order extends DController{

	function __construct(){
		parent::__construct();
		Session::checkSession();
	}
	public function index(){
		$this->order();
	}

	public function order(){
		$table_order = "tbl_order";
		$ordermodel = $this->load->model('ordermodel');
		$data['order'] = $ordermodel->list_order($table_order);
		$this->load->view('cpancel/header');
		$this->load->view('cpancel/menu');
		$this->load->view('cpancel/order/order',$data);
		$this->load->view('cpancel/footer');
	}

	public function order_details($order_code){
		$table_product = "tbl_product";
		$table_order_details = "tbl_order_details";
		$ordermodel = $this->load->model('ordermodel');
		$cond ="$table_order_details.order_code = '$order_code' AND $table_product.id_product=$table_order_details.product_id";
		$cond_info ="$table_order_details.order_code = '$order_code' ";
		$data['order_details'] = $ordermodel->list_order_details($table_order_details,$table_product,$cond);
		$data['order_info'] = $ordermodel->list_info($table_order_details,$cond_info);
		$this->load->view('cpancel/header');
		$this->load->view('cpancel/menu');
		$this->load->view('cpancel/order/order_details',$data);
		$this->load->view('cpancel/footer');	
	}

	public function order_confirm($order_code){
		$table_order = "tbl_order";
		$ordermodel = $this->load->model('ordermodel');
		$cond = "$table_order.order_code = '$order_code' ";
		$data = array(
			'order_status' => 1		
		);
		$return = $data['order'] = $ordermodel->order_confirm($table_order,$data,$cond);

		if($return==1){
			$message['msg'] = "Xử lý đơn hàng thành công";
			header("Location:".BASE_URL."/order?msg=".urlencode(serialize($message)));
		}else{
			$message['msg'] = "Xử lý đơn hàng thất bại";
			header("Location:".BASE_URL."/order?msg=".urlencode(serialize($message)));

		}
	}
}


 ?>