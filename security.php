<?php

session_start();

include_once('db_connect.php');
if ($connection) 
{
	//echo "connected";
}
else
{
	header("location: db_connect.php");
}
if (!$_SESSION['email']) {
	header('location: login.php');
}
?>