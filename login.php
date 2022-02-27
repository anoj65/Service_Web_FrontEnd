<?php

	session_start();
	require_once("./include/connection.php");

	$error_unexpected = false;
	$error_email = false;
	$error_password = false;
	$error_invalidCredentials = false;

	$input_email = "";
	$input_password = "";

	function validateinput_semi($input){
		$variable = htmlspecialchars(trim(stripslashes($input)));
		return($variable);
	}

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		$input_email = validateinput_semi($_POST['email']);
		$input_password = validateinput_semi($_POST['password']);

		if(!filter_var($input_email, FILTER_VALIDATE_EMAIL)){
			$error_email = true;
		}
		if(strlen($input_password) < 8){
			$error_password = true;
		}

		if(!$error_email && !$error_password){

			$conn = mysqli_connect($db[0], $db[1], $db[2], $db[3]);
			$input_email = $conn -> real_escape_string($input_email);

			$query = "SELECT `id`, `name`, `email`, `password` FROM `users` WHERE `email` = '$input_email';";

			$result = mysqli_query ($conn, $query);

			if ($row = mysqli_fetch_row($result)){
				if (password_verify($input_password, $row[3])) {
					$_SESSION['user'] = $input_email;
					header("Location: /profile.php");
					echo('<script>window.location.href="/profile.php"</script>');
					mysqli_close($conn);
					die();
				} else {
					$error_invalidCredentials = true;
				}
			} else {
				$error_invalidCredentials = true;
			}

			mysqli_close($conn);

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
			<title>My Login Page</title>
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
					<div class="row justify-content-md-center h-100">
						<div class="card-wrapper mx-auto">
							<div class="card fat">
								<div class="card-body">
									<h4 class="card-title">Login</h4>
									<form method="POST" class="my-login-validation" novalidate="">
										<div class="form-group">
											<label for="email">E-Mail Address</label>
											<input id="email" type="email" class="form-control" name="email" required autofocus value="<?php echo($input_email); ?>">
											<?php
												if($error_email){
													echo('<div style="color: red;">Email is invalid </div>');
												}
											?>
										</div>

										<div class="form-group">
											<label for="password">Password &nbsp;
												<a href="/forgot-password.php" class="float-right">
													Forgot Password?
												</a>
											</label>
											<input id="password" type="password" class="form-control" name="password" required data-eye value="<?php echo($input_password); ?>">
											<?php
												if($error_password){
													echo('<div style="color: red;">Password must be at least 8 characters long.</div>');
												}
											?>
										</div>

										<div class="form-group">
											<div class="custom-checkbox custom-control">
												<input type="checkbox" name="remember" id="remember" class="custom-control-input">
												<label for="remember" class="custom-control-label">Remember Me</label>
											</div>
										</div>

										<?php
											if($error_invalidCredentials){
												echo('<div style="color: red; margin: 20px auto;">Invalid Credentials</div>');
											} elseif($error_unexpected){
												echo('<div style="color: red; margin: 20px auto;">Unexpedted error occoured</div>');
											}
										?>

										<div class="form-group m-0">
											<button type="submit" class="btn btn-primary btn-block">
												Login
											</button>
										</div>
										<div class="mt-4 text-center">
											Don't have an account? <a href="/signup.php">Create One</a>
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
