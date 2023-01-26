<?php
$connect = mysqli_connect("localhost", "root", "", "launch_ticket");
if(isset($_POST["launch_operator_name"], $_POST["launch_starting_location"]))
{
 $launch_operator_name = mysqli_real_escape_string($connect, $_POST["launch_operator_name"]);
 $launch_starting_location = mysqli_real_escape_string($connect, $_POST["launch_starting_location"]);
 $launch_ticket_id = mysqli_real_escape_string($connect, $_POST["launch_ticket_id"]);
 $launch_deck_type = mysqli_real_escape_string($connect, $_POST["launch_deck_type"]);
 $launch_arrival_time = mysqli_real_escape_string($connect, $_POST["launch_arrival_time"]);
 $launch_ticket_price = mysqli_real_escape_string($connect, $_POST["launch_ticket_price"]);



 $query = "INSERT INTO register (launch_operator_name, launch_starting_location, launch_ticket_id, launch_arrival_time, launch_ticket_price, launch_deck_type) VALUES('$launch_operator_name', '$launch_starting_location', '$launch_ticket_id', '$launch_arrival_time', '$launch_ticket_price', '$launch_deck_type')";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Inserted';
 }
}
?>
