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
<title>Update Account - Outdoor Swap</title>
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
		<div class="container-slim bg-white">
		<form method='post' action='processuseredit.php'>
			<h3>Edit Account Details</h3>
						First Name:
						<input type="text" name="firstname" value="<?php echo $user['firstname'] ?>"><br>
						Last Name:
						<input type="text" name="lastname" value="<?php echo $user['lastname'] ?>"><br>
						Password:
						<input type="password" name="password"><br>
						Confirm Password:
						<input type="password" name="cpassword"><br>
						Phone:
						<input type="text" name="phone" value="<?php echo $user['phone'] ?>"><br>
						Billing Address:
						<input type="text" name="address" value="<?php echo $user['billingaddress'] ?>"><br>
						Credit Card #:
						<input type="text" name="creditcard" value="<?php echo $user['creditcard'] ?>"><br>
						Expiration Date:
						<input type="text" name="expdate" value="<?php echo $user['expirationdate'] ?>"><br><br>
						<div class="row">
							<div class="col-sm-12 form-group">
								<button class="btn btn-default pull-right" type="submit">Update</button>
							</div>
						</div>
			</form>
		</div>
	</main>

	<?php include_once 'inc/footer.php' ?>
</body>
</html>
