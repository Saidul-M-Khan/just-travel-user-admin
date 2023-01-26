<?php

require_once('../../../../model/function.php');
$id = $_REQUEST['id'];
$eventdata = getEventById($id);
session_start();
	if(isset($_COOKIE['flag'])){
?>

<html>
<head>
	<title>Edit Event</title>
	<link rel="stylesheet" type="text/css" href="../../../view/css/style.css">
</head>

<body>
<!-- //////////////////// -->
<div class="container">
<center>
		<form action="updateevent.php" method="POST" class="login-email">

            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Edit event</p>
			
			<div class="input-group">
			<input type="text" name="event_name" value="<?= $eventdata['event_name'] ?>">
				<div class="error" id="usernameErr"></div>
			</div>

			<div class="input-group">
			<input type="text" name="event_location" value="<?= $eventdata['event_location'] ?>">
				<div class="error" id="emailErr"></div>
			</div>

			<div class="input-group">
				<input type="text" name="event_ticket_price" value="<?= $eventdata['event_ticket_price'] ?>">
				<div class="error" id="passwordErr"></div>
			</div>

			<div class="input-group">
				<input type="text" name="event_details" value="<?= $eventdata['event_details'] ?>">
				<div class="error" id="passwordErr"></div>
			</div>

			<div class="input-group">
			<input type="text" name="event_start_date" value="<?= $eventdata['event_start_date'] ?>">	
				<div class="error" id="passwordErr"></div>
			</div>

			<div class="input-group">
				<input type="text" name="event_end_date" value="<?= $eventdata['event_end_date'] ?>">
				<div class="error" id="passwordErr"></div>
			</div>

			<div class="input-group">
				<input type="text" name="event_image" value="<?= $eventdata['event_image'] ?>">
				<div class="error" id="passwordErr"></div>
			</div>
            
			<div class="input-group">
				<input type="hidden" name="event_id" value="<?= $eventdata['event_id'] ?>">
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