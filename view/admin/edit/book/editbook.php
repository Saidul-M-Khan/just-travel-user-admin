<?php

require_once('../../../../model/function.php');
// $id = $_REQUEST['id'];
$id = isset($_GET['id']) ? $_GET['id'] : '';
$bookdata = getbookById($id);

session_start();
if (isset($_COOKIE['flag'])) {
?>

	<html>

	<head>
		<title>Edit booking</title>
		<link rel="stylesheet" type="text/css" href="../../../view/css/style.css">
	</head>

	<body>
		<!-- //////////////////// -->
		<div class="container">
			<center>
				<form action="updatebook.php" method="POST" class="login-email">

					<p class="login-text" style="font-size: 2rem; font-weight: 800;">Edit booking</p>

					<div class="input-group">
						<input type="text" name="username" value="<?= $bookdata['username'] ?>">
						<div class="error" id="usernameErr"></div>
					</div>

					<div class="input-group">
						<input type="text" name="booking_for" value="<?= $bookdata['booking_for'] ?>">
						<div class="error" id="emailErr"></div>
					</div>

					<div class="input-group">
						<input type="text" name="name" value="<?= $bookdata['name'] ?>">
						<div class="error" id="passwordErr"></div>
					</div>

					<div class="input-group">
						<input type="text" name="end_date" value="<?= $bookdata['end_date'] ?>">
						<div class="error" id="passwordErr"></div>
					</div>

					<div class="input-group">
						<input type="text" name="price" value="<?= $bookdata['price'] ?>">
						<div class="error" id="passwordErr"></div>
					</div>

					<div class="input-group">
						<input type="text" name="payment_method" value="<?= $bookdata['payment_method'] ?>">
						<div class="error" id="passwordErr"></div>
					</div>

					<div class="input-group">
						<input type="text" name="status" value="<?= $bookdata['status'] ?>">
						<div class="error" id="passwordErr"></div>
					</div>

					<div class="input-group">
						<input type="hidden" name="id" value="<?= $bookdata['id'] ?>">
						<input type="submit" class="btn" value="Update" name="submit">
					</div>
				</form>
		</div>
		</center>
		<!-- //////////////////// -->

	</body>

	</html>


<?php
} else {
	header('location: ../../control/logout.php');
}
?>