<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>All Listings - Outdoor Swap</title>
	<link rel='stylesheet' href="styles.css">

	<!-- Boot Strap Links -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="styles.css" >
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body style = "background-color: lightgray;">

<?php
include_once 'inc/nav.php';

require_once 'login.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die("Fatal Error");

$query = "SELECT * FROM item";

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
	<div id="services" class="container-fluid text-center">
<pre>
      <img height='350' width='300' src='$row[4]'></img>
      <h4>Name: <a href='itemview.php?itemid=$row[0]'>$row[1]</a></h4>
      <h4>Description: $row[2]</h4>
      <h4>Price: $row[3]</h4>
    </div>
 </pre>

</pre>
_END;

	}
}
?>
	<?php include_once 'inc/footer.php' ?>
</body>
</html>
