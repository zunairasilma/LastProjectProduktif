<?php  include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign In</title>
	<link rel="stylesheet" type="text/css" href="logins.css">
</head>
<body>
	<div class="header">
		<h2>Sign In</h2>
	</div>

<form method="post" action="register.php">

	<?php  include('errors.php'); ?>

	<div class="input-group">
		<label>Email</label>
		<input type="text" name="email" value="<?php echo $email;?>">
	</div>
	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username" value="<?php echo $username; ?>">
	</div>
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password_1">
	</div>
	<div class="input-group">
		<label>Confirm Password</label>
		<input type="password" name="password_2">
	</div>
	<div class="input-group">
		<button type="submit" class="btn" name="sign_user">Sign In</button>
	</div>
	<div class="input-group">
		Already Had Account? <a href="login.php">Login</a>
	</p>
	</div>
	</form>
</body>
</html>