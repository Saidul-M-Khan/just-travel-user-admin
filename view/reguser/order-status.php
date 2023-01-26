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
        <link rel="stylesheet" href="styles/global.css">
        <link rel="stylesheet" href="./styles/header.css">
        <link rel="stylesheet" href="./styles/banner.css">
        <link rel="stylesheet" href="./styles/footer.css">
        <link rel="stylesheet" href="./styles/text-animation.css">
        <title>Order Status</title>
        <style>
            * {
                font-family: 'Poppins', sans-serif;
            }

            .orders {
                display: grid;
                grid-template-columns: repeat(3, 1fr);
            }

            .order {
                border: 1px solid black;
                border-radius: 10px;
                padding: 25px;
                margin: 25px;
                width: 80%;
            }

            .row {
                display: flex;
            }
        </style>
    </head>

    <body>

        <header>
            <?php
            include './header.php';
            ?>

            <div class="banner wrapper">
                <div class="container">
                    <h1 class="typing-effect">See your orders</h1>
                    <h2 class="">No. 1 online Ticketing Network</h2>

                </div>
            </div>
        </header>

        <main>
            <center>
                <h1>TICKET ORDERS</h1>
            </center>
            <section id="pending-orders">
                <center>
                    <h1 style="color:darkviolet">Pending Orders</h1>
                </center>

                <div class="orders">
                    <?php
                    require("../../model/db.php");

                    $query = "SELECT * FROM orders where username= '{$_SESSION['username']}' and status='pending'";
                    $query_run = mysqli_query($connection, $query);
                    $check_order = mysqli_num_rows($query_run) > 0;

                    if ($check_order) {
                        while ($row = mysqli_fetch_assoc($query_run)) {
                    ?>

                            <div class="order">
                                <table>
                                    <tr>
                                        <td>
                                            <strong><i class="fas fa-ticket-alt"></i>&nbsp;&nbsp;<?= $row['journey_by'] ?>&nbsp;Ticket</strong>
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong><i class="fas fa-route"></i>&nbsp;&nbsp;Route:&nbsp;</strong><?= $row['start_location'] ?>&nbsp;<i class="fas fa-arrow-right"></i>&nbsp;<?= $row['end_location'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong><i class="fas fa-ticket-alt"></i>&nbsp;&nbsp;Status:&nbsp;</strong><?= $row['ticket_type'] ?>

                                        </td>
                                    </tr>
                                    <tr>
                                        <h1><i class="fas fa-shopping-cart"></i>&nbsp;&nbsp;ORDER ID# <span style="color:blue"><?= $row['order_id'] ?></span></h1>
                                        <h2><span style="color:brown"><?= $row['transport_name'] ?></span></h2>
                                        <h4><i class="far fa-calendar-alt fa-1x"></i>&nbsp;&nbsp;Journey Date:&nbsp; <?= $row['journey_date'] ?></h4>
                                        <h2><i class="fas fa-hand-holding-usd"></i>&nbsp;&nbsp;Price: <span style="color:red">৳<?= $row['price'] ?></span></h2>
                                        <hr>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong><i class="far fa-clock"></i>&nbsp;&nbsp;Arrival Time: </strong><?= $row['arrival_time'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong><i class="far fa-clock"></i>&nbsp;&nbsp;Departure Time: </strong><?= $row['departure_time'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br>
                                            <a href="cancel-order.php?order_id=<?php echo $row['order_id']; ?>"><button>Cancel</button></a>

                                        </td>
                                    </tr>
                                </table>
                            </div>
                    <?php


                        }
                    } else {
                        echo "No order found";
                    }

                    ?>

                </div>

            </section>


            <section id="approved-orders">
                <center>
                    <h1 style="color:green">Approved Orders</h1>
                </center>

                <div class="orders">
                    <?php
                    require("../../model/db.php");

                    $query = "SELECT * FROM orders where username= '{$_SESSION['username']}' and status='approved'";
                    $query_run = mysqli_query($connection, $query);
                    $check_order = mysqli_num_rows($query_run) > 0;

                    if ($check_order) {
                        while ($row = mysqli_fetch_assoc($query_run)) {
                    ?>
                            <div class="order">
                                <table>
                                    <tr>
                                        <td>
                                            <strong><i class="fas fa-ticket-alt"></i>&nbsp;&nbsp;<?= $row['journey_by'] ?>&nbsp;Ticket</strong>
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong><i class="fas fa-route"></i>&nbsp;&nbsp;Route:&nbsp;</strong><?= $row['start_location'] ?>&nbsp;<i class="fas fa-arrow-right"></i>&nbsp;<?= $row['end_location'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong><i class="fas fa-ticket-alt"></i>&nbsp;&nbsp;Status:&nbsp;</strong><?= $row['ticket_type'] ?>

                                        </td>
                                    </tr>
                                    <tr>
                                        <h1><i class="fas fa-shopping-cart"></i>&nbsp;&nbsp;ORDER ID# <span style="color:blue"><?= $row['order_id'] ?></span></h1>
                                        <h2><span style="color:brown"><?= $row['transport_name'] ?></span></h2>
                                        <h4><i class="far fa-calendar-alt fa-1x"></i>&nbsp;&nbsp;Journey Date:&nbsp; <?= $row['journey_date'] ?></h4>

                                        <h2><i class="fas fa-hand-holding-usd"></i>&nbsp;&nbsp;Price: <span style="color:red">৳<?= $row['price'] ?></span></h2>

                                        <hr>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong><i class="far fa-clock"></i>&nbsp;&nbsp;Arrival Time: </strong><?= $row['arrival_time'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong><i class="far fa-clock"></i>&nbsp;&nbsp;Departure Time: </strong><?= $row['departure_time'] ?>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                    <?php
                        }
                    } else {
                        echo "No order found";
                    }

                    ?>

                </div>

            </section>
            <br>
            <br>

            <center>
                <h1>BOOKING ORDERS</h1>
            </center>
            <section id="pending-orders">
                <center>
                    <h1 style="color:darkviolet">Pending Booking</h1>
                </center>

                <div class="orders">
                    <?php
                    require("../../model/db.php");

                    $query = "SELECT * FROM booking where username= '{$_SESSION['username']}' and status='pending'";
                    $query_run = mysqli_query($connection, $query);
                    $check_order = mysqli_num_rows($query_run) > 0;

                    if ($check_order) {
                        while ($row = mysqli_fetch_assoc($query_run)) {
                    ?>
                            <div class="order">
                                <table>
                                    <tr>
                                        <td>
                                            <strong><i class="fas fa-ticket-alt"></i>&nbsp;&nbsp;Booking:&nbsp;<?= $row['booking_for'] ?></strong>
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong><i class="fas fa-route"></i>&nbsp;&nbsp;Location:&nbsp;</strong><?= $row['location'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <h1><i class="fas fa-shopping-cart"></i>&nbsp;&nbsp;BOOKING ID# <span style="color:blue"><?= $row['booking_id'] ?></span></h1>
                                        <h2><span style="color:brown"><?= $row['name'] ?></span></h2>
                                        <h4><i class="far fa-calendar-alt fa-1x"></i>&nbsp;&nbsp;Event Date:&nbsp; <?= $row['start_date'] ?>&nbsp;<i class="fas fa-arrow-right"></i>&nbsp;<?= $row['end_date'] ?></h4>
                                        <h2><i class="fas fa-hand-holding-usd"></i>&nbsp;&nbsp;Price: <span style="color:red">৳<?= $row['price'] ?></span></h2>
                                        <hr>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br>
                                            <a href="cancel-order.php?booking_id=<?php echo $row['booking_id']; ?>"><button>Cancel</button></a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                    <?php
                        }
                    } else {
                        echo "No order found";
                    }

                    ?>

                </div>

            </section>


            <section id="approved-orders">
                <center>
                    <h1 style="color:green">Approved Booking</h1>
                </center>

                <div class="orders">
                    <?php
                    require("../../model/db.php");

                    $query = "SELECT * FROM booking where username= '{$_SESSION['username']}' and status='approved'";
                    $query_run = mysqli_query($connection, $query);
                    $check_order = mysqli_num_rows($query_run) > 0;

                    if ($check_order) {
                        while ($row = mysqli_fetch_assoc($query_run)) {
                    ?>
                            <div class="order">
                                <table>
                                    <tr>
                                        <td>
                                            <strong><i class="fas fa-ticket-alt"></i>&nbsp;&nbsp;Booking:&nbsp;<?= $row['booking_for'] ?></strong>
                                            <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong><i class="fas fa-route"></i>&nbsp;&nbsp;Location:&nbsp;</strong><?= $row['location'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <h1><i class="fas fa-shopping-cart"></i>&nbsp;&nbsp;BOOKING ID# <span style="color:blue"><?= $row['booking_id'] ?></span></h1>
                                        <h2><span style="color:brown"><?= $row['name'] ?></span></h2>
                                        <h4><i class="far fa-calendar-alt fa-1x"></i>&nbsp;&nbsp;Date:&nbsp; <?= $row['start_date'] ?>&nbsp;<i class="fas fa-arrow-right"></i>&nbsp;<?= $row['end_date'] ?></h4>
                                        <h2><i class="fas fa-hand-holding-usd"></i>&nbsp;&nbsp;Price: <span style="color:red">৳<?= $row['price'] ?></span></h2>
                                        <hr>
                                    </tr>
                                </table>
                            </div>
                    <?php
                        }
                    } else {
                        echo "No order found";
                    }

                    ?>
                </div>

            </section>
            <br>
            <center>
                <fieldset style="width:10%">
                    <a href="profile.php" style="text-decoration:none; color:black"><i class="fas fa-arrow-circle-left"></i>&nbsp;Back</a>
                </fieldset>
            </center>
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