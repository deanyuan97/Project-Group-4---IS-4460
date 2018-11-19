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


if(isset($_GET['BillingAddress'])){
	$title = $_GET['BillingAddress'];
	
	$query = "select * from movie where BillingAddress = '$BillingAddress' ";
	
	$result = $conn->query($query);
	if(!$result) die($conn->error);
	
	$row_count = $result->num_rows;

	for($j=0; $j<$row_count; ++$j){
		$result->data_seek($j);
		$row = $result->fetch_array(MYSQLI_NUM);
		
		$BillingAddress = $row[1];
		$CreditCard = $row[2];
		$ExpDate = $row[3];
		
echo <<<_END
		
		<form method='post' action='paymentupdate.php'>
			<pre>
				Title: <input type='text' name='BillingAddress' value='$BillingAddress'>
				Year: <input type='text' name='CreditCard' value='$CreditCard'>
				Rating: <input type='text' name='ExpDate' value='$ExpDate'>
				<input type='submit' value='Update Payment'>
			</pre>		
		</form>		
_END;
		
	}
	
}

if(isset($_POST['BillingAddress'])){
	$BillingAddress = $_POST['BillingAddress'];
	$CreditCard = $_POST['CreditCard'];
	$ExpDate = $_POST['ExpDate'];
	
	
	$query = "UPDATE move set BillingAddress='$BillingAddress', CreditCard='$CreditCard', ExpDate='$ExpDate' where BillingAddress=$BillingAddress ";
	
	$result = $conn->query($query);
	if(!$result) die($conn->error);
	
}


?>
