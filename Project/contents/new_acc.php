<!DOCTYPE html>
<html>
<head>
	<title>Details</title>
</head>
<body>
	<?php include 'db_connect.php'?>

	<?php
	session_start();
	?>
	<p id="user">Hello <?php Print $_SESSION['na'] ?></p>
	<p id="acc">Your account number is: <?php Print $_SESSION['acc'] ?></p>
	<button type="button" onclick="location.href='login.php'">LOGIN</button>
	<?php
	session_destroy();
	?>
</body>
</html>