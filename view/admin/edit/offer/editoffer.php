<?php

require_once('../../../../model/function.php');
$id = $_REQUEST['id'];
$offerdata = getOfferById($id);
session_start();
	if(isset($_COOKIE['flag'])){
?>

<html>
<head>
	<title>Edit Offer</title>
	<link rel="stylesheet" type="text/css" href="../../../view/css/style.css">
</head>

<body>
<!-- //////////////////// -->
<div class="container">
<center>
		<form action="updateOffer.php" method="POST" class="login-email">

            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Edit Offer</p>
			
			<div class="input-group">
			<input type="text" name="offer_name" value="<?= $offerdata['offer_name'] ?>">
				<div class="error" id="usernameErr"></div>
			</div>

			<div class="input-group">
			<input type="text" name="offer_summary" value="<?= $offerdata['offer_summary'] ?>">
				<div class="error" id="emailErr"></div>
			</div>

			<div class="input-group">
				<input type="text" name="offer_details" value="<?= $offerdata['offer_details'] ?>">
				<div class="error" id="passwordErr"></div>
			</div>

			<div class="input-group">
				<input type="text" name="offer_rules" value="<?= $offerdata['offer_rules'] ?>">
				<div class="error" id="passwordErr"></div>
			</div>

			<div class="input-group">
				<input type="text" name="status" value="<?= $offerdata['status'] ?>">
				<div class="error" id="passwordErr"></div>
			</div>
            
			<div class="input-group">
				<input type="hidden" name="offer_id" value="<?= $offerdata['offer_id'] ?>">
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