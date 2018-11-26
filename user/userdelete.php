<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Delete Account - Outdoor Swap</title>

	<!-- Bootstrap Links -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel='stylesheet' href="../styles.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body style = "background-color: lightgray;">

<?php require_once 'usernav.php' ?>

<main class="container-fluid text-left bg-grey">
	<div class="container-slim bg-white">
		<form method='post' action='../process/processuserdelete.php'>
		<h1>Delete Account</h1>
				Verify Password:
				<input type="password" name="password"><br>
				<div class="row">
					<div class="col-sm-12 form-group">
						<br>
						<button class="btn btn-default pull-right" type="submit">Delete Account</button>
					</div>
				</div>
			</form>
	</div>
</main>
	<?php require_once '../inc/footer.php' ?>
</body>
</html>
<?php

require_once '../db.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die("Fatal Error");


$conn->close();

?>
