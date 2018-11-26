<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Edit Item - Outdoor Swap</title>
	<link rel='stylesheet' href="styles.css">

	<!-- Boot Strap Links -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="styles.css" >
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style = "background-color: lightgray">
	<?php include_once 'inc/nav.php' ?>
	<div class="container-slim text-left bg-white">
		<form method='post' action='processselleradd.php'>
				Item Name:<input type='text' name='name'>
				Description:<input type='text' name='description'>
				Price:<input type='text' name='price'>
				Image:<input type='text' name='IMG'>
				<input type='submit' value='Create'>
		</form>
		<div class='clear'></div>
	</div>
	<?php include_once 'inc/footer.php' ?>
</body>
</html>
