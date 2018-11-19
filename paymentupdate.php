<html>
	<head>
<link rel="stylesheet" href="styles.css">
		<title>Buyer Page</title>
	</head>

<body>
<h1>Outdoor Swap</h1>	
<a href="Buyer Page.html"><h2>Buyer Information</h2></a>
	<form>
<h3>Update Billing Information</h3>	
			Billing Address:
			<input type="text" name="BillingAddress"><br>
			Credit Card #:
			<input type="text" name="CreditCard"><br>
			Expiration Date:
			<input type="text" name="ExpDate"><br>
			<input type="submit" value="Update">
		</form>
</body>
</html>
<?php

require_once 'login.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die("Fatal Error");


$conn->close();

?>