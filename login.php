	<?php include('server.php') ?>
	<!DOCTYPE html>
	<html>
	<head>
	<title>Login Webx</title>
	<link rel="stylesheet" type="text/css" href="register_login.css">
	</head>
	<body>
		<div class="main_login">
	<div class="header">
		<h2>Login</h2>
		<p>Welcome Back!</p>
	</div>
		
	<form method="post" action="login.php">
		<?php include('errors.php'); ?>

		<div class="input-group">
			<input type="text" name="username" placeholder="Username">
		</div>

		<div class="input-group">
			<input type="password" name="password" placeholder="Password">
		</div>

		<div class="input-group">
			<button type="submit" class="btn_login" name="login_user">Login</button>
		</div>

		<div class="member">
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
		</div>

		<div class="google_login">
                <img src="Images/google.png" alt="google">
                <p>Continue with Google</p>
            </div>
	</form>
	</div>
	</body>
	</html>