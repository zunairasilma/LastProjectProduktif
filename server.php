<?php  
session_start();

$email    = "";
$username = "";
$errors   = array();
$_SESSION['success'] = "";

$db = mysqli_connect("localhost", "root", "", "covid");

if(isset($_POST['sign_user'])){
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
	$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

	if(empty($email)){ array_push($errors, "Email is required");}
	if(empty($username)){ array_push($errors, "Username is required");}
	if(empty($password_1)){ array_push($errors, "Password is required");}
	if ($password_1 != $password_2) {
		array_push($errors, "The two password don't match");
	}
	if (count($errors)==0) {
		$password = md5($password_1);
		$query = "INSERT INTO user (email, username, password) VALUES ('$email', '$username', '$password')";
		mysqli_query($db, $query);

		$_SESSION['username'] = $username;
		$_SESSION['success'] = "You are now logged in";
		header('location: after.php');
	}
}

	if(isset($_POST['login_user'])){
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);
	
		if (empty($username)) { array_push($errors, "Username is required");
		if (empty($password)) { array_push($errors, "Password is required");
		}
		if (count($errors)==0) {
		$password = md5($password);
		$query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
		$results = mysqli_query($db, $query);

		if (mysqli_num_rows($results) == 1) {
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: coba.html');
		}else{
			array_push($errors, "Wrong username/password combination");
		}
		}
	}
}
?>