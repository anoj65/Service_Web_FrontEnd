<?php

	$error_password = false;
	$error_cpassword = false;
	$validtoken = false;
	$error_token = false;

	$input_password = "";
	$input_cpassword = "";
	

	function validateinput_semi($input){
		$variable = htmlspecialchars(trim(stripslashes($input)));
		return($variable);
	}

	if($_SERVER["REQUEST_METHOD"] == "GET"){
	
		if(isset($_GET['token'])){
			$input_token = validateinput_semi($_GET['token']);
			// db

			$validtoken = true;
		} else {
			$error_token = true;
		}
		
		
	} elseif($_SERVER["REQUEST_METHOD"] == "POST"){
		
		$input_password = validateinput_semi($_POST['password']);
		$input_cpassword = validateinput_semi($_POST['cpassword']);

		if(strlen($input_password) < 8){
			$error_password = true;
		}
		if($input_password !== $input_cpassword){
			$error_cpassword = true;
		}

		if(!$error_password && !$error_cpassword){
			//db
			
		}

	}

	if(isset($_SESSION['user'])){

		header($_SERVER["SERVER_PROTOCOL"]." 403 Forbiden");
		die;

	} elseif(!$validtoken || $error_token){

		header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");
		return;

	} else {

?>

	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="author" content="Kodinger">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<title>My Login Page &mdash; Bootstrap 4 Login Page Snippet</title>
		<!-- Css file -->
		<link rel="stylesheet" href="./assets/css/style.css" />
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/my-login.css">
		
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
	</head>
	<body class="my-login-page">
		
		<?php require("./include/header.php") ?>
		
		<section class="h-100" style="min-height: 63vh; display: flex; justify-content: center; align-items: center;">
			<div class="container h-100">
				<div class="row justify-content-md-center align-items-center h-100">
					<div class="card-wrapper">
						<div class="card fat">
							<div class="card-body">
								<h4 class="card-title">Reset Password</h4>
								<form method="POST" class="my-login-validation" novalidate="">
									<div class="form-group">
										<label for="new-password">New Password</label>
										<input id="new-password" type="password" class="form-control" name="password" required autofocus data-eye>
										<div class="invalid-feedback">
											Password is required
										</div>
										
									</div>
									<div class="form-group">
										<label for="new-password">Confirm Password Password</label>
										<input id="new-password" type="password" class="form-control" name="password" required autofocus data-eye>
										<div class="invalid-feedback">
											Password is required
										</div>
										<div class="form-text text-muted">
											Make sure your password is strong and easy to remember
										</div>
									</div>

									<div class="form-group m-0">
										<button type="submit" class="btn btn-primary btn-block">
											Reset Password
										</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<?php require ("./include/footer.php")?>

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<script src="js/my-login.js"></script>
		<!-- Scripts -->
		<?php require ("./include/scripts.php")?>
	</body>
	</html>

<?php

	}

?>