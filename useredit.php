<?php session_start(); ?>
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
			<a href="profile.php"><h1>Buyer Information</h1></a>
		<form method='post' action='processusercreate.php'>
			<h3>Edit Account Details</h3>
						First Name:
						<input type="text" name="firstname"><br>
						Last Name:
						<input type="text" name="lastname"><br>
						Username:
						<input type="text" name="username"><br>
						Password:
						<input type="password" name="password"><br>
						Confirm Password:
						<input type="password" name="cpassword"><br>
						Phone:
						<input type="text" name="phone"><br>
						Billing Address:
						<input type="text" name="address"><br>
						Credit Card #:
						<input type="text" name="creditcard"><br>
						Expiration Date:
						<input type="text" name="expdate"><br><br>
						<div class="row">
							<div class="col-sm-12 form-group">
								<input type='hidden' name='type' value='<?php echo $_SESSION['role'] ?>'>
								<button class="btn btn-default pull-right" type="submit">Update</button>
							</div>
						</div>
			</form>
		</div>
	</main>

	<?php include_once 'inc/footer.php' ?>
</body>
</html>
