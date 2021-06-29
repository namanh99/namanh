<?php 
/**
 * 
 */
class giohang extends Dcontroller
{
   
   public function __construct()
   {
      $data = array();
      parent::__construct();
   }
   public function index(){
       $this->giohang();
   }
   public function giohang(){
      Session::init();
      $table ='tbl_category_product';
      $table_post ='tbl_category_post';
      $categorymodel = $this->load->model('categorymodel');
      $data['category'] = $categorymodel->category_home($table);
      $data['post'] = $categorymodel->categorypost_home($table_post);
      $this->load->view('header',$data);
      $this->load->view('cart');
      $this->load->view('footer');
   }
   public function themgiohang(){
      Session::init();
      // Session::destroy();
      if(isset($_SESSION['shopping_cart'])){
         $avaiable = 0;
         foreach ($_SESSION['shopping_cart'] as $key => $value) {
            if($_SESSION['shopping_cart'][$key]['product_id'] == $_POST['product_id']){
               $avaiable++;

               $_SESSION['shopping_cart'][$key]['product_quantity'] += $_POST['product_quantity'];
            }
         }


         if($avaiable == 0){
            $item = array(
            'product_id' => $_POST['product_id'],
            'product_title' => $_POST['product_title'],
            'product_price' => $_POST['product_price'],
            'product_image' => $_POST['product_image'],
            'product_quantity' => $_POST['product_quantity'],
         );
         $_SESSION["shopping_cart"][] = $item;

         }

      }else{
         $item = array(
            'product_id' => $_POST['product_id'],
            'product_title' => $_POST['product_title'],
            'product_price' => $_POST['product_price'],
            'product_image' => $_POST['product_image'],
            'product_quantity' => $_POST['product_quantity'],
         );
         $_SESSION["shopping_cart"][] = $item;
      }
      header("Location:".BASE_URL.'/giohang');
   }

   public function update_giohang(){
      Session::init();
      if(isset($_POST['delete_cart'])){
         if(isset($_SESSION['shopping_cart'])){
            $avaiable = 0;
            foreach ($_SESSION['shopping_cart'] as $key => $value) {
               if($_SESSION['shopping_cart'][$key]['product_id'] == $_POST['delete_cart']){
                  unset($_SESSION['shopping_cart'][$key]);
               }
            }
            header('Location:'.BASE_URL.'/giohang');
         }else{
            header('Location:'.BASE_URL);
         }
   }else{
      foreach ($_POST['qty'] as $key => $qty) {
         foreach ($_SESSION["shopping_cart"] as $session => $value){
            if($value['product_id'] == $key && $qty >= 1){
               $_SESSION["shopping_cart"][$session]['product_quantity'] = $qty;
            }elseif ($value['product_id'] == $key && $qty <=0){
               unset($_SESSION["shopping_cart"][$session]);
            }
         }
      }
      header('Location:'.BASE_URL.'/giohang');
   }
   }

   public function dathang(){
      Session::init();
      $table_order = "tbl_order";
      $table_order_details = "tbl_order_details";
      $ordermodel =$this->load->model('ordermodel');

      $name = $_POST['name'];
      $sodienthoai = $_POST['sodienthoai'];
      $email = $_POST['email'];
      $noidung = $_POST['noidung'];
      $diachi = $_POST['diachi'];
      $order_code = rand(0,9999);

      date_default_timezone_set('asia/ho_chi_minh');
      $date = date("d/m/y");
      $hour = date("h:i:sa");
      $order_date = $date.$hour;
      $data_order =  array(
         'order_status' => 0,
         'order_code' => $order_code,
         'order_date' =>$date.' '.$hour
      );
      $result_order = $ordermodel->insert_order($table_order,$data_order);
      if(Session::get("shopping_cart")==true){
         foreach (Session::get("shopping_cart") as $key => $value) {
            
            $data_details = array(
               'order_code' => $order_code,
               'product_id' => $value['product_id'],
               'product_quantity' =>$value['product_quantity'],
               'name' => $name,
               'sodienthoai' => $sodienthoai,
               'email' => $email,
               'noidung' => $noidung,
               'diachi' => $diachi,
            );
            $result_order_details = $ordermodel->insert_order_details($table_order_details,$data_details);
         }
         unset($_SESSION["shopping_cart"]);
      }
      if($result_order_details==1){
         $message['msg'] = "Đăt hàng thành công";
         header("Location:".BASE_URL."/giohang?msg=".urlencode(serialize($message)));
      }
   }
}
 ?>