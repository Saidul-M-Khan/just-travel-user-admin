<?php
session_start();
if (isset($_COOKIE['flag'])) {
?>

<?php

    // Create connection
    include '../../../model/db.php';

    $sql = "SELECT * FROM launch_ticket WHERE launch_route LIKE '%" . $_POST['name'] . "%'";
    $result = mysqli_query($connection, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "	
                <tr>
                    <td>" . $row['launch_ticket_id'] . "</td>
                    <td>" . $row['launch_operator_name'] . "</td>
                    <td>" . $row['launch_route'] . "</td>
                    <td>" . $row['launch_deck_type'] . "</td>
                    <td>" . $row['launch_journey_date'] . "</td>
                    <td>" . $row['launch_ticket_price'] . "</td>
                    <td>" . $row['launch_ticket_availability'] . "</td>
                    <td>" . $row['launch_available_seats'] . "</td>
                    <td>" . $row['launch_departure_time'] . "</td>
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