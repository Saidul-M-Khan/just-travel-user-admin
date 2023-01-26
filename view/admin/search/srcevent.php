<?php
session_start();
if (isset($_COOKIE['flag'])) {
?>

<?php

    // Create connection
    include '../../../model/db.php';

    $sql = "SELECT * FROM event_ticket WHERE event_location LIKE '%" . $_POST['name'] . "%'";
    $result = mysqli_query($connection, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "	
                <tr>
                    <td>" . $row['event_id'] . "</td>
                    <td>" . $row['event_name'] . "</td>
                    <td>" . $row['event_location'] . "</td>
                    <td>" . $row['event_ticket_price'] . "</td>
                    <td>" . $row['event_details'] . "</td>
                    <td>" . $row['event_start_date'] . "</td>
                    <td>" . $row['event_end_date'] . "</td>
                    <td><img src=" . $row['event_image'] . " style=\"width:50px;height:50px;\" > </td>

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