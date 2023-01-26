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
        <link rel="stylesheet" href="./styles/text-animation.css">
        <link rel="stylesheet" href="./styles/event.css">
        <title>Events</title>

    </head>

    <body>

        <header>
            <?php include("./header.php") ?>

            <div class="banner wrapper">
                <div class="container">
                    <h1 class="typing-effect">Most Reliable Event Solution</h1>
                    <h2 class="">No. 1 online Ticketing Network</h2>
                </div>
            </div>
        </header>

        <main>
            <center>
                <h1>EVENTS</h1>
            </center>
            <div class="cards">
                <?php
                require("../../model/db.php");

                $query = "SELECT * FROM event_ticket";
                $query_run = mysqli_query($connection, $query);
                $check_event = mysqli_num_rows($query_run) > 0;

                if ($check_event) {
                    while ($row = mysqli_fetch_assoc($query_run)) {
                ?>
                        <form action="./booking-payment.php" method="POST">
                            <div class="card">
                                <input type="hidden" name="booking_for" value="event">
                                <input type="hidden" name="booking_payment_method" value="card">
                                <input type="hidden" name="booking_status" value="pending">

                                <img src="<?php echo $row['event_image']; ?>" alt="" style="width:100%">
                                <div class="card-container">
                                    <h1><?php echo $row['event_name']; ?></h1>
                                    <input type="hidden" name="name" value="<?php echo $row['event_name']; ?>">

                                    <div>
                                        <p><i class="far fa-calendar-alt fa-1x"></i>&nbsp;<?php echo $row['event_start_date']; ?> - <?php echo $row['event_end_date']; ?></p>
                                        <input type="hidden" name="start_date" value="<?php echo $row['event_start_date']; ?>">
                                        <input type="hidden" name="end_date" value="<?php echo $row['event_end_date']; ?>">
                                    </div>

                                    <div>
                                        <p><i class="fas fa-map-marker-alt" style="color:black;"></i>&nbsp;<?php echo $row['event_location']; ?></p>
                                        <input type="hidden" name="location" value="<?php echo $row['event_location']; ?>">
                                    </div>

                                    <div>
                                        <p><?php echo $row['event_details']; ?></p>
                                    </div>

                                    <div>
                                        <h2>Price: <span style="color:red;">৳<?php echo $row['event_ticket_price']; ?></span></h2>
                                        <input type="hidden" name="booking_price" value="<?php echo $row['event_ticket_price']; ?>">
                                    </div>

                                    <div style="margin: 25px 10px 25px 10px;">
                                        <input type="submit" class="event-ticket-buy-btn" role="button" value="Buy Now">
                                    </div>
                                </div>
                            </div>
                        </form>
                <?php


                    }
                } else {
                    echo "No event found";
                }

                ?>
            </div>

        </main>

        <footer>
            <?php
            include './footer.php';
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