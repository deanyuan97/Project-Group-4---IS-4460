<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Buyer - Add</title>
	<link rel='stylesheet' href="styles.css">

	<!-- Boot Strap Links -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="styles.css" >
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body style = "background-color: lightgray;">

	<!-- Navbar -->
	<nav class="navbar navbar-default">
		<div class="container">
		<div class="navbar-header">
			 <a class="navbar-brand" href="#myPage">Outdoor Swap <span class="glyphicon glyphicon-leaf"></span></a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#login">LOGIN</a></li>
			<li><a href="#listings">LISTINGS</a></li>
			<li><a href="#services">SERVICES</a></li>
			<li><a href="#subsciption">SUBSCRIPTION</a></li>
			<li><a href="#contact">CONTACT</a></li>
			<li><a href="#about">ABOUT</a></li>
			</ul>
		</div>
		</div>
	</nav>

	<main class="container-slim text-left">
		<h1>Buyer Homepage</h1>
		<p><a href="paymentupdate.html">Update Billing</a> | <a href="buyeredit.html">Edit Account Details</a> | <a href="buyerdelete.html">Delete Account</a></p>
		<form>
			<h3>Create Account</h3>
						First Name:
						<input type="text" name="firstname"><br>
						Last Name:
						<input type="text" name="lastname"><br>
						Username:
						<input type="text" name="Username"><br>
						Password:
						<input type="password" name="Password"><br>
						Confirm Password:
						<input type="password" name="CPassword"><br>
						Phone:
						<input type="text" name="Phone"><br>
						Billing Address:
						<input type="text" name="BillingAddress"><br>
						Credit Card #:
						<input type="text" name="CreditCard"><br>
						Expiration Date:
						<input type="text" name="ExpDate"><br>
						<input type="submit" value="Create Account">
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
