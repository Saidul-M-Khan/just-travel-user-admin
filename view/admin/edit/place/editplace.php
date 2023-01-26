<?php

require_once('../../../../model/function.php');
$id = $_REQUEST['id'];
$placedata = getPlaceById($id);
session_start();
	if(isset($_COOKIE['flag'])){
?>

<html>
<head>
	<title>Edit place</title>
	<link rel="stylesheet" type="text/css" href="../../../view/css/style.css">
</head>

<body>
<!-- //////////////////// -->
<div class="container">
<center>
		<form action="updateplace.php" method="POST" class="login-email">

            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Edit place</p>
			
			<div class="input-group">
			<input type="text" name="place_name" value="<?= $placedata['place_name'] ?>">
				<div class="error" id="usernameErr"></div>
			</div>

			<div class="input-group">
			<input type="text" name="place_description" value="<?= $placedata['place_description'] ?>">
				<div class="error" id="emailErr"></div>
			</div>

			<div class="input-group">
				<input type="text" name="place_image" value="<?= $placedata['place_image'] ?>">
				<div class="error" id="passwordErr"></div>
			</div>
            
			<div class="input-group">
				<input type="hidden" name="place_id" value="<?= $placedata['place_id'] ?>">
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