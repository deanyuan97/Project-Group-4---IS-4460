<?php session_start();

require_once 'login.php';

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);

$query = "SELECT * FROM user WHERE id='".$conn->real_escape_string($_SESSION['userid'])."' AND type='".$conn->real_escape_string($_SESSION['role'])."'";
$result = $conn->query($query);
if(!$result) die($conn->error);

$user = $result->fetch_assoc();
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Profile - Outdoor Swap</title>
	<link rel='stylesheet' href="styles.css">

	<!-- Bootstrap Links -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="styles.css" >
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>

<?php include_once 'inc/nav.php' ?>

	<main class="container-fluid text-left bg-grey">
		<div class="container-slim bg-white bigtext">
			<h1>Profile</h1>
			Name: <?php echo $user['firstname'] ?> <?php echo $user['lastname'] ?><br>
			Phone: <?php echo $user['phone'] ?><br>
			Billing Address: <?php echo $user['billingaddress'] ?><br>
			Credit Card #: <?php echo $user['creditcard'] ?><br>
			Expiration Date: <?php echo $user['expirationdate'] ?><br>
		</div>
	</main>

	<?php include_once 'inc/footer.php' ?>
</body>
</html>
