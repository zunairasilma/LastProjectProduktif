<?php 
session_start();

if (!isset($_SESSION['username'])) {
	$_SESSION['msg'] = "Ypu must login first";
	header('location: login.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['username']);
	header("location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<link rel="stylesheet" type="text/css" href="logins.css">
</head>
<body>
	<div class="header">
		<h2>Hey!! Welcome..</h2>
	</div>
	<div class="content">
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success">
				<h3><?php  
					echo $_SESSION['success'];
					unset($_SESSION['success']);
				?></h3>
			</div>
		<?php endif ?>

		<?php if (isset($_SESSION['username'])) : ?>
			<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
			<div class="input-group">
			<p><a href="loginn.php" style="color: #f7f1e3;">Yuk Login</a></p>
		</div>
		<?php endif ?>
	</div>
</body>
</html>