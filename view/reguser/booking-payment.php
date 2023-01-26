<?php
session_start();
if (isset($_COOKIE['flag'])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="./favicon.png" type="image/x-icon">
        <link rel="stylesheet" href="./styles/payment.css">
        <link rel="stylesheet" href="./styles/header.css">
        <link rel="stylesheet" href="./styles/banner.css">
        <link rel="stylesheet" href="./styles/footer.css">
        <link rel="stylesheet" href="./styles/text-animation.css">
        <title>Payment</title>
    </head>

    <body>

        <header>
            <?php include './header.php'; ?>
        </header>

        <main>
            <form action="./booking-successful.php" method="POST">
                <!-- Event & Hotel Booking -->
                <input type="hidden" name="id" value="<?php echo $_POST['id'] ?>">
                <input type="hidden" name="booking_for" value="<?php echo $_POST['booking_for'] ?>">
                <input type="hidden" name="name" value="<?php echo $_POST['name'] ?>">
                <input type="hidden" name="location" value="<?php echo $_POST['location'] ?>">
                <input type="hidden" name="booking_price" value="<?php echo $_POST['booking_price'] ?>">
                <input type="hidden" name="booking_payment_method" value="<?php echo $_POST['booking_payment_method'] ?>">
                <input type="hidden" name="booking_status" value="<?php echo $_POST['booking_status'] ?>">
                <input type="hidden" name="start_date" value="<?php echo $_POST['start_date'] ?>">
                <input type="hidden" name="end_date" value="<?php echo $_POST['end_date'] ?>">



                <div class="form-container">
                    <div class="body-text">
                        <small id="error" style="color: Red; display: none">* Input digits (0 - 9)</small>
                        <p id="emailOutput"></p>
                        <p id="nameOutput"></p>
                    </div>
                    <div class="personal-information">
                        <h1>Payment Information</h1>
                    </div>

                    <strong>Booking ID: </strong><input type="text" name="bookingID" id="bookingID" value="<?php echo "B-" . strval(rand(10, 1000)) ?>">
                    <input id="cardName" type="text" name="name-on-card" autocomplete="on" maxlength="40" placeholder="Name on Card" onkeyup="validateName(document.getElementById('cardName').value)" />

                    <input id="cardNumber" type="text" name="number" maxlength="16" placeholder="Card Number" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;" />

                    <input id="cardExpiry" type="text" name="expiry" maxlength="5" placeholder="MM / YY" />
                    <input id="cardCvv" type="text" name="cvc" placeholder="CCV" maxlength="3" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;" />

                    <!-- <div class="card-wrapper"></div> -->

                    <input id="cardAddress" type="text" name="streetaddress" required="required" autocomplete="on" maxlength="45" placeholder="Street Address" />
                    <input id="cardCity" type="text" name="city" required="required" autocomplete="on" maxlength="20" placeholder="City" />
                    <input id="cardZip" type="text" name="zipcode" required="required" autocomplete="on" maxlength="5" placeholder="ZIP code" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;" />
                    <input id="cardEmail" type="email" name="email" required="required" autocomplete="on" maxlength="40" placeholder="Email" onchange="CheckEmail(document.getElementById('cardEmail').value)" />
                    <input id="payment-button" type="submit" value="Submit" onclick="validatePayment()" />
                </div>
            </form>

        </main>

        <footer>
            <?php
            include './footer.php';
            ?>
        </footer>

        <script src="./js/validate.js"></script>
        <script src="./js/header.js"></script>

    </body>

    </html>
<?php
} else {
    header('location: ../../control/login.php');
}
?>