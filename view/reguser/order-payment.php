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
            <form action="./order-successful.php" method="POST">
                <!-- Ticket Order -->
                <input type="hidden" name="id" value="<?php echo $_POST['id'] ?>">
                <input type="hidden" name="journey_by" value="<?php echo $_POST['journey_by'] ?>">
                <input type="hidden" name="transport_name" value="<?php echo $_POST['transport_name'] ?>">
                <input type="hidden" name="ticket_type" value="<?php echo $_POST['ticket_type'] ?>">
                <input type="hidden" name="journey_date" value="<?php echo $_POST['journey_date'] ?>">
                <input type="hidden" name="start_location" value="<?php echo $_POST['start_location'] ?>">
                <input type="hidden" name="end_location" value="<?php echo $_POST['end_location'] ?>">
                <input type="hidden" name="arrival_time" value="<?php echo $_POST['arrival_time'] ?>">
                <input type="hidden" name="departure_time" value="<?php echo $_POST['departure_time'] ?>">
                <input type="hidden" name="price" value="<?php echo $_POST['price'] ?>">
                <input type="hidden" name="payment_method" value="<?php echo $_POST['payment_method'] ?>">
                <input type="hidden" name="status" value="<?php echo $_POST['status'] ?>">
                <!-- <input type="hidden" name="id" value="<?php //echo $_POST['id'] 
                                                            ?>"> -->

                <div class="form-container">
                    <div class="body-text">
                        <small id="error" style="color: Red; display: none">* Input digits (0 - 9)</small>
                        <p id="emailOutput"></p>
                        <p id="nameOutput"></p>
                    </div>
                    <div class="personal-information">
                        <h1>Payment Information</h1>
                    </div>

                    <strong>ORDER ID: </strong><input type="text" name="orderID" id="orderID" value="<?php echo "O-" . strval(rand(10, 1000)) ?>">
                    <input id="cardName" type="text" name="name-on-card" autocomplete="on" maxlength="40" placeholder="Name on Card" onkeyup="validateName(document.getElementById('cardName').value)" />
                    <input id="cardNumber" type="text" name="number" maxlength="16" placeholder="Card Number" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;" />
                    <input id="cardExpiry" type="text" name="expiry" maxlength="5" placeholder="MM / YY" />
                    <input id="cardCvv" type="text" name="cvc" placeholder="CCV" maxlength="3" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;" />
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