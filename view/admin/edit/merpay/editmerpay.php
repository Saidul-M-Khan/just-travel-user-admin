<?php

require_once('../../../../model/function.php');
$id = $_REQUEST['id'];
$merpaydata = getmerpayById($id);
session_start();
	if(isset($_COOKIE['flag'])){
?>

<html>
<head>
	<title>Edit mer</title>
	<link rel="stylesheet" type="text/css" href="../../../view/css/style.css">
</head>

<body>
<!-- //////////////////// -->
<div class="container">
<center>
		<form action="updatemerpay.php" method="POST" class="login-email">

            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Edit Merchant payment</p>
			
			<div class="input-group">
			<input type="text" name="mername" value="<?= $merpaydata['mername'] ?>">
				<div class="error" id="usernameErr"></div>
			</div>

			<div class="input-group">
			<input type="text" name="shopname" value="<?= $merpaydata['shopname'] ?>">
				<div class="error" id="emailErr"></div>
			</div>

			<div class="input-group">
			<input type="text" name="due" value="<?= $merpaydata['due'] ?>">
				<div class="error" id="emailErr"></div>
			</div>

			<div class="input-group">
				<input type="text" name="status" value="<?= $merpaydata['status'] ?>">
				<div class="error" id="passwordErr"></div>
			</div>
            
			<div class="input-group">
				<input type="hidden" name="merid" value="<?= $merpaydata['merid'] ?>">
				<input type="submit" class="btn" value="Update" name="submit">
			</div>
		</form>
	</div>
	</center>
<!-- //////////////////// -->
	
</body>
</html>


<?php
	}else{
		header('location: ../../control/logout.php');
	}
?>