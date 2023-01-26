<?php

require_once('../../../../model/function.php');
$id = $_REQUEST['id'];
$londata = getlonById($id);
session_start();
	if(isset($_COOKIE['flag'])){
?>

<html>
<head>
	<title>Edit launch</title>
	<link rel="stylesheet" type="text/css" href="../../../view/css/style.css">
</head>

<body>
<!-- //////////////////// -->
<div class="container">
<center>
		<form action="updatelon.php" method="POST" class="login-email">

            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Edit launch</p>
			
			<div class="input-group">
			<input type="text" name="launch_deck_type" value="<?= $londata['launch_deck_type'] ?>">
				<div class="error" id="usernameErr"></div>
			</div>

			<div class="input-group">
			<input type="text" name="launch_ticket_price" value="<?= $londata['launch_ticket_price'] ?>">
				<div class="error" id="emailErr"></div>
			</div>

			<div class="input-group">
			<input type="text" name="launch_ticket_availability" value="<?= $londata['launch_ticket_availability'] ?>">
				<div class="error" id="emailErr"></div>
			</div>

			<div class="input-group">
				<input type="text" name="launch_available_seats" value="<?= $londata['launch_available_seats'] ?>">
				<div class="error" id="passwordErr"></div>
			</div>

			<div class="input-group">
				<input type="text" name="launch_departure_time" value="<?= $londata['launch_departure_time'] ?>">
				<div class="error" id="passwordErr"></div>
			</div>

			<div class="input-group">
				<input type="text" name="status" value="<?= $londata['status'] ?>">
				<div class="error" id="passwordErr"></div>
			</div>
            
			<div class="input-group">
				<input type="hidden" name="launch_ticket_id" value="<?= $londata['launch_ticket_id'] ?>">
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