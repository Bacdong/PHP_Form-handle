<?php
	// Import file connection.php
	require_once('./public/connection.php');
	// Import file connection.php - end
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Sign in | Nguyễn Hoàng Anh Hùng</title>

		<!-- Import file head.php -->
		<?php require_once('./public/head.php'); ?>
		<!-- /Import file head.php -->

	</head>

	<body>
		<?php if(isset($_COOKIE['msg'])) { ?>
			<div class="alert alert-info" role="alert">
				<?php echo $_COOKIE['msg']; ?>
			</div>
		<?php }?>
		
		<div class="limiter">
			<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
				<div class="wrap-login100 p-t-30 p-b-50">
					<span class="login100-form-title p-b-41">
						Sign in
					</span>
					<form action="login_action.php" method="POST" class="login100-form validate-form p-b-33 p-t-5">

						<div class="wrap-input100 validate-input" data-validate = "Enter your username">
							<input class="input100" type="text" name="username" placeholder="Username">
							<span class="focus-input100" data-placeholder="&#xe82a;"></span>
						</div>

						<div class="wrap-input100 validate-input" data-validate="Enter your password">
							<input class="input100" type="password" name="password" placeholder="Password">
							<span class="focus-input100" data-placeholder="&#xe80f;"></span>
						</div>

						<div class="container-login100-form-btn m-t-32">
							<button class="login100-form-btn">
								Sign in
							</button>
						</div>

						<div class="wrap-input100 validate-input">
							<a class="link" href="register.php">Register now!</a>
						</div>

					</form>
				</div>
			</div>
		</div>
		

		<div id="dropDownSelect1"></div>
		
		<!-- Import file js_import.php -->
		<?php require_once('./public/js_import.php'); ?>
		<!-- /Import file js_import.php -->
	</body>
</html>