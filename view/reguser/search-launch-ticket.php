<?php

include "../../model/model.php";

$start_location = $_POST['startLocation'];
$end_location = $_POST['endLocation'];
$journey_date = $_POST['journeyDate'];
$con = getConnection();
$sql = "SELECT * FROM launch_ticket WHERE (launch_starting_location LIKE '%$start_location%') AND (launch_ending_location LIKE '%$end_location%') AND (launch_journey_date LIKE '%$journey_date%')";

$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "	 <tr>
                    <td>" . $row['launch_operator_name'] . "</td>
                    <td>" . $row['launch_journey_date'] . "</td>
                    <td>" . $row['launch_starting_location'] . "</td>
                    <td>" . $row['launch_ending_location'] . "</td>
                    <td>" . $row['launch_arrival_time'] . "</td>
                    <td>" . $row['launch_departure_time'] . "</td>
                    <td>" . $row['launch_available_seats'] . "</td>
                    <td>" . $row['launch_deck_type'] . "</td>
                    <td> ৳" . $row['launch_ticket_price'] . "</td>
                </tr> ";
    }
} else {
    echo "<tr><td>No result found</td></tr>";
}
