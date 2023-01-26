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

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <link rel="stylesheet" href="styles/launch.css">
        <link rel="stylesheet" href="styles/global.css">
        <link rel="stylesheet" href="./styles/text-animation.css">
        <link rel="stylesheet" href="./styles/header.css">
        <link rel="stylesheet" href="./styles/banner.css">
        <link rel="stylesheet" href="./styles/footer.css">
        <link rel="stylesheet" href="./styles/view-all-ticket.css">
        <link rel="stylesheet" href="./styles/popup-search.css">
        <title>Launch</title>
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
    </head>

    <body>
        <header>
            <?php
            include './header.php';
            ?>
            <div class="banner wrapper">
                <div class="container">
                    <h1 class="typing-effect">Most Reliable Launch Ticket Solution</h1>
                    <h2>No. 1 online Ticketing Network</h2>
                </div>
            </div>
        </header>

        <main>
            <section class="container content">
                <div class="search">
                    <center>
                        <h2 style="color:cyan;">SEARCH LAUNCH</h2>
                    </center>
                    <div class="search-bar">

                        <span id="start" class="search-by-component">
                            <label for="">From:</label>
                            <select name="startLocation" id="startLocation" class="search-input">
                                <option value="dhaka">Dhaka</option>
                                <option value="chittagong">Chittagong</option>
                                <option value="barisal">Barisal</option>
                                <option value="cox-bazar">Cox's Bazar</option>
                                <option value="bargona">Bargona</option>
                                <option value="bangabandhu-island">Bangabandhu Island</option>
                                <option value="elisha">Elisha</option>
                                <option value="kuakata">Kuakata</option>
                                <option value="mawa">Mawa</option>
                                <option value="saint-martin">Saint Martin</option>
                            </select>

                        </span>

                        <span id="end" class="search-by-component">
                            <label for="">To:</label>
                            <select name="endLocation" id="endLocation" class="search-input">
                                <option value="dhaka">Dhaka</option>
                                <option value="chittagong">Chittagong</option>
                                <option value="barisal">Barisal</option>
                                <option value="cox-bazar">Cox's Bazar</option>
                                <option value="bargona">Bargona</option>
                                <option value="bangabandhu-island">Bangabandhu Island</option>
                                <option value="elisha">Elisha</option>
                                <option value="kuakata">Kuakata</option>
                                <option value="mawa">Mawa</option>
                                <option value="saint-martin">Saint Martin</option>
                            </select>
                        </span>

                        <span class="search-by-component" id="journey-date">
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


                <div style="width:100%; margin:0 auto;">
                    <center>
                        <iframe width="1200" height="720" src="https://www.youtube.com/embed/nhwtKxTDrRY?list=PL4pcb3feGRyYbJdcz1XnnpF_zpi9R75vw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </center>

                </div>

                <section class="launch-routes">

                    <center>
                        <table id="launch-route">
                            <tr>
                                <th>
                                    <h2>LAUNCH ROUTES</h2>
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
                <a href="./buy-launch-ticket.php" style="text-decoration:none;"><button class="see-tickets-btn" role="button"><span class="text">SEE ALL AVAILABLE LAUNCH TICKETS</span></button></a>
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
                        url: './search-launch-ticket.php',
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

        <!-- Display Launch Routes -->
        <script type="text/javascript">
            $.ajax({
                url: '../../model/JSON/launch-routes.json',
                dataType: 'json',
                success: function(data) {
                    for (var i = 0; i < data.length; i++) {
                        var row = $('<tr><td><a href="buy-launch-ticket.php" style="text-decoration:none; color:black"><i class="fas fa-route"></i>&nbsp;&nbsp;' + data[i].name + '</a></td></tr>');
                        $('#launch-route').append(row);
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