<html>
	<head>
<link rel="stylesheet" href="styles.css">
		<title>Buyer Page</title>
	</head>

<body>
<h1>Outdoor Swap</h1>	
<a href="Buyer Page.html"><h2>Buyer Information</h2><a>
<form>
<h3>Delete Account</h3>	
			Username:
			<input type="text" name="Username"><br>
			Password:
			<input type="text" name="Password"><br>
			<input type="submit" value="Delete Account">
		</form>
</body>
</html>
<?php

require_once 'login.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die("Fatal Error");


$conn->close();

?>