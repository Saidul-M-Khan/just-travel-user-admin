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
        <link rel="stylesheet" href="styles/bus.css">
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
        <title>Bus</title>

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
                    <h1 class="typing-effect">Most Reliable Bus Ticket Solution</h1>
                    <h2 class="">No. 1 online Ticketing Network</h2>

                </div>
            </div>
        </header>


        <main>
            <section class="container content">

                <div class="search">
                    <center>
                        <h2 class="search-title" style="color:lime;">SEARCH BUS</h2>
                    </center>
                    <div class="search-bar">
                        <span id="start" class="search-by-component">
                            <label for="">From:</label>
                            <select name="startLocation" id="startLocation" class="search-input">
                                <option value="Dhaka">Dhaka</option>
                                <option value="Chittagong">Chittagong</option>
                                <option value="Barisal">Barisal</option>
                                <option value="Mymensingh">Mymensingh</option>
                                <option value="Khulna">Khulna</option>
                                <option value="Rajshahi">Rajshahi</option>
                                <option value="Rangpur">Rangpur</option>
                                <option value="Sylhet">Sylhet</option>
                            </select>
                        </span>

                        <span id="end" class="search-by-component">
                            <label for="">To:</label>
                            <select name="endLocation" id="endLocation" class="search-input">
                                <option value="Dhaka">Dhaka</option>
                                <option value="Chittagong">Chittagong</option>
                                <option value="Barisal">Barisal</option>
                                <option value="Mymensingh">Mymensingh</option>
                                <option value="Khulna">Khulna</option>
                                <option value="Rajshahi">Rajshahi</option>
                                <option value="Rangpur">Rangpur</option>
                                <option value="Sylhet">Sylhet</option>
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






                <section class="bus-ticket-slider" style="margin-bottom: 150px;">
                    <center>
                        <h2 style="position: relative; top: -80px;">AVAILABLE PACKAGES</h2>
                    </center>

                    <div class="pic-ctn" style="margin-top: 50px; position: relative; right: 100px;">
                        <img src="./images/bus-ticket-packages/package-1.png" alt="" class="pic" width="600px">
                        <img src="./images/bus-ticket-packages/package-2.png" alt="" class="pic" width="600px">
                        <img src="./images/bus-ticket-packages/package-3.png" alt="" class="pic" width="600px">
                        <img src="./images/bus-ticket-packages/package-4.png" alt="" class="pic" width="600px">
                        <img src="./images/bus-ticket-packages/package-5.png" alt="" class="pic" width="600px">
                        <img src="./images/bus-ticket-packages/package-6.png" alt="" class="pic" width="600px">
                        <img src="./images/bus-ticket-packages/package-7.png" alt="" class="pic" width="600px">
                        <img src="./images/bus-ticket-packages/package-8.png" alt="" class="pic" width="600px">
                        <img src="./images/bus-ticket-packages/package-9.png" alt="" class="pic" width="600px">
                        <img src="./images/bus-ticket-packages/package-10.png" alt="" class="pic" width="600px">
                    </div>
                </section>

                <section class="bus-operators">
                    <center>
                        <table id="bus-operator">
                            <thead>
                                <tr>
                                    <th colspan="4">
                                        <h2>AVAILABLE BUS OPERATORS</h2>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <ul class="bus-list">
                                            <dl><i class="fas fa-bus"></i>&nbsp;AK Travels</dl>
                                            <dl><i class="fas fa-bus"></i>&nbsp;Aqib Enterprise</dl>
                                            <dl><i class="fas fa-bus"></i>&nbsp;Bablu Enterprise </dl>
                                            <dl><i class="fas fa-bus"></i>&nbsp;Bappy Enterprise </dl>
                                            <dl><i class="fas fa-bus"></i>&nbsp;Barkat Travels </dl>
                                            <dl><i class="fas fa-bus"></i>&nbsp;Desh Travels </dl>
                                            <dl><i class="fas fa-bus"></i>&nbsp;Dhaka Express </dl>
                                            <dl><i class="fas fa-bus"></i>&nbsp;Dolphin Chair Coach Service </dl>
                                            <dl><i class="fas fa-bus"></i>&nbsp;Econo Service </dl>
                                            <dl><i class="fas fa-bus"></i>&nbsp;Falguni Modhumoti PVT LTD </dl>
                                            <dl><i class="fas fa-bus"></i>&nbsp;Falguni Paribahan </dl>
                                            <dl><i class="fas fa-bus"></i>&nbsp;Grameen Travels</dl>
                                        </ul>
                                    </td>

                                    <td>
                                        <ul class="bus-list">
                                            <dl><i class="fas fa-bus"></i>&nbsp;Green Saintmartin Express</dl>
                                            <dl><i class="fas fa-bus"></i>&nbsp;Hanif Enterprise </dl>
                                            <dl><i class="fas fa-bus"></i>&nbsp;HR Travels </dl>
                                            <dl><i class="fas fa-bus"></i>&nbsp;Jatayat AC </dl>
                                            <dl><i class="fas fa-bus"></i>&nbsp;Jline Paribahan </dl>
                                            <dl><i class="fas fa-bus"></i>&nbsp;Khadiza VIP Service </dl>
                                            <dl><i class="fas fa-bus"></i>&nbsp;Kingfisher Travels </dl>
                                            <dl><i class="fas fa-bus"></i>&nbsp;KLine </dl>
                                            <dl><i class="fas fa-bus"></i>&nbsp;Kuakata Express </dl>
                                            <dl><i class="fas fa-bus"></i>&nbsp;Modern Line </dl>
                                            <dl><i class="fas fa-bus"></i>&nbsp;National Travels </dl>
                                            <dl><i class="fas fa-bus"></i>&nbsp;President Travels </dl>
                                        </ul>
                                    </td>

                                    <td>
                                        <ul class="bus-list">
                                            <dl><i class="fas fa-bus"></i>&nbsp;Relax Transport </dl>
                                            <dl><i class="fas fa-bus"></i>&nbsp;RM Travels </dl>
                                            <dl><i class="fas fa-bus"></i>&nbsp;Rumin Paribahan Limited </dl>
                                            <dl><i class="fas fa-bus"></i>&nbsp;S.Alam </dl>
                                            <dl><i class="fas fa-bus"></i>&nbsp;Saintmartin Paribahan </dl>
                                            <dl><i class="fas fa-bus"></i>&nbsp;Saintmartin Travels </dl>
                                            <dl><i class="fas fa-bus"></i>&nbsp;Sakalsandhya Enterprise </dl>
                                            <dl><i class="fas fa-bus"></i>&nbsp;Sakura Paribahan </dl>
                                            <dl><i class="fas fa-bus"></i>&nbsp;Sarbick Paribahan </dl>
                                            <dl><i class="fas fa-bus"></i>&nbsp;Sarker Travels </dl>
                                            <dl><i class="fas fa-bus"></i>&nbsp;Senjuti Travels </dl>
                                            <dl><i class="fas fa-bus"></i>&nbsp;Seven Star Paribahan </dl>
                                        </ul>
                                    </td>

                                    <td>
                                        <ul class="bus-list">
                                            <dl><i class="fas fa-bus"></i>&nbsp;Shah Ali Paribahan </dl>
                                            <dl><i class="fas fa-bus"></i>&nbsp;Shanti Paribahan </dl>
                                            <dl><i class="fas fa-bus"></i>&nbsp;Shanti Paribahan AC </dl>
                                            <dl><i class="fas fa-bus"></i>&nbsp;Shyamoli ( NR ) </dl>
                                            <dl><i class="fas fa-bus"></i>&nbsp;SI Enterprise </dl>
                                            <dl><i class="fas fa-bus"></i>&nbsp;Silk Line </dl>
                                            <dl><i class="fas fa-bus"></i>&nbsp;Sonartori Paribahan </dl>
                                            <dl><i class="fas fa-bus"></i>&nbsp;Surovi Paribahan </dl>
                                            <dl><i class="fas fa-bus"></i>&nbsp;Uzzal Travels </dl>
                                        </ul>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </center>



                </section>

                <section class="bus-routes">

                    <center>
                        <table id="bus-route">
                            <tr>
                                <th>
                                    <h2>BUS ROUTES</h2>
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
                <a href="./buy-bus-ticket.php" style="text-decoration:none;"><button class="see-tickets-btn" role="button"><span class="text">SEE ALL AVAILABLE BUS TICKETS</span></button></a>
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
                        url: './search-bus-ticket.php',
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


        <!-- Display Bus Route -->
        <script type="text/javascript">
            $.ajax({
                url: '../../model/JSON/bus-routes.json',
                dataType: 'json',
                success: function(data) {
                    for (var i = 0; i < data.length; i++) {
                        var row = $('<tr><td><a href="buy-bus-ticket.php" style="text-decoration:none; color:black"><i class="fas fa-route"></i>&nbsp;&nbsp;' + data[i].name + '</a></td></tr>');
                        $('#bus-route').append(row);
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