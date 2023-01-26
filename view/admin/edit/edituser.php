<?php

require_once('../../../model/function.php');
$id = $_REQUEST['id'];
$userdata = getUserById($id);
session_start();
if (isset($_COOKIE['flag'])) {
?>

	<!DOCTYPE html>
	<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="../../view/css/style.css">
		<script src="../../view/js/edit.js"></script>
		<title> edit user</title>
	</head>

	<body>
		<center>
			<div class="container">
				<form name="Form" onsubmit="return validateForm()" action="updateuser.php" method="POST" class="login-email">
					<p class="login-text" style="font-size: 2rem; font-weight: 800;">Edit User</p>
					<div class="input-group">
						<input type="text" name="username" id="username" value="<?= $userdata['username'] ?>">
						<div class="error" id="usernameErr"></div>
					</div>
					<div class="input-group">
						<input type="email" name="email" id="email" value="<?= $userdata['email'] ?>">
						<div class="error" id="emailErr"></div>
					</div>
					<div class="input-group">
						<input type="password" name="password" maxlength="8" id="password" value="<?= $userdata['password'] ?>">
						<div class="error" id="passwordErr"></div>
					</div>

					<div class="input-group">
						<input type="hidden" name="id" value="<?= $userdata['id'] ?>">
						<input type="submit" class="btn" value="Update" name="submit">
					</div>
				</form>
			</div>
		</center>
	</body>

	</html>


<?php
} else {
	header('location: ../../control/logout.php');
}
?>