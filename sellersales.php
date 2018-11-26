<?php session_start();
if($_SESSION['role'] != 'seller') header("Location: /mainpage.php");
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>My Sales - Outdoor Swap</title>
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

$query = "SELECT * FROM item WHERE item.user=".$_SESSION['userid']." AND sold=1";

$result = $conn->query($query);
if(!$result) die($conn->error);

if($result->num_rows == 0){ ?>
	<div class="container-fluid text-center">
		<h3>No items sold!</h3>
	</div>
<?php } else {
	while($item = $result->fetch_assoc()){
echo <<<_END
<article class="container-slim text-left bg-white">
  <img height='350' width='300' src='{$item['IMG']}' class='pull-left'></img>
  <h4>Name: {$item['name']}</h4>
  <h4>Description: {$item['description']}</h4>
  <h4>Price: {$item['price']}</h4>
  <div class='clear'></div>
</article>
_END;
	}
}
?>
	<?php include_once 'inc/footer.php' ?>
</body>
</html>
