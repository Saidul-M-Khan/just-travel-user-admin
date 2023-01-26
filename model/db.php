
<?php

$server_name = "localhost";
$db_username = "root";
$db_password = "root";
$db_name = "just-travel";


if (!function_exists('getConnection')) {
	function getConnection()
	{
		global $server_name;
		global $db_username;
		global $db_password;
		global $db_name;

		$con = mysqli_connect($server_name, $db_username, $db_password, $db_name);
		return $con;
	}
}





global $server_name;
global $db_username;
global $db_password;
global $db_name;

$connection = mysqli_connect($server_name, $db_username, $db_password, $db_name);
$dbconfig = mysqli_select_db($connection, $db_name);

if ($dbconfig) {
	return $connection;
} else {
	echo "Database connection failed";
	return false;
}



?>