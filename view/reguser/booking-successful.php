<?php
session_start();

require_once('../../model/db.php');


if (isset($_COOKIE['flag'])) {
    $con = getConnection();
    $sql = "insert into booking values('', '{$_POST['bookingID']}', '{$_SESSION['username']}', '{$_POST['booking_for']}', '{$_POST['name']}', '{$_POST['location']}', '{$_POST['booking_price']}', '{$_POST['booking_payment_method']}', '{$_POST['booking_status']}', '{$_POST['start_date']}', '{$_POST['end_date']}')";

    mysqli_query($con, $sql);

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
        <title>Thank You</title>
        <style>
            * {
                font-family: 'Poppins', sans-serif;
            }
        </style>
    </head>

    <body>
        <img src="./images/thanks.gif" alt="" style="display: block; margin-left: auto; margin-right: auto; margin-top: 12%;">
        <br>
        <center>
            <h1>Please Stay With Just Travel</h1>
            <fieldset style="width:10%">
                <a href="./order-status.php" style="text-decoration:none; color:black"><i class="fas fa-arrow-circle-left"></i>&nbsp;Back</a>
            </fieldset>
        </center>

    </body>

    </html>

<?php
} else {
    header('location: ../../control/login.php');
}
?>