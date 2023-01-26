<?php
include '../../model/db.php';
session_start();
if (isset($_COOKIE['flag'])) {
?>

  <!DOCTYPE html>
  <html lang="en" dir="ltr">

  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/payment.css">
    <style>
      a:link {
        text-decoration: none;
      }
    </style>
  </head>

  <body>

    <div class='container'>
      <div class='window'>
        <div class='credit-info'>
          <div class='credit-info-content'>
            <img src='https://dl.dropboxusercontent.com/s/ubamyu6mzov5c80/visa_logo%20%281%29.png' height='80' class='credit-card-image' id='credit-card-image'></img>
            Card Number
            <input class='input-field'></input>
            Card Holder
            <input class='input-field'></input>
            <table class='half-input-table'>
              <tr>
                <td> Expires
                  <input class='input-field'></input>
                </td>
                <td>CVC
                  <input class='input-field'></input>
                </td>
              </tr>
            </table>
            <a href="./merpay.php"><button class='pay-btn'>Checkout</button></a>
          </div>

        </div>
      </div>
    </div>

  </body>

  </html>

<?php
} else {
  header('location: ../../control/logout.php');
}
?>