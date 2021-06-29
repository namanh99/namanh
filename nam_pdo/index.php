<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Boslg</title>
</head>
<body>
	
	 
	 	<?php 





	 		// include_once('system/libs/Main.php');

	 		// include_once('system/libs/DController.php');
	 		// include_once('system/libs/Load.php');
	 		// include_once('system/libs/Database.php');
	 		// include_once('system/libs/DModel.php');
	 		



	 		spl_autoload_register(function($class){ // láy tất cả đuòng dẫn trong  system/libs
	 			include_once 'system/libs/'.$class.'.php';
	 		});
	 		include_once('app/config/config.php');

	 		$main = new Main();
	 		
	 	// 	$url =isset($_GET['url']) ? $_GET['url']  : NULL;
	 	// if($url!= NULL){
	 	// 	$url =rtrim($url,'/'); //cắt ký tự cuói
	 	// 	$url =explode('/',filter_var($url,FILTER_SANITIZE_URL)); // biến chuỗi thanh mảng
	 	// }else{
	 	// 	unset($url);
	 	// }
	 	
	 	

	 	// if(	isset($url[0])){
	 	// 	include_once('app/controllers/'.$url[0].'.php');
	 	// 	$ctlr = new $url[0]();	
	 	// 	if(isset($url[2])){
	 	// 		$ctlr->{$url[1]}($url[2]);
	 	// 	}else{
	 	// 		if(isset($url[1])){
	 	// 			$ctlr->{$url[1]}();
	 	// 		}
	 	// 	}
	 	// }else{
	 	// 	include_once('app/controllers/index.php');
	 	// 	$index = new index();
	 	// 	$index ->homepage();
	 	// }


	 			
		
	 	
	  	?>	
	
	 
	
</body>
</html>