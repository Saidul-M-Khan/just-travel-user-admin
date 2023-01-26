<?php
$connect = mysqli_connect("localhost", "root", "", "ticket_db");
if(isset($_POST["id"]))
{
 $query = "DELETE FROM air_ticket WHERE id = '".$_POST["air_ticket_id"]."'";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Deleted';
 }
}
?>
