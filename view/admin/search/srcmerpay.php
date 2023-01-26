<?php
session_start();
if (isset($_COOKIE['flag'])) {
?>

<?php

	// Create connection
	include '../../../model/db.php';

	$sql = "SELECT * FROM merpay WHERE shopname LIKE '%" . $_POST['name'] . "%'";
	$result = mysqli_query($connection, $sql);
	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			echo "	
                <tr>
                    <td>" . $row['merid'] . "</td>
                    <td>" . $row['mername'] . "</td>
                    <td>" . $row['shopname'] . "</td>
                    <td>" . $row['due'] . "</td>
                    <td>" . $row['status'] . "</td>

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