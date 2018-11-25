<?php session_start();
if($_SESSION['role'] != 'seller') header("Location: /mainpage.php");
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>My Listings - Outdoor Swap</title>
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

$query = "SELECT * FROM item WHERE user='".$_SESSION['userid']."'";

$result = $conn->query($query);
if(!$result) die($conn->error);

$rows = $result->num_rows;

if(!$rows){ ?>
	<div class="container-fluid text-center">
		<h3>You haven't listed any items yet!</h3>
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
<form method = 'post' action='sellerdelete.php'>
    <input type='hidden' name ='delete' value='yes'>
    <input type='hidden' name ='itemid' value='$row[0]'>
    <center> <input type='submit' value='Delete posting'></center>
</form>
_END;

	}
}
?>

	<div class="container-fluid text-center">
			<button type="button"><a href='selleradd.php'>Add a new Posting</a></button>
	</div>
	<?php include_once 'inc/footer.php' ?>
</body>
</html>
