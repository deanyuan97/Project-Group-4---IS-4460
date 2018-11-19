<link rel="stylesheet" href="styles.css">
		<title>Buyer Page</title>
	</head>

<body>
<h1>Outdoor Swap</h1>	
<a href="Buyer Page.html"><h2>Buyer Information</h2></a>
	
</body>
</html>
<?php

require_once 'login.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die("Fatal Error");


if(isset($_GET['BillingAddress'])){
	$title = $_GET['BillingAddress'];
	
	$query = "select * from buyer where BillingAddress = '$BillingAddress' ";
	
	$result = $conn->query($query);
	if(!$result) die($conn->error);
	
	$row_count = $result->num_rows;

	for($j=0; $j<$row_count; ++$j){
		$result->data_seek($j);
		$row = $result->fetch_array(MYSQLI_NUM);
		
		$BillingAddress = $row[1];
		$CreditCard = $row[2];
		$Experationdate = $row[3];
		
echo <<<_END
		<pre>
		<form method='post' action='paymentupdate.php'>
				Billing Address: <input type='text' name='BillingAddress' value='$BillingAddress'>
				Credit Card: <input type='text' name='CreditCard' value='$CreditCard'>
				Experation Date: <input type='text' name='ExperationDate' value='$ExperationDate'>
				<input type='submit' value='Update Payment'>
			</pre>		
		</form>		
_END;
		
	}
	
}

if(isset($_POST['BillingAddress'])){
	$BillingAddress = $_POST['BillingAddress'];
	$CreditCard = $_POST['CreditCard'];
	$ExperationDate = $_POST['ExperationDate'];
	
	
	$query = "UPDATE buyer set BillingAddress='$BillingAddress', CreditCard='$CreditCard', ExperationDate='$ExperationDate' where BillingAddress=$BillingAddress ";
	
	$result = $conn->query($query);
	if(!$result) die($conn->error);
	
}


?>
