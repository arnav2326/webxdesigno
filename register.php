<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Sign Up Webx</title>
	<link rel="stylesheet" type="text/css" href="register_login.css">
	</head>
	<body>
	<div class="main">
	<div class="header">
		<h2>REGISTER</h2>
		<p>Thanks for Choosing Us!</p>
	</div>
		
	<form method="post" action="register.php">
		<?php include('errors.php'); ?>

		<div class="input-group">
		<input type="text" name="username" value="<?php echo $username; ?>" placeholder="Username">
		</div>

		<div class="input-group">
		<input type="email" name="email" value="<?php echo $email; ?> " placeholder="Email">
		</div>

		<div class="input-group">
		<input type="password" name="password_1" placeholder="Password">
		</div>

		<div class="input-group">
		<input type="password" name="password_2" placeholder="Retype Password">
		</div>

		<div class="input-group">
		<button type="submit" class="btn" name="reg_user">Sign Up</button>
		</div>
		<div class="member">
		<p>
			Already a member? <a href="login.php">Sign in</a>
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