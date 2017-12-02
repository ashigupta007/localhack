<?php

session_start();

require("db_connect.php");

$med_name=$_POST["med_name"];
$barcode=$_POST["barcode"];
$idle=$_POST["idle_for"];
$email=$_SESSION["email"];
$location=$_SESSION["location"];


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql="INSERT into med_info (med_name, barcode, idle_for, email, location) VALUES ('".$med_name."', '".$barcode."', '".$idle."','".$email."','".$location."')";

if (mysqli_query($conn, $sql)) 
{
    header("location:main.php");
}
else
{
	header("location:register_unsuccessful.html");
}

?>