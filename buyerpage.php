<html>
	<head>
<link rel="stylesheet" href="styles.css">
		<title>Buyer Page</title>
	</head>

<body>
<h1>Outdoor Swap</h1>	
<h2>Buyer Homepage</h2>
<p><a href="paymentupdate.html">Update Billing</a> <a href="buyeredit.html">Edit Account Details</a> <a href="buyerdelete.html">Delete Account</a></p>
	<form>
<h3>Create Account</h3>	
			First Name:
			<input type="text" name="firstname"><br>
			Last Name:
			<input type="text" name="lastname"><br>
			Username:
			<input type="text" name="Username"><br>
			Password:
			<input type="text" name="Password"><br>
			Confirm Password:
			<input type="text" name="CPassword"><br>
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
<a href="mainpage.html"><h3>Return Home</h3></a>		
</body>
</html>

<?php

require_once 'login.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die("Fatal Error");


$conn->close();

?>




