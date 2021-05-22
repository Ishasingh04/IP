<!DOCTYPE html>
<html>
<head>
	<title>PIN Changed</title>
</head>
<body>
	<?php 'db_connect.php'; ?>
	<?php
	//session_start();
	$name="Snigdh";
	//session_destroy();
	?>
	<p>Hello, <?php Print $name ?></p>
	<p>Your PIN has changed</p>
	<button type="button" onclick="location.href='login.php'">GO Back</button>
</body>
</html>