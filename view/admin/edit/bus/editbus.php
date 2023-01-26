<?php

require_once('../../../../model/function.php');
$id = $_REQUEST['id'];
$busdata = getBusById($id);
session_start();
	if(isset($_COOKIE['flag'])){
?>

<html>
<head>
	<title>Edit bus</title>
	<link rel="stylesheet" type="text/css" href="../../../view/css/style.css">
</head>

<body>
<!-- //////////////////// -->
<div class="container">
<center>
		<form action="updatebus.php" method="POST" class="login-email">

            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Edit bus</p>
			
			<div class="input-group">
			<input type="text" name="bus_operators_name" value="<?= $busdata['bus_operators_name'] ?>">
				<div class="error" id="usernameErr"></div>
			</div>

			<div class="input-group">
			<input type="text" name="bus_ticket_type" value="<?= $busdata['bus_ticket_type'] ?>">
				<div class="error" id="emailErr"></div>
			</div>

			<div class="input-group">
				<input type="text" name="bus_ticket_price" value="<?= $busdata['bus_ticket_price'] ?>">
				<div class="error" id="passwordErr"></div>
			</div>

			<div class="input-group">
				<input type="text" name="bus_ticket_availability" value="<?= $busdata['bus_ticket_availability'] ?>">
				<div class="error" id="passwordErr"></div>
			</div>

			<div class="input-group">
			<input type="text" name="bus_available_seat" value="<?= $busdata['bus_available_seat'] ?>">	
				<div class="error" id="passwordErr"></div>
			</div>

			<div class="input-group">
				<input type="text" name="bus_route" value="<?= $busdata['bus_route'] ?>">
				<div class="error" id="passwordErr"></div>
			</div>

			<div class="input-group">
				<input type="text" name="bus_start_location" value="<?= $busdata['bus_start_location'] ?>">
				<div class="error" id="passwordErr"></div>
			</div>

			<div class="input-group">
				<input type="text" name="bus_end_location" value="<?= $busdata['bus_end_location'] ?>">
				<div class="error" id="passwordErr"></div>
			</div>

			<div class="input-group">
				<input type="text" name="bus_journey_date" value="<?= $busdata['bus_journey_date'] ?>">
				<div class="error" id="passwordErr"></div>
			</div>

			<div class="input-group">
				<input type="text" name="bus_arrival_time" value="<?= $busdata['bus_arrival_time'] ?>">
				<div class="error" id="passwordErr"></div>
			</div>

			<div class="input-group">
				<input type="text" name="bus_departure_time" value="<?= $busdata['bus_departure_time'] ?>">
				<div class="error" id="passwordErr"></div>
			</div>

			<div class="input-group">
				<input type="text" name="image" value="<?= $busdata['image'] ?>">
				<div class="error" id="passwordErr"></div>
			</div>

			<div class="input-group">
				<input type="text" name="status" value="<?= $busdata['status'] ?>">
				<div class="error" id="passwordErr"></div>
			</div>
            
			<div class="input-group">
				<input type="hidden" name="bus_ticket_id" value="<?= $busdata['bus_ticket_id'] ?>">
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