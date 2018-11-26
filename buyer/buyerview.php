<?php session_start();
if($_SESSION['role'] != 'buyer') header("Location: ../mainpage.php");
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>All Listings - Outdoor Swap</title>

	<!-- Bootstrap Links -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="../styles.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body style = "background-color: lightgray;">

<?php
require_once 'buyernav.php';

require_once '../db.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die("Fatal Error");

$query = "SELECT * FROM item WHERE sold=0";

$result = $conn->query($query);
if(!$result) die($conn->error);

$rows = $result->num_rows;

if(!$rows){ ?>
	<div class="container-fluid text-center">
		<h3>No items listed!</h3>
	</div>
<?php } else {
	for($j=0; $j<$rows; ++$j) {
	    $result->data_seek($j);
	    $row = $result->fetch_array(MYSQLI_NUM);
echo <<<_END
<article class="container-slim text-left bg-white">
  <img height='350' width='300' src='$row[4]' class='pull-left'></img>
  <h4>Name: $row[1]</h4>
  <h4>Description: $row[2]</h4>
  <h4>Price: $row[3]</h4>
	<div class='itembuttons'>
		<form method='post' action='buyerbuy.php'>
				<input type='hidden' name='buy' value='yes'>
				<input type='hidden' name='itemid' value='$row[0]'>
				<input type='submit' value='Purchase' class="btn btn-success">
		</form>
	</div>
	<div class='clear'></div>
</article>
_END;

	}
}
?>
	<?php require_once '../inc/footer.php' ?>
</body>
</html>
