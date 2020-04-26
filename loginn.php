<?php  include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="logins.css">
</head>
<body>
	<div class="header">
		<h2>Login</h2>
	</div>

	<form method="post" action="login.php">
		
		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<a href="coba.html" button type="submit" class="btn" name="login_user">Login</a>
		</div>
		<div class="input-group">
		<p>
			Don't Have An Account?<a href="register.php">Sign In</a>
		</p>
	</div>
	</form>

</body>
</html>