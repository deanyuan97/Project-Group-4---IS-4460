<html>
	<head>
<link rel="stylesheet" href="styles.css">
		<title>Buyer Page</title>
	</head>

<body>
<h1>Outdoor Swap</h1>	
<a href="Buyer Page.html"><h2>Buyer Information</h2></a>
<form>
<h3>Edit Account Details</h3>	
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