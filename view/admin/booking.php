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
    <link rel="stylesheet" href="../css/hotel.css">
    <link rel="stylesheet" href="../css/user.css">
    <link rel="stylesheet" href="../css/pop.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
    <center>
      <section class="home-section d-flex justify-content-center">
        <div class="text">User Bookings</div>
        <!-- after head -->

        <!-- POP UP SEARCH  -->
        <div>
          <input type="checkbox" id="show">
          <button class="button"> <label for="show">Search</label> </button>
          <div class="container">
            <label for="show" class="close-btn bx bx-window-close" title="close"></label>
            <input type="text" id="search" placeholder="Booking ID">

            <div class="table-wrapper">
              <table class="fl-table">
                <thead>
                  <tr>
                    <!-- <th>ID</th> -->
                    <th>Booking ID</th>
                    <th>User Name</th>
                    <th>Booking For</th>
                    <th>Order</th>
                    <th>End Date</th>
                    <th>Price</th>
                    <th>Method</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody id="output">
                  <!-- SEARCH RESULT OUT PUT FROM SRCBOOKING.PHP -->
                <tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- POP UP SEARCH END -->

        <?php
        $sql = "SELECT * FROM booking;";
        $result = mysqli_query($connection, $sql);
        ?>

        <div class="table-wrapper">
          <table class="fl-table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Booking ID</th>
                <th>User Name</th>
                <th>Booking For</th>
                <th>Order</th>
                <th>End Date</th>
                <th>Price</th>
                <th>Method</th>
                <th>Status</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>

              <?php
              // if(mysqli_num_rows($result) > 0){
              while ($row = mysqli_fetch_assoc($result)) { ?>

                <tr>
                  <td>
                    <?php
                    echo $row['id'];
                    ?>
                  </td>
                  <td><?php echo $row['booking_id']; ?></td>
                  <td><?php echo $row['username']; ?></td>
                  <td><?php echo $row['booking_for']; ?></td>
                  <td><?php echo $row['name']; ?></td>
                  <td><?php echo $row['price']; ?></td>
                  <td><?php echo $row['payment_method']; ?></td>
                  <td><?php echo $row['end_date']; ?></td>
                  <td><?php echo $row['status']; ?></td>
                  <td>
                    <div class="button"><a href="./edit/book/editbook.php?id=<?php echo $row['id']; ?>"> Update </a></div>
                  </td>
                  <td>
                    <div class="button"><a href="./edit/book/deletebook.php?id=<?php echo $row['id']; ?>"> Delete </a></div>
                  </td>
                </tr>

              <?php } ?>

            <tbody>
          </table>
        </div>

      </section>
    </center>
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
    <!-- pop up script -->
    <script type="text/javascript">
      $(document).ready(function() {
        $("#search").keypress(function() {
          $.ajax({
            type: 'POST',
            url: './search/srcbooking.php',
            data: {
              name: $("#search").val(),
            },
            success: function(data) {
              $("#output").html(data);
            }
          });
        });
      });
    </script>

  </body>

  </html>

<?php
} else {
  header('location: ../../control/logout.php');
}
?>