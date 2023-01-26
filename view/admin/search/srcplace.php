<?php
session_start();
if (isset($_COOKIE['flag'])) {
?>

<?php

	// Create connection
	include '../../../model/db.php';

	$sql = "SELECT * FROM places WHERE place_name LIKE '%" . $_POST['name'] . "%'";
	$result = mysqli_query($connection, $sql);
	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			echo "	
                <tr>
                    <td>" . $row['place_id'] . "</td>
                    <td>" . $row['place_name'] . "</td>
                    <td>" . $row['place_description'] . "</td>
                    <td><img src=" . $row['place_image'] . " style=\"width:50px;height:50px;\" > </td>

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