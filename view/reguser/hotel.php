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
        <link rel="stylesheet" href="./styles/header.css">
        <link rel="stylesheet" href="./styles/banner.css">
        <link rel="stylesheet" href="./styles/footer.css">
        <link rel="stylesheet" href="./styles/hotel.css">
        <link rel="stylesheet" href="./styles/text-animation.css">
        <title>Hotel</title>
    </head>

    <body>

        <header>
            <?php include("./header.php") ?>

            <div class="banner wrapper">
                <div class="container">
                    <h1 class="typing-effect">Most Reliable Hotel Service Solution</h1>
                    <h2 class="">No. 1 online Ticketing Network</h2>
                </div>
            </div>
        </header>


        <main>
            <center>
                <h1>HOTELS</h1>
            </center>


            <?php
            require("../../model/db.php");

            $query = "SELECT * FROM hotel";
            $query_run = mysqli_query($connection, $query);
            $check_hotel = mysqli_num_rows($query_run) > 0;

            if ($check_hotel) {
                while ($row = mysqli_fetch_assoc($query_run)) {
            ?>
                    <form action="./booking-payment.php" method="POST">
                        <div class="cardContainer">
                            <div class="product-details">
                                <input type="hidden" name="booking_for" value="hotel">
                                <input type="hidden" name="booking_payment_method" value="card">
                                <input type="hidden" name="booking_status" value="pending">

                                <input type="hidden" name="start_date" value="Null">
                                <input type="hidden" name="end_date" value="Null">

                                <h1>
                                    <?php echo $row['hotel_name']; ?>
                                    <input type="hidden" name="name" value="<?php echo $row['hotel_name']; ?>">
                                </h1>

                                <span class="hint-star star">
                                    <i class="fa fa-star" aria-hidden="true" style="color:orange"></i>
                                    <i class="fa fa-star" aria-hidden="true" style="color:orange"></i>
                                    <i class="fa fa-star" aria-hidden="true" style="color:orange"></i>
                                    <i class="fa fa-star" aria-hidden="true" style="color:orange"></i>
                                    <i class="fa fa-star" aria-hidden="true" style="color:orange"></i>
                                </span>

                                <p style="margin-top: 20px;" class="information"><i class="fas fa-map-marked-alt"></i><strong>&nbsp;&nbsp;&nbsp;Location:
                                    </strong>
                                    <?php echo $row['hotel_location']; ?>
                                    <input type="hidden" name="location" value="<?php echo $row['hotel_location']; ?>">
                                </p>

                                <p style="margin-top: 15px;" class="information"><i class="fas fa-map-marked-alt"></i><strong>&nbsp;&nbsp;&nbsp;Regular Booking:
                                    </strong>
                                    <del><span style="color:red">৳<?php echo $row['regular_booking_price']; ?></span></del>
                                </p>
                                <br>


                                <div class="control">
                                    <button type="submit" class="btn" role="button">
                                        <span class="price text" style="color:azure">৳<?php echo $row['discounted_booking_price']; ?></span>
                                        <input type="hidden" name="booking_price" value="<?php echo $row['discounted_booking_price']; ?>">
                                        <span class="shopping-cart"><i class="fa fa-shopping-cart" aria-hidden="true" style="color:azure"></i></span>
                                        <span class="buy text" style="color:azure">Book Now</span>
                                    </button>
                                </div>

                            </div>


                            <div class="product-image">

                                <img src="<?php echo $row['hotel_image']; ?>" alt="">

                                <div class="info">
                                    <h2 class="text" style="color:azure">Description</h2>
                                    <ul style="margin-left: 15px;">
                                        <li><strong style="color:azure" class="text"><i style="color:azure" class="fas fa-map-marked-alt"></i>&nbsp;&nbsp;&nbsp;Status : 4 Star</strong></li>
                                        <li><strong style="color:azure" class="text"><i style="color:azure" class="fas fa-coffee"></i>&nbsp;&nbsp;&nbsp;Free Breakfast</strong></li>
                                        <li><strong style="color:azure" class="text"><i style="color:azure" class="fas fa-wifi"></i>&nbsp;&nbsp;&nbsp;Free Wifi</strong></li>
                                        <li><strong style="color:azure" class="text"><i style="color:azure" class="fas fa-utensils"></i>&nbsp;&nbsp;&nbsp;Restaurant</strong></li>
                                        <li><strong style="color:azure" class="text"><i style="color:azure" class="fas fa-dumbbell"></i>&nbsp;&nbsp;&nbsp;Gym</strong></li>
                                        <li><strong style="color:azure" class="text"><i style="color:azure" class="fas fa-umbrella-beach"></i>&nbsp;&nbsp;&nbsp;Beach access</strong></li>
                                    </ul>
                                </div>

                            </div>

                        </div>
                    </form>


            <?php


                }
            } else {
                echo "No hotel found";
            }

            ?>

        </main>

        <footer>
            <?php
            include("./footer.php");
            ?>
        </footer>

        <script src="./js/header.js"></script>
    </body>

    </html>
<?php
} else {
    header('location: ../../control/login.php');
}
?>