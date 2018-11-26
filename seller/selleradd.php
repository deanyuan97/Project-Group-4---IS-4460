<?php session_start();
if($_SESSION['role'] != 'seller') header("Location: ../mainpage.php");
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Edit Item - Outdoor Swap</title>

	<!-- Bootstrap Links -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="../styles.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style = "background-color: lightgray">
	<?php require_once 'sellernav.php' ?>
	<div class="container-slim text-left bg-white">
		<form method='post' action='../process/processselleradd.php'>
				Item Name:<input type='text' name='name'>
				Description:<input type='text' name='description'>
				Price:<input type='text' name='price'>
				Image:<input type='text' name='IMG'>
				<input type='submit' value='Create'>
		</form>
		<div class='clear'></div>
	</div>
	<?php require_once '../inc/footer.php' ?>
</body>
</html>
