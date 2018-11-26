<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Edit Post</title>
	<link rel='stylesheet' href="styles.css">

	<!-- Boot Strap Links -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="styles.css" >
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<body style = "background-color: lightgray">
<nav class="navbar navbar-default">
		<div class="container">
		<div class="navbar-header">
			 <a class="navbar-brand" href="mainpage.html">Outdoor Swap <span class="glyphicon glyphicon-leaf"></span></a>
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
</head>
</body>
</html>

<?php
require_once 'login.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die("Fatal Error");

if(isset($_GET['id'])){

	$id = $_GET['id'];

	$query = "SELECT * FROM item where id=$id ";
	$result = $conn->query($query);	
	if(!$result) die($conn->error);

	$row_count = $result->num_rows;

	for($j=0; $j<$row_count; ++$j) {
		$result->data_seek($j);
		$row = $result->fetch_array(MYSQLI_NUM);

		$name = $row[1];
		$description = $row[2];
		$price = $row[3];
		$IMG = $row[4];


echo <<<_END
	<pre>
	<form method='post' action='selleredit.php'>
			Item Name:<input type='text' name='name' value='$name'>
			Description:<input type='text' name='description' value='$description'>
			Price:<input type='text' name='price' value='$price'>
			Image:<input type='text' name='IMG' value='$IMG'>
			<input type='submit' value='Update Record'>
			<input type='hidden' name='update' value='update'>
			<input type='hidden' name='id' value='$id'>
	</form>
	</pre>
_END;
}
}
	if(isset($_POST['update'])){
	$id = $_POST['id'];
	$name = $_POST['name'];
	$description = $_POST['description'];
	$price = $_POST['price'];
	$IMG = $_POST['IMG'];

	$query = "UPDATE item set name = '$name', description = '$description', price = '$price', IMG = '$IMG' where id=$id ";


	$result = $conn->query($query);
	if (!$result) die($conn->connect_error);
}
$conn->close();


?>
