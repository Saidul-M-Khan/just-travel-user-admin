<?php

include '../model/db.php';

session_start();
error_reporting(0);

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM users WHERE username='$username' AND password='$password' ";
	$result = mysqli_query($connection, $sql);

	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];

		if ($row['role'] == "admin") {
			header("Location: ../view/admin/adminhome.php");
		} else if ($row['role'] == "user") {
			header("Location: ../view/reguser/bus.php");
		} else if ($row['role'] == "merchant") {
			header("Location: ../view/merchant/index.html");
		}
		setcookie('flag', 'true', time() + 3600, '/');
	} else {
		echo "<script>alert('Woops! User Name or Password is Wrong.')</script>";
	}
}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../view/css/style.css">
	<script src="../view/js/login.js"></script>

	<title>Login </title>
</head>

<body>
	<div class="container">
		<form name="Form" onsubmit="return validateForm()" action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<!-- User name starts-->

			<div class="input-group">
				<input type="text" placeholder="User Name" name="username" id="username" value="<?php echo $username; ?>"> <br>
				<div class="error" id="usernameErr"></div>
			</div>

			<div class="input-group">
				<input type="password" placeholder="Password" name="password" maxlength="8" id="password" value="<?php echo $_POST['password']; ?>">
				<div class="error" id="passwordErr"></div>
			</div>

			<div class="input-group">
				<input type="submit" value="Login" name="submit" class="btn">
			</div>
			<p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p>
		</form>
	</div>
</body>

</html>