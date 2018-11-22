<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Add Post</title>
	<link rel='stylesheet' href="styles.css">

	<!-- Boot Strap Links -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="styles.css" >
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body style = "background-color: lightgray">

	<!-- Navbar -->
	<nav class="navbar navbar-default">
		<div class="container">
		<div class="navbar-header">
			 <a class="navbar-brand" href="#myPage">Outdoor Swap <span class="glyphicon glyphicon-leaf"></span></a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#login">LOGIN</a></li>
			<li><a href="sellerview.php">LISTINGS</a></li>
			<li><a href="#services">SERVICES</a></li>
			<li><a href="#subsciption">SUBSCRIPTION</a></li>
			<li><a href="#contact">CONTACT</a></li>
			<li><a href="#about">ABOUT</a></li>
			</ul>
		</div>
		</div>
	</nav>
	<div>
		<form method='post' action='selleradd.php'>
			<input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
			<input class="form-control" id="description" name="description" placeholder="Description" type="text" required>
			<input class="form-control" id="price" name="price" placeholder="Price" type="text" required>
			<input class="form-control" id="IMG" name="IMG" placeholder="Image" type="text" required>
			<input type = 'submit' value='Add Post'>
		</form>
	</div>
	</main>
</body>
</html>

<?php
require_once 'login.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die("Fatal Error");

if (isset($_POST['name']))
{
	$name=$_POST['name'];
	$description=$_POST['description'];
	$price=$_POST['price'];
	$IMG=$_POST['IMG'];

	$query="INSERT into item (name, description, price, IMG)
	values ('$name', '$description', '$price', '$IMG')";

	$result=$conn->query($query);
	if(!$result) die($conn->error);
	
}

$conn->close();


?>