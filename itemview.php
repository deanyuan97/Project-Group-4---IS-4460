<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Item Details</title>
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
		   <a class="navbar-brand" href="mainpage.php">Outdoor Swap <span class="glyphicon glyphicon-globe logo"></span></a>
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
</body>
</html>


<?php
require_once 'login.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die("Fatal Error");

if(isset($_GET['itemid'])){
	
	$itemid = $_GET['itemid'];
	
	$query = "SELECT * FROM item where itemid=$itemid ";

	$result = $conn->query($query);
	if(!$result) die($conn->error);

	$rows = $result->num_rows;

	for($j=0; $j<$rows; ++$j) {
		$result->data_seek($j);
		$row = $result->fetch_array(MYSQLI_NUM);

echo <<<_END
		<pre>
			<img height='350' width='300' src='$row[4]'></img>
			Item Name: $row[1]
			Description: $row[2]
			Price: $row[3]
			Image: $row[4]
			<br>
			<a href='selleredit.php?itemid=$row[0]'>Edit Post</a>
		</pre>
_END;
}
	
}
?>

<html>
<footer class="container-fluid text-center">
			<button type="button"><a href='sellerview.php'>Return to your Post</a></button>
	</footer>
</html>
