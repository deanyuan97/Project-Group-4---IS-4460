<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Seller View Page</title>
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

$query = "SELECT * FROM item";

$result = $conn->query($query);
if(!$result) die($conn->error);

$rows = $result->num_rows;

for($j=0; $j<$rows; ++$j) {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);
echo <<<_END
	<div id="services" class="container-fluid text-center">
<pre>
      <img height='350' width='300' src='$row[4]'></img>
      <h4>Name: <a href='itemview.php?itemid=$row[0]'>$row[1]</a></h4>
      <h4>Description: $row[2]</h4>
      <h4>Price: $row[3]</h4>
    </div>
 </pre>
	
</pre>
<form method = 'post' action = 'itemview.php'>
</form>
<form method = 'post' action='sellerdelete.php'>
    <input type='hidden' name ='delete' value='yes'>
    <input type='hidden' name ='itemid' value='$row[0]'>
    <center> <input type='submit' value='Delete posting'></center>
</form>
_END;


}
?>

<html>
<footer class="container-fluid text-center">
			<button type="button"><a href='selleradd.php'>Add a new Posting</a></button>
	</footer>
</html>
