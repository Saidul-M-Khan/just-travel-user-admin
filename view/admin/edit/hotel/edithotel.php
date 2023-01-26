<?php

require_once('../../../../model/function.php');
$id = $_REQUEST['id'];
$hoteldata = getHotelById($id);
session_start();
	if(isset($_COOKIE['flag'])){
?>

<html>
<head>
	<title>Edit Hotel</title>
	<link rel="stylesheet" type="text/css" href="../../../view/css/style.css">
</head>

<body>
<!-- //////////////////// -->
<div class="container">
<center>
		<form action="updatehotel.php" method="POST" class="login-email">

            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Edit HOtel</p>
			
			<div class="input-group">
			<input type="text" name="hotel_name" value="<?= $hoteldata['hotel_name'] ?>">
				<div class="error" id="usernameErr"></div>
			</div>

			<div class="input-group">
			<input type="text" name="hotel_location" value="<?= $hoteldata['hotel_location'] ?>">
				<div class="error" id="emailErr"></div>
			</div>

			<div class="input-group">
				<input type="text" name="regular_booking_price" value="<?= $hoteldata['regular_booking_price'] ?>">
				<div class="error" id="passwordErr"></div>
			</div>

			<div class="input-group">
				<input type="text" name="discounted_booking_price" value="<?= $hoteldata['discounted_booking_price'] ?>">
				<div class="error" id="passwordErr"></div>
			</div>

			<div class="input-group">
			<input type="text" name="booking_date" value="<?= $hoteldata['booking_date'] ?>">	
				<div class="error" id="passwordErr"></div>
			</div>

			<div class="input-group">
				<input type="text" name="hotel_services" value="<?= $hoteldata['hotel_services'] ?>">
				<div class="error" id="passwordErr"></div>
			</div>

			<div class="input-group">
				<input type="text" name="hotel_image" value="<?= $hoteldata['hotel_image'] ?>">
				<div class="error" id="passwordErr"></div>
			</div>
            
			<div class="input-group">
				<input type="hidden" name="hotel_id" value="<?= $hoteldata['hotel_id'] ?>">
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