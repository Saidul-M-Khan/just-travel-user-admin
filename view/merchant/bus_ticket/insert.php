<?php
$connect = mysqli_connect("localhost", "root", "", "ticket_db");
if(isset($_POST["bus_operators_name"], $_POST["bus_start_location"]))
{
 $bus_operators_name = mysqli_real_escape_string($connect, $_POST["bus_operators_name"]);
 $bus_start_location = mysqli_real_escape_string($connect, $_POST["bus_start_location"]);
 $bus_ticket_id = mysqli_real_escape_string($connect, $_POST["bus_ticket_id"]);
 $bus_ticket_type = mysqli_real_escape_string($connect, $_POST["bus_ticket_type"]);
 $bus_arrival_time = mysqli_real_escape_string($connect, $_POST["bus_arrival_time"]);
 $bus_ticket_price = mysqli_real_escape_string($connect, $_POST["bus_ticket_price"]);



 $query = "INSERT INTO bus_ticket (bus_operators_name, bus_start_location, bus_ticket_id, bus_arrival_time, bus_ticket_price, bus_ticket_type) VALUES('$bus_operators_name', '$bus_start_location', '$bus_ticket_id', '$bus_arrival_time', '$bus_ticket_price', '$bus_ticket_type')";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Inserted';
 }
}
?>
