<?php
session_start();
if (isset($_COOKIE['flag'])) {
?>

<?php

	// Create connection
	include '../../../model/db.php';

	$sql = "SELECT * FROM users WHERE username LIKE '%" . $_POST['name'] . "%'";
	$result = mysqli_query($connection, $sql);
	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			echo "	
                <tr>
                    <td>" . $row['id'] . "</td>
                    <td><img src=" . $row['photo'] . " style=\"width:50px;height:50px;\" > </td>
                    <td>" . $row['username'] . "</td>
                    <td>" . $row['role'] . "</td>
                    <td>" . $row['password'] . "</td>
                    <td>" . $row['email'] . "</td>

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