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
        <link rel="stylesheet" href="./styles/text-animation.css">
        <link rel="stylesheet" href="./styles/search.css">
        <link rel="stylesheet" href="./styles/ticket.css">
        <link rel="stylesheet" href="./styles/footer.css">
        <link rel="stylesheet" href="./styles/popup-search.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

        <title>Buy Air Ticket</title>
    </head>

    <body>
        <header>
            <?php include './header.php'; ?>
            <div class="banner wrapper">
                <div class="container">
                    <h1 class="typing-effect">Most Reliable Air Ticket Solution</h1>
                    <h2>No. 1 online Ticketing Network</h2>

                </div>
            </div>
        </header>

        <main>
            <center>
                <div class="search">
                    <center>
                        <h2 class="search-title">SEARCH PLANE</h2>
                    </center>
                    <div class="search-bar">

                        <span id="start" class="search-by-component">
                            <label for="">From:</label>
                            <select name="startLocation" id="startLocation" class="search-input">
                                <option value="dhaka">Dhaka</option>
                                <option value="chittagong">Chittagong</option>
                                <option value="barisal">Barisal</option>
                                <option value="joshore">Joshore</option>
                                <option value="saiadpur">Saiadpur</option>
                                <option value="rajshahi">Rajshahi</option>
                                <option value="cox-bazar">Cox's Bazar</option>
                                <option value="sylhet">Sylhet</option>
                            </select>
                        </span>

                        <span id="end" class="search-by-component">
                            <label for="">To:</label>
                            <select name="endLocation" id="endLocation" class="search-input">
                                <option value="dhaka">Dhaka</option>
                                <option value="chittagong">Chittagong</option>
                                <option value="barisal">Barisal</option>
                                <option value="joshore">Joshore</option>
                                <option value="saiadpur">Saiadpur</option>
                                <option value="rajshahi">Rajshahi</option>
                                <option value="cox-bazar">Cox's Bazar</option>
                                <option value="sylhet">Sylhet</option>
                            </select>
                        </span>


                        <span class="search-by-component" id="journey-date">
                            <label for="">JOURNEY DATE:</label>
                            <input type="date" id="journeyDate" name="journeyDate" class="search-input">
                        </span>

                        <button id="search" class="search-btn button" onclick="toggle()"> <label for="show" style="color:#4FC3A1;">Search</label> </button>

                    </div>

                </div>

            </center>


            <section class="tickets">

                <div id="searchResults">
                    <!-- POP UP SEARCH  -->
                    <div>
                        <input type="checkbox" id="show">
                        <div class="output-container">
                            <label for="show" class="close-btn fas fa-times" style="color:black;" title="close"></label>
                            <div class="table-wrapper">
                                <table class="fl-table">
                                    <thead>
                                        <tr>
                                            <th>Operator Name</th>
                                            <th>Journey Date</th>
                                            <th>Starting Location</th>
                                            <th>Ending Location</th>
                                            <th>Arrival Time</th>
                                            <th>Departure Time</th>
                                            <th>Available Seat</th>
                                            <th>Type</th>
                                            <th>Price</th>
                                        </tr>
                                    </thead>
                                    <tbody id="output">

                                    <tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                require("../../model/db.php");

                $query = "SELECT * FROM air_ticket where status='approved'";
                $query_run = mysqli_query($connection, $query);
                $check_ticket = mysqli_num_rows($query_run) > 0;

                if ($check_ticket) {
                    while ($row = mysqli_fetch_assoc($query_run)) {
                ?>
                        <form action="./order-payment.php" method="POST">
                            <div class="ticket-card">
                                <div class="meta">
                                    <div class="photo" style="background-image: url(<?php echo $row['image']; ?>);"></div>
                                </div>
                                <div class="description">
                                    <input type="hidden" name="journey_by" value="air">
                                    <input type="hidden" name="payment_method" value="card">
                                    <input type="hidden" name="status" value="pending">

                                    <img src="<?php echo $row['airline_image']; ?>" alt="" height="80px" width="80px">
                                    <h1><?php echo $row['airline_name']; ?></h1>
                                    <input type="hidden" name="transport_name" value="<?php echo $row['airline_name']; ?>">

                                    <h2><i style="color:black" class="ticket-icon fas fa-route"></i>&nbsp;&nbsp;&nbsp;<strong>Route:&nbsp;</strong><?php echo $row['plane_start_location']; ?>&nbsp;<i style="color:black" class="ticket-icon fas fa-arrow-right"></i>&nbsp;<?php echo $row['plane_end_location']; ?></h2>
                                    <input type="hidden" name="start_location" value="<?php echo $row['plane_start_location']; ?>">
                                    <input type="hidden" name="end_location" value="<?php echo $row['plane_end_location']; ?>">

                                    <h2><i style="color:black" class="fas fa-plane"></i>&nbsp;&nbsp;&nbsp;<strong>Flight:&nbsp;</strong><?php echo $row['flight_no']; ?></h2>

                                    <p><i style="color:black" class="ticket-icon far fa-calendar-alt"></i>&nbsp;&nbsp;&nbsp;<strong>Journey Date:&nbsp;</strong><?php echo $row['plane_journey_date']; ?></p>
                                    <input type="hidden" name="journey_date" value="<?php echo $row['plane_journey_date']; ?>">

                                    <p><i style="color:black" class="ticket-icon fas fa-ticket-alt"></i>&nbsp;&nbsp;&nbsp;<strong>Ticket Type:&nbsp;</strong><?php echo $row['air_ticket_type']; ?></p>
                                    <input type="hidden" name="ticket_type" value="<?php echo $row['air_ticket_type']; ?>">

                                    <p><i style="color:black" class="fas fa-plane-arrival"></i>&nbsp;&nbsp;&nbsp;<strong>Arrival Time:&nbsp;</strong><?php echo $row['plane_arrival_time']; ?></p>
                                    <input type="hidden" name="arrival_time" value="<?php echo $row['plane_arrival_time']; ?>">

                                    <p><i style="color:black" class="fas fa-plane-departure"></i>&nbsp;&nbsp;&nbsp;<strong>Departure Time:&nbsp;</strong><?php echo $row['plane_departure_time']; ?></p>
                                    <input type="hidden" name="departure_time" value="<?php echo $row['plane_departure_time']; ?>">

                                    <p><i style="color:black" class="ticket-icon fas fa-check-square"></i>&nbsp;&nbsp;&nbsp;<strong>Available Seat:&nbsp;</strong><?php echo $row['plane_available_seat']; ?></p>

                                    <p><i style="color:black" class="ticket-icon fas fa-hand-holding-usd"></i>&nbsp;&nbsp;&nbsp;<strong>Price:&nbsp;</strong><span style="color: red; font-weight: 700; font-size: 25px; line-height: 25px;">৳<?php echo $row['air_ticket_price']; ?></span></p>
                                    <input type="hidden" name="price" value="<?php echo $row['air_ticket_price']; ?>">

                                    <p class="qty">
                                        <strong style="font-size: 20px;">Quantity:&nbsp;</strong>&nbsp;&nbsp;&nbsp;<input type="number" name="qty" class="qty" id="qty" min="1" max="<?php echo $row['plane_available_seat']; ?>" step="1" value="1">
                                    </p>

                                    <input type="submit" class="ticket-buy-btn" role="button" style="margin-top:15px;" value="Buy">
                                </div>
                            </div>
                        </form>


                <?php


                    }
                } else {
                    echo "No ticket found";
                }

                ?>

            </section>

        </main>

        <footer>
            <?php include 'footer.php'; ?>
        </footer>

        <script src="./js/header.js"></script>
        <script src="./js/search.js"></script>
        <!-- pop up script -->
        <script type="text/javascript">
            $(document).ready(function() {
                $("#search").click(function() {
                    $.ajax({
                        type: 'POST',
                        url: './search-air-ticket.php',
                        data: {
                            startLocation: $("#startLocation").val(),
                            endLocation: $("#endLocation").val(),
                            journeyDate: $("#journeyDate").val()
                        },
                        success: function(data) {
                            $("#output").html(data);
                        }
                    });
                });
            });
        </script>
        <!-- background blur script -->
        <script type="text/javascript">
            function toggle() {
                var blur = document.getElementById('blur');
                blur.classlist.toggle('active')
            }
        </script>

    </body>

    </html>
<?php
} else {
    header('location: ../../control/login.php');
}
?>