

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL ?>/public/html-admin/css/bootstrap.min.css">
</head>
<body>
<div class="container" style="margin-top:40px;">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-primary">
				<div class="panel-heading">Login</div>
				<div class="panel-body">
					<form action="<?php echo BASE_URL ?>/login/authen_login" method="POST" accept-charset="utf-8">
					<div class="row" style="margin-top:5px;">
						<div class="col-md-2">Username</div>
						<div class="col-md-9"><input type="text" name="username" required class="form-control"></div>
					</div>
					<div class="row" style="margin-top:5px;">
						<div class="col-md-2">Password</div>
						<div class="col-md-9"><input type="password" name="password" required class="form-control"></div>
					</div>
					<div class="row" style="margin-top:5px;">
						<div class="col-md-2"></div>
						<div class="col-md-9"><button type="submit" style="padding: 1px 7px;"  class="btn btn-primary">Login</button> 
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>