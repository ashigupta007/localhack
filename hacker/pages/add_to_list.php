<?php
 session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>
	Add Med to your store list	
	</title>
	<link rel="stylesheet" type="text/css" href="../css/buttona.css">
	<link rel="stylesheet" type="text/css" href="../css/mycss.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Jura" rel="stylesheet"> 
</head>
<body style="background-image: url('back1.jpg'); background-size: 1480px 720px";>
	<h1> <i class="fa fa-plus-square fa-1x" aria-hidden="true" style="color:#8B1A1A; vertical-align: middle;"><font color="#43ABC9"></i> Add Medicine to Your List</h1>

	<form action="add_med.php" method="POST">
		<center>
		 <input type="text" name="med_name" placeholder="Medicine Name" class="txt-sml">
		 <input type="text" name="barcode" placeholder="barcode" class="txt-sml">
		 <input type="text" name="idle_for" placeholder="Idle For" class="txt-sml"><br>

		 <input type="submit" name="submit" value="Add Medicine" class="bttn-gradient bttn-md bttn-primary">
		</center>
	</form>
	<hr>

	<a href="delete_list.php"><font color="red";><u>Remove any medicine from your store-List</a></u>
	<br><br>
	<a href="main.php"><u><font color="Green";>Go back to home page</a></u>
</body>
</html>