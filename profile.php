<html>
<head>
	<meta charset ="utf-8">
		<title> Login </title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>	
</head>

<body>
	<?php
	session_start();
	if($_SESSION) {
		include 'nav.php';
		echo("<p>Welcome, " . $_SESSION['userName'] . ".");
	} else {
		header("location:login.php");
	}
	?>
	

</body>
</html>