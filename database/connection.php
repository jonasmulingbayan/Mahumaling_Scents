<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "mahumalingscents";
$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn) {
    die("Error" . mysqli_connect_error());
}

error_reporting(0);


date_default_timezone_set('Asia/Manila');
$currentdate = date('Y-m-d H:i:s');
?>