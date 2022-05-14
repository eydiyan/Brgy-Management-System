<?php

$server_name = "localhost";
$db_username = "root";
$db_password = "admin1234";
$db_name = "barangay_profiling";

$db = mysqli_connect($server_name, $db_username, $db_password, $db_name);
$connection = mysqli_select_db($db, $db_name);
if ($connection) {
	// code...
}
else
{
	echo "DATABASE CONNECTION FAILED";
}
?>