<?php

include "../../model/model.php";

$start_location = $_POST['startLocation'];
$end_location = $_POST['endLocation'];
$journey_date = $_POST['journeyDate'];
$conn = mysqli_connect('localhost', 'root', 'root', 'ticket_db');
$con = getConnection();
$sql = "SELECT * FROM air_ticket WHERE (plane_start_location LIKE '%$start_location%') AND (plane_end_location LIKE '%$end_location%') AND (plane_journey_date LIKE '%$journey_date%')";

$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "	 <tr>
                    <td>" . $row['airline_name'] . "</td>
                    <td>" . $row['plane_journey_date'] . "</td>
                    <td>" . $row['plane_start_location'] . "</td>
                    <td>" . $row['plane_end_location'] . "</td>
                    <td>" . $row['plane_arrival_time'] . "</td>
                    <td>" . $row['plane_departure_time'] . "</td>
                    <td>" . $row['plane_available_seat'] . "</td>
                    <td>" . $row['air_ticket_type'] . "</td>
                    <td> ৳" . $row['air_ticket_price'] . "</td>
                </tr> ";
    }
} else {
    echo "<tr><td>No result found</td></tr>";
}
