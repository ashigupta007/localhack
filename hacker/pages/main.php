<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>

	<link rel="stylesheet" type="text/css" href="../css/mycss.css">
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">


</head>
<body style="background-image: url('back1.jpg');">
	<hr>
	<h1><i class="fa fa-plus-square fa-1x" aria-hidden="true" style="color:#8B1A1A; vertical-align: middle;"></i> <?php echo $_SESSION["Store_name"]?></h1>

	<br>
	<center>
		<h3>Your Medicine list..</h3>
	<?php
	$email=$_SESSION["email"];

	require("db_connect.php");

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if (!$conn) 
	{
    	die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "SELECT * FROM med_info WHERE email='".$email."'" ;
	$query=mysqli_query($conn, $sql);
	$num_row=mysqli_num_rows($query);
	echo "<table>";
	while($row = mysqli_fetch_assoc($query)) 
	{

	
			echo "<tr>";
				echo "<td>".$row['med_name']."</td> <td>" . $row["idle_for"]. "</td><td>".$row["barcode"]."</td>";
			echo "</tr>";
	}
	echo "</table>";
	?>
</center>
	<hr>

	<a href="delete_list.php">Remove any medicine from your store-List</a>
	<br><br>
	<a href="add_to_list.php">Add Medicine to the store-list</a>

	<br><br><br>
	<a href="logout.php"><button>Log Out</button></a>
</body>
</html>