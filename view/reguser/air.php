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
        <link rel="stylesheet" href="styles/air.css">
        <link rel="stylesheet" href="styles/global.css">
        <link rel="stylesheet" href="./styles/header.css">
        <link rel="stylesheet" href="./styles/banner.css">
        <link rel="stylesheet" href="./styles/footer.css">
        <link rel="stylesheet" href="./styles/slider.css">
        <link rel="stylesheet" href="./styles/text-animation.css">
        <link rel="stylesheet" href="./styles/view-all-ticket.css">
        <link rel="stylesheet" href="./styles/popup-search.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="./favicon.png" type="image/x-icon">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <style>
            .search {
                position: relative;
                top: -287px;
            }

            #searchResults {
                position: relative;
                top: -400px;
            }

            table {
                width: 100%;
            }

            th {
                background: #f1f1f1;
                font-weight: bold;
                padding: 6px;
            }

            td {
                background: #f9f9f9;
                padding: 6px;
            }
        </style>
        <title>Air</title>
    </head>

    <body>

        <header>
            <?php
            include './header.php';
            ?>
            <div class="banner wrapper">
                <div class="container">
                    <h1 class="typing-effect">Most Reliable Air Ticket Solution</h1>
                    <h2>No. 1 online Ticketing Network</h2>

                </div>
            </div>
        </header>

        <main>
            <section class="container content">
                <div class="search">
                    <center>
                        <h2 style="color:yellow;">SEARCH PLANE</h2>
                    </center>
                    <div class="search-bar">

                        <span class="search-by-component">
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

                        <span class="search-by-component">
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

                        <span class="search-by-component">
                            <label for="">JOURNEY DATE:</label>
                            <input type="date" id="journeyDate" name="journeyDate" class="search-input">
                        </span>


                        <button id="search" class="search-btn button" onclick="toggle()"> <label for="show" style="color:#4FC3A1;">Search</label> </button>

                    </div>
                </div>





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
                                            <!-- <th>Buy</th> -->
                                        </tr>
                                    </thead>
                                    <tbody id="output">

                                    <tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>





                <section class="air-ticket-slider" style="margin-bottom: 200px;">
                    <center>
                        <h2 style="position: relative; top: -50px;">AVAILABLE PACKAGES</h2>
                    </center>

                    <div class="pic-ctn" style="margin-top: 50px; position: relative; right: 100px; top: 10px">
                        <img src="./images/air-ticket-packages/air-ticket-1.png" alt="" class="pic" width="500px">
                        <img src="./images/air-ticket-packages/air-ticket-2.png" alt="" class="pic" width="500px">
                        <img src="./images/air-ticket-packages/air-ticket-3.png" alt="" class="pic" width="500px">
                        <img src="./images/air-ticket-packages/air-ticket-4.png" alt="" class="pic" width="500px">
                        <img src="./images/air-ticket-packages/air-ticket-5.png" alt="" class="pic" width="500px">
                        <img src="./images/air-ticket-packages/air-ticket-6.png" alt="" class="pic" width="500px">
                    </div>
                </section>

                <section class="air-routes">

                    <center>
                        <table id="air-route">
                            <tr>
                                <th>
                                    <h2>AIR ROUTES</h2>
                                </th>
                            </tr>
                        </table>
                    </center>

                </section>

                <div style="width:100%; margin:0 auto; margin-top: 100px; margin-bottom:50px; background: white; border:2px solid blueviolet; border-radius: 10px; padding: 30px;">

                    <center>
                        <h1>We Accept</h1>
                    </center>
                    <img src="./images/payment-methods.png" alt="" style="width: 100%; height: auto;">

                </div>
            </section>
            <center>
                <a href="./buy-air-ticket.php" style="text-decoration:none;"><button class="see-tickets-btn" role="button"><span class="text">SEE ALL AVAILABLE AIR TICKETS</span></button></a>
            </center>




        </main>

        <footer>
            <?php
            include './footer.php';
            ?>
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

        <!-- Display Air Routes -->
        <script type="text/javascript">
            $.ajax({
                url: '../../model/JSON/air-routes.json',
                dataType: 'json',
                success: function(data) {
                    for (var i = 0; i < data.length; i++) {
                        var row = $('<tr><td><a href="buy-air-ticket.php" style="text-decoration:none; color:black"><i class="fas fa-route"></i>&nbsp;&nbsp;' + data[i].name + '</a></td></tr>');
                        $('#air-route').append(row);
                    }
                }
            });
        </script>

    </body>

    </html>

<?php
} else {
    header('location: ../../control/login.php');
}
?>