<?php
include '../../model/db.php';
session_start();
if (isset($_COOKIE['flag'])) {
?>

  <!DOCTYPE html>
  <html lang="en" dir="ltr">

  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/adminhome.css">
    <link rel="stylesheet" href="../css/user.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      a:link {
        text-decoration: none;
      }
    </style>
  </head>

  <body>
    <div class="sidebar">
      <div class="logo-details">
        <i class='bx bx-trip icon'></i>
        <div class="logo_name">Just Travel</div>
        <i class='bx bx-menu' id="btn"></i>
      </div>
      <!-- sidebar logo -->

      <!-- sidebar link start  -->
      <ul class="nav-list">
        <li>
          <a href="./adminhome.php">
            <i class='bx bx-grid-alt'></i>
            <span class="links_name">Dashboard</span>
          </a>
          <span class="tooltip">Dashboard</span>
        </li>

        <li>
          <a href="./user.php">
            <i class='bx bx-user'></i>
            <span class="links_name">User</span>
          </a>
          <span class="tooltip">User</span>
        </li>
        <li>
          <a href="./hotel.php">
            <i class='bx bxs-hotel'></i>
            <span class="links_name">Hotel</span>
          </a>
          <span class="tooltip">Hotel</span>
        </li>
        <li>
          <a href="./event.php">
            <i class='bx bx-calendar-event'></i>
            <span class="links_name">Event</span>
          </a>
          <span class="tooltip">Event</span>
        </li>
        <li>
          <a href="./place.php">
            <i class='bx bx-location-plus'></i>
            <span class="links_name">Place</span>
          </a>
          <span class="tooltip">Place</span>
        </li>
        <li>
          <a href="./offer.php">
            <i class='bx bxs-offer'></i>
            <span class="links_name">Offers</span>
          </a>
          <span class="tooltip">Offers</span>
        </li>
        <li>
          <a href="./bus.php">
            <i class='bx bx-bus'></i>
            <span class="links_name">Bus ticket</span>
          </a>
          <span class="tooltip">Bus ticket</span>
        </li>
        <li>
          <a href="./air.php">
            <i class='bx bxs-plane-alt'></i>
            <span class="links_name">Air ticket</span>
          </a>
          <span class="tooltip">Air ticket</span>
        </li>
        <li>
          <a href="./lounch.php">
            <i class='bx bxs-ship'></i>
            <span class="links_name">lounch ticket</span>
          </a>
          <span class="tooltip">lounch ticket</span>
        </li>
        <li>
          <a href="./booking.php">
            <i class='bx bxs-bookmark-plus'></i>
            <span class="links_name">Booking Info</span>
          </a>
          <span class="tooltip">Booking Info</span>
        </li>
        <li>
          <a href="./upay.php">
            <i class='bx bx-money'></i>
            <span class="links_name">Order Info</span>
          </a>
          <span class="tooltip">Order Info</span>
        </li>
        <li>
          <a href="./merpay.php">
            <i class='bx bx-diamond'></i>
            <span class="links_name">Merchant Payment</span>
          </a>
          <span class="tooltip">Merchant Payment</span>
        </li>

        <li class="profile">
          <div class="profile-details">
            <img src="../../assets/admin.png" alt="profileImg">-->
            <div class="name_job">
              <div class="name"><?php echo $_SESSION['username']; ?></div>
              <div class="job">Web designer</div>
            </div>
          </div>
          <a href="../../control/logout.php"><i class='bx bx-log-out' id="log_out"></i></a>
        </li>
      </ul>
    </div>
    <!-- sidebar link end  -->

    <!-- main section starts  -->
    <section class="home-section">
      <div class="text">Dashboard</div>

      <div class="cards">

        <div class="card">
          <div class="card-container">
            <h1> Total Registration</h1> <br>
            <?php
            $sql = "SELECT id FROM users ORDER BY id;";
            $result = mysqli_query($connection, $sql);
            $row = mysqli_num_rows($result);
            echo '<h1>' . $row . '</h1>';
            ?>
          </div>
        </div>

        <div class="card">
          <div class="card-container">
            <h1> Total User </h1><br>
            <?php
            $sql = "SELECT id FROM users WHERE role='user' ORDER BY id;";
            $result = mysqli_query($connection, $sql);
            $row = mysqli_num_rows($result);
            echo '<h1>' . $row . '</h1>';
            ?>
          </div>
        </div>

        <div class="card">
          <div class="card-container">
            <h1>Total Merchant</h1> <br>
            <?php
            $sql = "SELECT id FROM users WHERE role='merchant' ORDER BY id;";
            $result = mysqli_query($connection, $sql);
            $row = mysqli_num_rows($result);
            echo '<h1>' . $row . '</h1>';
            ?>
          </div>
        </div>

        <div class="card">
          <div class="card-container">
            <h1> AVAIABLE HOTEL</h1><br>
            <?php
            $sql = "SELECT hotel_id FROM hotel ORDER BY hotel_id;";
            $result = mysqli_query($connection, $sql);
            $row = mysqli_num_rows($result);
            echo '<h1>' . $row . '</h1>';
            ?>
          </div>
        </div>

        <div class="card">
          <div class="card-container">
            <h1>AVAIABLE PLACES </h1><br>
            <?php
            $sql = "SELECT place_id FROM places ORDER BY place_id;";
            $result = mysqli_query($connection, $sql);
            $row = mysqli_num_rows($result);
            echo '<h1>' . $row . '</h1>';
            ?>
          </div>
        </div>

        <div class="card">
          <div class="card-container">
            <h1>AVAIABLE EVENTS </h1><br>
            <?php
            $sql = "SELECT event_id FROM event_ticket ORDER BY event_id;";
            $result = mysqli_query($connection, $sql);
            $row = mysqli_num_rows($result);
            echo '<h1>' . $row . '</h1>';
            ?>
          </div>
        </div>

        <div class="card">
          <div class="card-container">
            <h1> BUS TICKETS </h1><br>
            <?php
            $sql = "SELECT bus_ticket_id FROM bus_ticket ORDER BY bus_ticket_id;";
            $result = mysqli_query($connection, $sql);
            $row = mysqli_num_rows($result);
            echo '<h1>' . $row . '</h1>';
            ?>
          </div>
        </div>

        <div class="card">
          <div class="card-container">
            <h1> AIR TICKETS</h1> <br>
            <?php
            $sql = "SELECT air_ticket_id FROM air_ticket ORDER BY air_ticket_id;";
            $result = mysqli_query($connection, $sql);
            $row = mysqli_num_rows($result);
            echo '<h1>' . $row . '</h1>';
            ?>
          </div>
        </div>

        <div class="card">
          <div class="card-container">
            <h1>LOUNCH TICKETS </h1><br>
            <?php
            $sql = "SELECT launch_ticket_id FROM launch_ticket ORDER BY launch_ticket_id;";
            $result = mysqli_query($connection, $sql);
            $row = mysqli_num_rows($result);
            echo '<h1>' . $row . '</h1>';
            ?>
          </div>
        </div>

        <div class="card">
          <div class="card-container">
            <h1>Merchant Payment Due </h1><br>
            <?php
            $sql = "SELECT merid FROM merpay ORDER BY merid;";
            $result = mysqli_query($connection, $sql);
            $row = mysqli_num_rows($result);
            echo '<h1>' . $row . '</h1>';
            ?>
          </div>
        </div>

        <div class="card">
          <div class="card-container">
            <h1>Order Info Due </h1><br>
            <?php
            $sql = "SELECT id FROM orders ORDER BY id;";
            $result = mysqli_query($connection, $sql);
            $row = mysqli_num_rows($result);
            echo '<h1>' . $row . '</h1>';
            ?>
          </div>
        </div>

        <div class="card">
          <div class="card-container">
            <h1>Bookings</h1><br>
            <?php
            $sql = "SELECT id FROM booking ORDER BY id;";
            $result = mysqli_query($connection, $sql);
            $row = mysqli_num_rows($result);
            echo '<h1>' . $row . '</h1>';
            ?>
          </div>
        </div>

      </div>

    </section>
    <!-- main section ends  -->
    <script>
      let sidebar = document.querySelector(".sidebar");
      let closeBtn = document.querySelector("#btn");

      closeBtn.addEventListener("click", () => {
        sidebar.classList.toggle("open");
        menuBtnChange(); //calling the function
      });

      //change sidebar button
      function menuBtnChange() {
        if (sidebar.classList.contains("open")) {
          closeBtn.classList.replace("bx-menu", "bx-menu-alt-right"); //replacing the iocns class
        } else {
          closeBtn.classList.replace("bx-menu-alt-right", "bx-menu"); //replacing the iocns class
        }
      }
    </script>

  </body>

  </html>

<?php
} else {
  header('location: ../../control/logout.php');
}
?>