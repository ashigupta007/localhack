<?php
session_start();
require("db_connect.php");

$store_name=$_POST["store_name"];
$location=$_POST["location"];
$email=$_POST["email"];
$pass=$_POST["pass"];
$openhrs=$_POST["open-hour"];

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql="INSERT into store_info (store_name, location, email, password, open_hrs) VALUES ('".$store_name."', '".$location."', '".$email."', '".$pass."', '".$openhrs."')";

if (mysqli_query($conn, $sql)) 
{
    header("location:register_success.html");
}
else
{
	header("location:register_unsuccessful.html");
}
?>