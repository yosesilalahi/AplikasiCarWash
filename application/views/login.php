
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Admin</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="log-in/images/icons/favicon.ico"/>
<!--===============================================================================================-->
<link rel="stylesheet" href="<?=base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" href="<?=base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" href="<?=base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
<!--===============================================================================================-->	
<link rel="stylesheet" href="<?=base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" href="<?=base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="http://localhost/ci/log-in/css/util.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/ci/log-in/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt	>
					<img src="http://localhost/ci/log-in/images/mobil.png" alt="IMG" >
				</div>
				<form action = "<?=site_url('auth/process')?>" method="post">
					<span class="login100-form-title">
						Log in admin
					</span>
					<div class="wrap-input100 validate-input"> 
						<input class="input100" type="text" name="username" placeholder="Username" required autofocus>
						 <span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					 <div class="wrap-input100 validate-input"> 
						<input class="input100" type="password" name="password" placeholder="Password" required>
						 <span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i> 
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="login">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<a class="txt2" href="#">
							ForgotUsername / Password?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="http://localhost/ci/registrasi">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
						<br>
						<a class="txt2" href="http://localhost/ci/home">
							help
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>



					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="http://localhost/ci/log-in/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="http://localhost/ci/log-in/vendor/bootstrap/js/popper.js"></script>
	<script src="http://localhost/ci/log-in/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="http://localhost/ci/log-in/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="http://localhost/ci/log-in/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>