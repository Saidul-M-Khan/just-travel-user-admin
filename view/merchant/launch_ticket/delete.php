<?php
$connect = mysqli_connect("localhost", "root", "", "launch_ticket");
if(isset($_POST["id"]))
{
 $query = "DELETE FROM register WHERE id = '".$_POST["id"]."'";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Deleted';
 }
}
?>
