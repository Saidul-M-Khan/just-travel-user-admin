<?php

include "../../model/model.php";

$start_location = $_POST['startLocation'];
$end_location = $_POST['endLocation'];
$journey_date = $_POST['journeyDate'];
$conn = mysqli_connect('localhost', 'root', 'root', 'ticket_db');
$con = getConnection();
$sql = "SELECT * FROM bus_ticket WHERE (bus_start_location LIKE '%$start_location%') AND (bus_end_location LIKE '%$end_location%') AND (bus_journey_date LIKE '%$journey_date%')";

$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "	 <tr>
                    <td>" . $row['bus_operators_name'] . "</td>
                    <td>" . $row['bus_journey_date'] . "</td>
                    <td>" . $row['bus_start_location'] . "</td>
                    <td>" . $row['bus_end_location'] . "</td>
                    <td>" . $row['bus_arrival_time'] . "</td>
                    <td>" . $row['bus_departure_time'] . "</td>
                    <td>" . $row['bus_available_seat'] . "</td>
                    <td>" . $row['bus_ticket_type'] . "</td>
                    <td> ৳" . $row['bus_ticket_price'] . "</td>
                </tr> ";
    }
} else {
    echo "<tr><td>No result found</td></tr>";
}
