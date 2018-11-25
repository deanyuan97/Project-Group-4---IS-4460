<?php session_start(); ?>
<html>
	<head>

		<title>Outdoor Swap - Login</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="styles.css" >
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>

<body>

	<?php include_once 'inc/nav.php' ?>

<!-- Login -->
<main class="container-fluid bg-grey">
	<div class="container-slim bg-white">
	<form method='post' action='processlogin.php'>
		<h3>Login</h3>
		<div class="row">
			<div class="col-sm-6 form-group">
				<input class="form-control" id="username" name="username" placeholder="Username" type="text" required>
			</div>
			<div class="col-sm-6 form-group">
				<input class="form-control" id="password" name="password" placeholder="Password" type="password" required>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6 form-group pull-right">
				<label class="radio-inline">
					<input type="radio" name="type" value="buyer" checked> Buyer
				</label>
				<label class="radio-inline">
					<input type="radio" name="type" value="seller"> Seller
				</label>
				<button class="btn btn-default pull-right" type="submit">Sign In</button>
			</div>
		</form>
	</div>
</main>

<?php include_once 'inc/footer.php' ?>
</body>
</html>
