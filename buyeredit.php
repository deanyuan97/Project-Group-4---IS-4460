<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Buyer - Edit</title>
	<link rel='stylesheet' href="styles.css">

	<!-- Boot Strap Links -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="styles.css" >
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body style = "background-color: lightgray;">

	<?php include_once 'inc/nav.php' ?>

	<main class="container-slim text-left">
		<a href="buyerpage.php"><h1>Buyer Information</h1></a>
		<form>
			<h3>Edit Account Details</h3>
					First Name:
					<input type="text" name="firstname"><br>
					Last Name:
					<input type="text" name="lastname"><br>
					Username:
					<input type="text" name="Username"><br>
					Password:
					<input type="password" name="Password"><br>
					Confirm Password:
					<input type="text" name="CPassword"><br>
					Phone:
					<input type="text" name="Phone"><br>
					<input type="submit" value="Update">
		</form>
	</main>
</body>
</html>
<?php

require_once 'login.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die("Fatal Error");


$conn->close();

?>
