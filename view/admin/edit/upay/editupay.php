<?php

require_once('../../../../model/function.php');
$id = $_REQUEST['id'];
$upaydata = getupayById($id);
?>

<html>

<head>
	<title>Edit User payment </title>
	<link rel="stylesheet" type="text/css" href="../../../view/css/style.css">
</head>

<body>
	<!-- //////////////////// -->
	<div class="container">
		<center>
			<form action="updateupay.php" method="POST" class="login-email">

				<p class="login-text" style="font-size: 2rem; font-weight: 800;">Edit upay</p>

				<div class="input-group">
					<input type="text" name="username" value="<?= $upaydata['username'] ?>">
					<div class="error" id="usernameErr"></div>
				</div>

				<div class="input-group">
					<input type="text" name="id" value="<?= $upaydata['id'] ?>">
					<div class="error" id="emailErr"></div>
				</div>

				<div class="input-group">
					<input type="text" name="paym" value="<?= $upaydata['payment_method'] ?>">
					<div class="error" id="passwordErr"></div>
				</div>

				<div class="input-group">
					<input type="text" name="amount" value="<?= $upaydata['price'] ?>">
					<div class="error" id="passwordErr"></div>
				</div>

				<div class="input-group">
					<input type="text" name="status" value="<?= $upaydata['status'] ?>">
					<div class="error" id="passwordErr"></div>
				</div>

				<div class="input-group">
					<input type="hidden" name="id" value="<?= $upaydata['id'] ?>">
					<input type="submit" class="btn" value="Update" name="submit">
				</div>
			</form>
	</div>
	</center>
	<!-- //////////////////// -->

</body>

</html>