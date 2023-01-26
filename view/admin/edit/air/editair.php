<?php

require_once('../../../../model/function.php');
$id = $_REQUEST['id'];
$airdata = getAirById($id);

session_start();
	if(isset($_COOKIE['flag'])){
?>

<html>
<head>
	<title>Edit air</title>
	<link rel="stylesheet" type="text/css" href="../../../view/css/style.css">
</head>

<body>
<!-- //////////////////// -->
<div class="container">
<center>
		<form action="updateair.php" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Edit Air Ticket </p>
			
			<div class="input-group">
			<input type="text" name="air_ticket_price" value="<?= $airdata['air_ticket_price'] ?>">
				<div class="error" id="usernameErr"></div>
			</div>

			<div class="input-group">
			<input type="text" name="plane_journey_date" value="<?= $airdata['plane_journey_date'] ?>">
				<div class="error" id="emailErr"></div>
			</div>

			<div class="input-group">
				<input type="text" name="plane_ticket_availability" value="<?= $airdata['plane_ticket_availability'] ?>">
				<div class="error" id="passwordErr"></div>
			</div>

			<div class="input-group">
				<input type="text" name="plane_available_seat" value="<?= $airdata['plane_available_seat'] ?>">
				<div class="error" id="passwordErr"></div>
			</div>

			<div class="input-group">
			<input type="text" name="flight_no" value="<?= $airdata['flight_no'] ?>">	
				<div class="error" id="passwordErr"></div>
			</div>

			<div class="input-group">
				<input type="text" name="status" value="<?= $airdata['status'] ?>">
				<div class="error" id="passwordErr"></div>
			</div>
            
			<div class="input-group">
				<input type="hidden" name="air_ticket_id" value="<?= $airdata['air_ticket_id'] ?>">
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
?>s