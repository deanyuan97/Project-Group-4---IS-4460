<?php session_start(); ?>
<html>
	<head>

		<title>Midterm Project Homepage</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="styles.css" >
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>

<body>
	<?php include_once 'inc/nav.php' ?>
<h1>Profile Page</h1>
</body>
</html>

<?php

require_once 'login.php';

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);

$query = "SELECT * FROM user WHERE id='".$conn->real_escape_string($_SESSION['userid'])."' AND type='".$conn->real_escape_string($_SESSION['role'])."'";
$result = $conn->query($query);
if(!$result) die($conn->error);

$row_count = $result->num_rows;

for($j=0; $j<$row_count; ++$j){
	$result->data_seek($j);
	$row = $result->fetch_array(MYSQLI_NUM);

echo <<<_END
	<pre>
		First Name: $row[1]
		Last Name: $row[2]
		Username: $row[3]
		Password: $row[4]
		Phone: $row[5]
		Billing Address: $row[6]
		Credit Card: $row[7]
		Expiration Date: $row[8]
		Type: $row[9]
	</pre>
		</form>
_END;

}

$result->close();
$conn->close();


?>
