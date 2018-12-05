<?php session_start();
if($_SESSION['role'] != 'buyer') header("Location: ../mainpage.php");
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>My Orders - Outdoor Swap</title>

	<!-- Bootstrap Links -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="../styles.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body style = "background-color: lightgray;">

<?php require_once 'buyernav.php'; ?>

<div class="container-slim text-left bg-white">
	<h1>My Orders</h1>
</div>

<?php
require_once '../db.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die("Fatal Error");

$query = "SELECT * FROM sale LEFT JOIN item ON sale.item=item.id WHERE sale.user=".$_SESSION['userid'];

$result = $conn->query($query);
if(!$result) die($conn->error);

if($result->num_rows == 0){ ?>
	<div class="container-fluid text-center">
		<h3>No items ordered!</h3>
	</div>
<?php } else {
	while($item = $result->fetch_assoc()){
echo <<<_END
<article class="container-slim text-left bg-white">
  <img height='350' width='300' src='{$item['IMG']}' class='pull-left'></img>
  <h4>Name: {$item['name']}</h4>
  <h4>Description: {$item['description']}</h4>
  <h4>Price: {$item['price']}</h4>
	<div class='itembuttons'>
		<form method='post' action='buyercancel.php'>
				<input type='hidden' name='buy' value='yes'>
				<input type='hidden' name='itemid' value='{$item['id']}'>
				<input type='submit' value='Cancel' class="btn btn-success">
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
