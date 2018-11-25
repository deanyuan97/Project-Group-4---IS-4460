<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Buyer - Add</title>
	<link rel='stylesheet' href="styles.css">

	<!-- Bootstrap Links -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="styles.css" >
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>

<?php include_once 'inc/nav.php' ?>

	<main class="container-fluid text-left bg-grey">
		<div class="container-slim bg-white">
		<h1>Buyer Homepage</h1>
		<p><a href="paymentupdate.php">Update Billing</a> | <a href="buyeredit.php">Edit Account Details</a> | <a href="buyerdelete.php">Delete Account</a></p>
		<form method='post' action='buyerpage.php'>
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
						<div class='clear'></div>
			</form>
		</div>
	</main>

	<?php include_once 'inc/footer.php' ?>
</body>
</html>

<?php

require_once 'login.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die("Fatal Error");

if(isset($_POST['firstname']))
{
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$username = $_POST['Username'];
	$password = $_POST['Password'];
	$cpassword = $_POST['CPassword'];
	$phone = $_POST['Phone'];
	$billingaddress = $_POST['BillingAddress'];
	$creditcard = $_POST['CreditCard'];
	$expdate = $_POST['ExpDate'];

	$query = "INSERT INTO buyer (buyerid, firstname, lastname, buyerusername, buyerpassword, cbuyerpassword, phone, billingaddress, creditcard, experationdate) VALUES(NULL,'$firstname', '$lastname', '$username', '$password', '$cpassword', '$phone', '$billingaddress', '$creditcard', '$expdate')";

	$result = $conn->query($query);
	if(!$result) {
		echo "The buyer account has been created";
	}
		die($conn->error);

}

$conn->close();

?>
