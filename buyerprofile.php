<html>
	<head>

		<title>Midterm Project Homepage</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="styles.css" > 
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>

<body>
<!-- Navbar -->
		<nav class="navbar navbar-default">
	  <div class="container">
		<div class="navbar-header">
		   <a class="navbar-brand" href="#myPage"><span class="glyphicon glyphicon-home"></span></a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
		  <ul class="nav navbar-nav navbar-right">
			<li><a href="#about">ABOUT</a></li>
			<li><a href="#events">EVENTS</a></li>
			<li><a href="loginpage.php">LOGIN</a></li>
			<li><a href="sellerview.php">SELLER</a></li>
			<li><a href="buyer page.php">BUYER</a></li>
			<li><a href="#pricing">PRICING</a></li>
			<li><a href="#contact">CONTACT</a></li>
		  </ul>
		</div>
	  </div>
	</nav>	
<br>
<h1>Buyer Profile Page</h1>
</body>
</html>

<?php

require_once 'login.php';

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);

$query = 'Select * from buyer';
$result = $conn->query($query);
if(!$result) die($conn->error);

$row_count = $result->num_rows;

for($j=0; $j<$row_count; ++$j){
	$result->data_seek($j);
	$row = $result->fetch_array(MYSQLI_NUM);
	
echo <<<_END
	<pre>
		Buyer ID: <a href='paymentupdate.php?isbn=$row[10]'>$row[0]</a>;
		First Name: $row[1];
		Last Name: $row[2];
		Username: $row[3];
		Password: $row[4];
		Confirmed Password: $row[5];
		Phone: $row[6];
		Billing Address: $row[7];
		Credit Card: $row[8];
		Expiration Date: $row[9];
	</pre>
		</form>
_END;
		
}

$result->close();
$conn->close();


?>