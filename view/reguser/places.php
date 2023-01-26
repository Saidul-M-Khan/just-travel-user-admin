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
        <link rel="shortcut icon" href="./favicon.png" type="image/x-icon">
        <link rel="stylesheet" href="./styles/header.css">
        <link rel="stylesheet" href="./styles/banner.css">
        <link rel="stylesheet" href="./styles/footer.css">
        <link rel="stylesheet" href="./styles/text-animation.css">
        <title>Places</title>


        <style>
            * {
                font-family: 'Poppins', sans-serif;
            }

            .cards {
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                grid-auto-rows: auto;
                grid-gap: 2rem;
                margin: 100px;
            }

            .card {
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
                transition: 0.3s;
                width: 100%;
                border-radius: 5px;
            }

            .card:hover {
                box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
            }

            img {
                border-radius: 5px 5px 0 0;
            }

            .card-container {
                padding: 2px 16px;
            }
        </style>
    </head>

    <body>

        <header>
            <?php include("./header.php") ?>
            <div class="banner wrapper">
                <div class="container">
                    <h1 class="typing-effect">Visit Tourist Spots with Just Travel</h1>
                    <h2 class="">No. 1 online Ticketing Network</h2>
                </div>
            </div>
        </header>

        <main>
            <center>
                <h1>PLACES</h1>
            </center>

            <div class="cards">
                <?php
                require("../../model/db.php");

                $query = "SELECT * FROM places";
                $query_run = mysqli_query($connection, $query);
                $check_place = mysqli_num_rows($query_run) > 0;

                if ($check_place) {
                    while ($row = mysqli_fetch_assoc($query_run)) {
                ?>

                        <div class="card">
                            <img src="<?php echo $row['place_image']; ?>" alt="" style="width:100%" width="547px" height="307px">
                            <div class="card-container">
                                <h1><?php echo $row['place_name']; ?></h1>

                                <div>
                                    <p><?php echo $row['place_description']; ?></p>
                                </div>
                            </div>
                        </div>
                <?php


                    }
                } else {
                    echo "No places found";
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