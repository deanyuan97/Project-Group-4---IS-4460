<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Seller View Page</title>
	<link rel='stylesheet' href="styles.css">

	<!-- Boot Strap Links -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="styles.css" > 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

</head>

<body style = "background-color: lightgray;">

	<!-- Navbar -->
	<nav class="navbar navbar-default">
	  <div class="container">
		<div class="navbar-header">
		   <a class="navbar-brand" href="#myPage">Outdoor Swap <span class="glyphicon glyphicon-globe logo"></span></a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
		  <ul class="nav navbar-nav navbar-right">
		  	<li><a href="#login">LOGIN</a></li>
			<li><a href="#listings">LISTINGS</a></li>
			<li><a href="#services">SERVICES</a></li>
			<li><a href="#subsciption">SUBSCRIPTION</a></li>
			<li><a href="#contact">CONTACT</a></li>
			<li><a href="#about">ABOUT</a></li>
		  </ul>
		</div>
	  </div>
	</nav>

<!--Postings-->
<div id="services" class="container-fluid text-center">
  <h2>Your Postings</h2>
  <br>
  <div class="row">
    <div class="col-sm-4">
     <img src = "Images/HydroFlask.jpg" alt="HydroFlask" style = "border:2px solid black ;width:150px; height:200px">
      <h4>Hydro Flask</h4>
      <p><a href="SellerEdit.html">Edit</a><br>
      <a href="SellerDelete.html">Delete</a></p>
    </div>
    <div class="col-sm-4">
      <img src = "Images/BackPack.jpg" alt="BackPack" style = "border:2px solid black ;width:150px; height:200px">
      <h4>BackPack</h4>
      <p><a href="SellerEdit.html">Edit</a><br>
      <a href="SellerDelete.html">Delete</a></p>
    </div>
    <div class="col-sm-4">
      <img src = "Images/HikingShoes.jpg" alt="HikingShoes" style = "border:2px solid black ;width:250px; height:200px">
      <h4>Hiking Shoes</h4>
      <p><a href="SellerEdit.html">Edit</a><br>
      <a href="SellerDelete.html">Delete</a></p>
    </div>
  </div>	
</div>

<!-- Add Posting -->
<footer class="container-fluid text-center">
			<p><a href="SellerAdd.html">Add a New Posting</a></p>
	</footer>


</body>
</html>