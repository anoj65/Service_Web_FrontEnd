<?php

	require('./include/connection.php');

	$error_email = false;
	$error_email2 = false;

	$input_email = "";

	$output_success = false;

	function validateinput_semi($input){
		$variable = htmlspecialchars(trim(stripslashes($input)));
		return($variable);
	}

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		$input_email = validateinput_semi($_POST['email']);

		if(!filter_var($input_email, FILTER_VALIDATE_EMAIL)){
			$error_email = true;
		}

		if(!$error_email){
			//db 1 check email

			$token = bin2hex(openssl_random_pseudo_bytes(32));
			
			//db 2 save reset token

			$output_success = true;
		}

	}

	if(isset($_SESSION['user'])){

		header($_SERVER["SERVER_PROTOCOL"]." 403 Forbiden");
		die;

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
								<h4 class="card-title">Forgot Password</h4>
								<form method="POST" class="my-login-validation" novalidate="">
									<div class="form-group">
										<label for="email">E-Mail Address</label>
										<input id="email" type="email" class="form-control" name="email"  value="<?php echo($input_email); ?>" required autofocus>
										<div class="invalid-feedback">
											Email is invalid
										</div>
										
										<?php
											if($error_email){
												echo('<div style="color: red;">Email is invalid.</div>');
											} elseif($error_email2){
												echo('<div style="color: red;">Email not found.</div>');
											} elseif($output_success){
												echo('<div style="color: green; margin-top: 10px;">We have sent you a password reset email. Please check your inbox.</div>');
											}
										?>
										<div class="form-text text-muted">
											By clicking "Reset Password" we will send a password reset link
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