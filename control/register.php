<?php

include '../model/db.php';

error_reporting(0);
session_start();

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];
	$role = $_POST['role'];
	$fname = $_POST['fname'];

	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($connection, $sql);

		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (username, email, password, role,fname) VALUES ('$username', '$email', '$password','$role','$fname')";
			$result = mysqli_query($connection, $sql);
			if ($result) {
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
				$_POST['role'] = "";
				$_POST['fname'] = "";
				header("Location: login.php");
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
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
	<!-- <link rel="stylesheet" href="../view/css/reg.css"> -->
	<script src="../view/js/form.js"></script>
	<title>Register Form - Pure Coding</title>
</head>

<body>
	<div class="container">
		<form name="Form" onsubmit="return validateForm()" action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
			<div class="input-group">
				<input type="text" placeholder="Full Name" name="fname" id="fname" value="<?php echo $fname; ?>">
				<div class="error" id="fnameErr"></div>
			</div>
			<div class="input-group">
				<input type="text" placeholder="Username" name="username" id="username" value="<?php echo $username; ?>">
				<div class="error" id="usernameErr"></div>
			</div>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" id="email" value="<?php echo $email; ?>">
				<div class="error" id="emailErr"></div>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" maxlength="8" id="password" value="<?php echo $_POST['password']; ?>">
				<div class="error" id="passwordErr"></div>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Confirm Password" name="cpassword" maxlength="8" id="cpassword" value="<?php echo $_POST['cpassword']; ?>">
				<div class="error" id="cpasswordErr"></div>
			</div>

			<div>
				<select class="input-group" name="location" id="location">
					<option>Location</option>
					<option>Dhaka</option>
					<option>CTG</option>
					<option>Barishal</option>
				</select>
				<div class="error" id="locationErr"></div>
			</div>

			<div class="" id="role">
				<!-- <label><input type="radio" name="role" value="admin"> Admin</label> -->
				<label><input type="radio" name="role" value="user"> User</label>
				<label><input type="radio" name="role" value="merchant"> Merchant</label>
				<div class="error" id="roleErr"></div>
				<br>
			</div>


			<div class="input-group">
				<input type="submit" class="btn" value="Register" name="submit">
			</div>
			<p class="login-register-text">Have an account? <a href="login.php">Login Here</a>.</p>
		</form>
	</div>
</body>

</html>