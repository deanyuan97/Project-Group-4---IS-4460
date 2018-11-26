<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Edit Item - Outdoor Swap</title>
	<link rel='stylesheet' href="styles.css">

	<!-- Boot Strap Links -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="styles.css" >
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style = "background-color: lightgray">
<?php
include_once 'inc/nav.php';
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
<div class="container-slim text-left bg-white">
	<form method='post' action='processselleredit.php'>
			Item Name:<input type='text' name='name' value='$name'>
			Description:<input type='text' name='description' value='$description'>
			Price:<input type='text' name='price' value='$price'>
			Image:<input type='text' name='IMG' value='$IMG'>
			<input type='submit' value='Update'>
			<input type='hidden' name='update' value='update'>
			<input type='hidden' name='id' value='$id'>
	</form>
	<div class='clear'></div>
</div>
_END;
	}
}

include_once 'inc/footer.php'
?>
</body>
</html>
