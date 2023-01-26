<?php
session_start();
if (isset($_COOKIE['flag'])) {
?>

<?php

    // Create connection
    include '../../../model/db.php';

    $sql = "SELECT * FROM bus_ticket WHERE bus_route LIKE '%" . $_POST['name'] . "%'";
    $result = mysqli_query($connection, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "	
                <tr>
                    <td>" . $row['bus_ticket_id'] . "</td>
                    <td>" . $row['bus_operators_name'] . "</td>
                    <td>" . $row['bus_ticket_type'] . "</td>
                    <td>" . $row['bus_ticket_price'] . "</td>
                    <td>" . $row['bus_ticket_availability'] . "</td>
                    <td>" . $row['bus_available_seat'] . "</td>
                    <td>" . $row['bus_route'] . "</td>
                    <td>" . $row['bus_start_location'] . "</td>
                    <td>" . $row['bus_end_location'] . "</td>
                    <td>" . $row['bus_journey_date'] . "</td>
                    <td>" . $row['bus_arrival_time'] . "</td>
                    <td>" . $row['bus_departure_time'] . "</td>
                    <td><img src=" . $row['image'] . " style=\"width:50px;height:50px;\" > </td>

                </tr> ";
        }
    } else {
        echo "<tr><td>0 result's found</td></tr>";
    }

?>

<?php
} else {
    header('location: ../../control/logout.php');
}
?>