<?php

if(isset($_SESSION["email"]))
{
	header("location:pages/main.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>register your store</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="css/mycss.css">

	<link href="https://fonts.googleapis.com/css?family=Barlow+Condensed" rel="stylesheet"> 
</head>
<body style="background-image:url('back1.jpg');">
	<center>
	<div>
		<i class="fa fa-plus-square fa-1x" aria-hidden="true" style="color:#8B1A1A; vertical-align: middle;"><h1 style="color: #8B1A1A;"> REGISTER YOUR STORE HERE</h1>
		<form action="pages/register.php" method="POST">
			<input type="text" name="store_name" class="txt-sml" placeholder="Store Name">
			<input type="text" name="location" class="txt-sml" placeholder="Location">

			<input type="text" name="email" class="txt-sml" placeholder="Email">
			<input type="password" name="pass" class="txt-sml" placeholder="Password">

			<input type="text" name="open_hour" placeholder="Open Hours" class="txt-sml">

			<input type="submit" name="submit" value="Check In" class="btn">
		</form>
		<hr>

		<h1>Login to the Store</h1>

		<form action="pages/login.php" method="POST">
			<input type="text" name="email" placeholder="Email" class="txt-sml">
			<input type="password" name="pass" placeholder="Password" class="txt-sml">
			<input type="submit" name="login" value="Login" class="btn">
		</form>
	</div>
</center>
</body>
</html>