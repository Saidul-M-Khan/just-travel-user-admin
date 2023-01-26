<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "ticket_db");
$columns = array('airline_name', 'plane_start_location');

$query = "SELECT * FROM air_ticket ";

if(isset($_POST["search"]["value"]))
{
 $query .= '
 WHERE airline_name LIKE "%'.$_POST["search"]["value"].'%"
 OR plane_start_location LIKE "%'.$_POST["search"]["value"].'%"
 ';
}

if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$columns[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].'
 ';
}
else
{
 $query .= 'ORDER BY air_ticket_id DESC ';
}

$query1 = '';

if($_POST["length"] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$number_filter_row = mysqli_num_rows(mysqli_query($connect, $query));

$result = mysqli_query($connect, $query . $query1);

$data = array();

while($row = mysqli_fetch_array($result))
{
 $sub_array = array();
  $sub_array[] = '<div contenteditable class="update" data-id="'.$row["air_ticket_id"].'" data-column="air_ticket_id">' . $row["air_ticket_id"] . '</div>';
  $sub_array[] = '<div contenteditable class="update" data-id="'.$row["air_ticket_id"].'" data-column="air_ticket_type">' . $row["air_ticket_type"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["air_ticket_id"].'" data-column="airline_name">' . $row["airline_name"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["air_ticket_id"].'" data-column="plane_start_location">' . $row["plane_start_location"] . '</div>';
   $sub_array[] = '<div contenteditable class="update" data-id="'.$row["air_ticket_id"].'" data-column="plane_arrival_time">' . $row["plane_arrival_time"] . '</div>';
  $sub_array[] = '<div contenteditable class="update" data-id="'.$row["air_ticket_id"].'" data-column="air_ticket_price">' . $row["air_ticket_price"] . '</div>';

 $sub_array[] = '<button type="button" name="delete" class="btn btn-danger btn-xs delete" id="'.$row["air_ticket_id"].'">Delete</button>';
 $data[] = $sub_array;
}

function get_all_data($connect)
{
 $query = "SELECT * FROM air_ticket";
 $result = mysqli_query($connect, $query);
 return mysqli_num_rows($result);
}

$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  get_all_data($connect),
 "recordsFiltered" => $number_filter_row,
 "data"    => $data
);

echo json_encode($output);

?>
