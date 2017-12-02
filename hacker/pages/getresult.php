<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/mycss.css">
</head>
<body style="background-image: url('back1.jpg');">
	<center>
		<h1>Your Search Result </h1>
<?php

require("db_connect.php");
$keyword=$_POST["keyword"];

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM med_info WHERE med_name LIKE '%".$keyword."%'" ;

$query=mysqli_query($conn, $sql);
echo "<table>";
echo "<tr><td><b>Medicine Name<b></td> <td> <b>Idle For<b></td> <td> <b>Location </b>  </td></tr>";
while($row = mysqli_fetch_assoc($query))
{
	echo "<tr>";
		echo "<td>".$row['med_name']."</td> <td>" . $row["idle_for"]. "</td><td>".$row["location"]."</td>";
	echo "</tr>";
}
?>
</center>
</body>
</html>
