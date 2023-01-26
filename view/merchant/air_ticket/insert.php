<?php
$connect = mysqli_connect("localhost", "root", "", "ticket_db");
if(isset($_POST["airline_name"], $_POST["plane_start_location"]))
{
 $airline_name = mysqli_real_escape_string($connect, $_POST["airline_name"]);
 $plane_start_location = mysqli_real_escape_string($connect, $_POST["plane_start_location"]);
 $air_ticket_id = mysqli_real_escape_string($connect, $_POST["air_ticket_id"]);
 $air_ticket_type = mysqli_real_escape_string($connect, $_POST["air_ticket_type"]);
 $plane_arrival_time = mysqli_real_escape_string($connect, $_POST["plane_arrival_time"]);
 $air_ticket_price = mysqli_real_escape_string($connect, $_POST["air_ticket_price"]);



 $query = "INSERT INTO air_ticket (airline_name, plane_start_location, air_ticket_id, plane_arrival_time, air_ticket_price, air_ticket_type) VALUES('$airline_name', '$plane_start_location', '$air_ticket_id', '$plane_arrival_time', '$air_ticket_price', '$air_ticket_type')";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Inserted';
 }
}
?>
