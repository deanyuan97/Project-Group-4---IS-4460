<?php session_start(); ?>
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

	<h1><a href="buyerpage.php">Buyer Information</a></h1>
	<form>
	<h3>Delete Account</h3>
			Username:
			<input type="text" name="Username"><br>
			Password:
			<input type="password" name="Password"><br>
			<input type="submit" value="Delete Account">
	</form>
	<?php include_once 'inc/footer.php' ?>
</body>
</html>
<?php

require_once 'login.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die("Fatal Error");


$conn->close();

?>
