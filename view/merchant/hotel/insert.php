<?php
$connect = mysqli_connect("localhost", "root", "", "ticket_db");
if(isset($_POST["hotel_name"], $_POST["hotel_location"]))
{
 $hotel_name = mysqli_real_escape_string($connect, $_POST["hotel_name"]);
 $hotel_location = mysqli_real_escape_string($connect, $_POST["hotel_location"]);
 $hotel_id = mysqli_real_escape_string($connect, $_POST["hotel_id"]);
 $booking_date = mysqli_real_escape_string($connect, $_POST["booking_date"]);
 $regular_booking_price = mysqli_real_escape_string($connect, $_POST["regular_booking_price"]);
 $hotel_services = mysqli_real_escape_string($connect, $_POST["hotel_services"]);



 $query = "INSERT INTO register (hotel_name, hotel_location, hotel_id, regular_booking_price, hotel_services, booking_date) VALUES('$hotel_name', '$hotel_location', '$hotel_id', '$regular_booking_price', '$hotel_services', '$booking_date')";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Inserted';
 }
}
?>
