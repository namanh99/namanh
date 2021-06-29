<?php 
/**
 * 
 */
class post extends Dcontroller
{
	
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
		$this->load->view('cpancel/post/add_category');
		$this->load->view('cpancel/footer');
	}	
	public function insert_category(){
		$table ='tbl_category_post';
		$title = $_POST['title'];
		$desc = $_POST['desc'];
		$data =array(
			'title_category_post' =>$title,
			'desc_category_post' => $desc
		);
		$postmodel = $this->load->model('postmodel');
		$return = $postmodel->insert_category($table,$data);
		if($return==1){
			$message['msg'] = "Thêm sản phẩm thành công";
			header("Location:".BASE_URL."/post/list_category?msg=".urlencode(serialize($message)));
		}else{
			$message['msg'] = "Thêm  sản phẩm tháy bại";
			header("Location:".BASE_URL."/post/list_category?msg=".urlencode(serialize($message)));

		}
	}

	public function list_category(){
		$table ='tbl_category_post';
		$postmodel = $this->load->model('postmodel');
		$data['category_all'] = $postmodel->category_all($table);
		$this->load->view('cpancel/header');
		$this->load->view('cpancel/menu');
		$this->load->view('cpancel/post/list_category',$data);
		$this->load->view('cpancel/footer');
	}
	public function delete_category($id){
		$table ='tbl_category_post';
		$cond = "id_category_post = '$id'";
		$postmodel = $this->load->model('postmodel');
		$return = $postmodel->delete_category($table,$cond);
		 if($return==1){
			$message['msg'] = "Xoá sản phẩm thành công";
			header("Location:".BASE_URL."/post/list_category?msg=".urlencode(serialize($message)));
		}else{
			$message['msg'] = "Xoá sản phẩm tháy bại";
			header("Location:".BASE_URL."/post/list_category?msg=".urlencode(serialize($message)));

		}
	}
	public function edit_category($id){
		$table ='tbl_category_post';
		$cond = "id_category_post = '$id'";
		$postmodel = $this->load->model('postmodel');
		$data['category_id']  = $postmodel->category_id($table,$cond);
		$this->load->view('cpancel/header');
		$this->load->view('cpancel/menu');
		$this->load->view('cpancel/post/edit_category',$data);
		$this->load->view('cpancel/footer');
	}
	public function update_category($id){
		$table ='tbl_category_post';
		$cond = "id_category_post = '$id'";

		$title = $_POST['title'];
		$desc = $_POST['desc'];
		$data =array(
			'title_category_post' =>$title,
			'desc_category_post' => $desc
		);
		$postmodel = $this->load->model('postmodel');
		$return = $postmodel->upadate_category($table,$data,$cond);
		if($return==1){
			$message['msg'] = "Cập nhập sản phẩm thành công";
			header("Location:".BASE_URL."/post/list_category?msg=".urlencode(serialize($message)));
		}else{
			$message['msg'] = "Cập nhập sản phẩm tháy bại";
			header("Location:".BASE_URL."/post/list_category?msg=".urlencode(serialize($message)));

		}
	}

	//BÀI VIẾT
	public function add_post(){
		$table ='tbl_category_post';
		$postmodel = $this->load->model('postmodel');
		$data['category_all'] = $postmodel->category_all($table);
		$this->load->view('cpancel/header');
		$this->load->view('cpancel/menu');
		$this->load->view('cpancel/post/add_post',$data);
		$this->load->view('cpancel/footer');
	}

	public function insert_post(){
		$table ='tbl_post';
		$title = $_POST['title_post'];
		$content = $_POST['content_post'];
		$id = $_POST['id_category_post'];

		$image = $_FILES['image_post']['name'];
		$tmp_image = $_FILES['image_post']['tmp_name'];

		$div = explode('.', $image);
		$file_ext = strtolower(end($div));
		$unique_image = $div[0].time().".".$file_ext;

		$path_uploads = "public/uploads/post/".$unique_image;

		$data =array(
			'title_post' =>$title,
			'content_post' => $content,
			'id_category_post' =>$id,
			'image_post' =>$unique_image
		);
		$postmodel = $this->load->model('postmodel');
		$return = $postmodel->insert_post($table,$data);
		if($return==1){
			move_uploaded_file($tmp_image, $path_uploads);
			$message['msg'] = "Thêm bài viết thành công";
			header("Location:".BASE_URL."/post/list_post?msg=".urlencode(serialize($message)));
		}else{
			$message['msg'] = "Thêm bài biết thất bại";
			header("Location:".BASE_URL."/post/list_post?msg=".urlencode(serialize($message)));

		}
	}
	public function list_post(){
		$table ='tbl_post';
		$postmodel = $this->load->model('postmodel');
		$data['category_all'] = $postmodel->category_all($table);
		$this->load->view('cpancel/header');
		$this->load->view('cpancel/menu');
		$this->load->view('cpancel/post/list_post',$data);
		$this->load->view('cpancel/footer');
	}
	public function delete_post($id){
		$table ='tbl_post';
		$cond = "id_post = '$id'";
		$postmodel = $this->load->model('postmodel');
		$return = $postmodel->delete_post($table,$cond);
		if($return==1){
			$message['msg'] = "Xoá bài viết thành công";
			header("Location:".BASE_URL."/post/list_post?msg=".urlencode(serialize($message)));
		}else{
			$message['msg'] = "Xoa bài biết thất bại";
			header("Location:".BASE_URL."/post/list_post?msg=".urlencode(serialize($message)));

		}
	}
	public function edit_post($id){
		$table ='tbl_post';
		$table_category = 'tbl_category_post';
		$cond = "id_post = '$id'";
		$postmodel = $this->load->model('postmodel');
		$data['post_id']= $postmodel->post_id($table,$cond);
		$data['category_all']= $postmodel->category_all($table_category);
		$this->load->view('cpancel/header');
		$this->load->view('cpancel/menu');
		$this->load->view('cpancel/post/edit_post',$data);
		$this->load->view('cpancel/footer');
	}
	public function update_post($id){
		$table ='tbl_post';
		$cond = "id_post = '$id'";

		$title = $_POST['title_post'];
		$content = $_POST['content_post'];
		$id = $_POST['id_category_post'];

		$image = $_FILES['image_post']['name'];
		$tmp_image = $_FILES['image_post']['tmp_name'];

		$div = explode('.', $image);
		$file_ext = strtolower(end($div));
		$unique_image = $div[0].time().".".$file_ext;

		$path_uploads = "public/uploads/post/".$unique_image;

		
		$postmodel = $this->load->model('postmodel');

		if($image){
			$data['post_id'] = $postmodel->post_id($table,$cond);
			foreach ($data['post_id'] as $key => $value) {

				$unlink_image = "public/uploads/post".$value['image_post'];
				unlink($unlink_image);
			}
				$data =array(
					'title_post' =>$title,
					'content_post' => $content,
					'id_category_post' =>$id,
					'image_post' =>$unique_image
				);
			move_uploaded_file($tmp_image, $path_uploads);

		}else{
			$data =array(
				'title_post' =>$title,
				'content_post' => $content,
				'id_category_post' =>$id,
				
			);
		}
		$return = $postmodel->update_post($table,$data,$cond);	
		if($return==1){
			$message['msg'] = "cập nhật bài viết thành công";
			header("Location:".BASE_URL."/post/list_post?msg=".urlencode(serialize($message)));
		}else{
			$message['msg'] = "Cập nhật bài biết thất bại";
			header("Location:".BASE_URL."/post/list_post?msg=".urlencode(serialize($message)));

		}
	}
		


		
		
		
	
	
}
 ?>