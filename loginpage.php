<html>
	<head>

		<title>Midterm Project Homepage</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="styles.css" > 
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>

<body>
	
<!-- Navbar -->
		<nav class="navbar navbar-default">
	  <div class="container">
		<div class="navbar-header">
		  <a class="navbar-brand" href="mainpage-test.html"><span class="glyphicon glyphicon-home"></span></a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
		  <ul class="nav navbar-nav navbar-right">
			<li><a href="mainpage.php">HOME</a></li>
			<li><a href="loginpage.php">LOGIN</a></li>
			<li><a href="sellerview.php">SELLER</a></li>
			<li><a href="buyer page.php">BUYER</a></li>
			<li><a href="#contact">CONTACT</a></li>
		  </ul>
		</div>
	  </div>
	</nav>	
	
	<!-- Header -->
	<div class="jumbotron text-center">
		<img src='Images/main_image.jpg' width='500' height='300' style="width 50"></img>
		<h1>Outdoor Swap</h1>
		<p>Where adventuers buy and sell</p>
	</div>	
<!-- Login -->
	
	<div id="login">
	</div>
	<h3>Buyer Login</h3>
	 <div class="col-sm-7">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="username" username="username" placeholder="Username" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="password" name="password" placeholder="Password" type="text" required>
        </div>
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Sign In</button>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<br><br><br>
<h3>Seller Login</h3>
	 <div class="col-sm-7">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="username" username="username" placeholder="Username" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="password" name="password" placeholder="Password" type="text" required>
        </div>
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Sign In</button>
        </div>
      </div>
    </div>
  </div>
</div>

<br><br><br>
<!-- Contact -->
		<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us with any questions</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Salt Lake City, UT</p>
      <p><span class="glyphicon glyphicon-phone"></span> 801-555-5555</p>
      <p><span class="glyphicon glyphicon-envelope"></span> outdoorswap@test.outdoorswap.com</p>
    </div>
    <div class="col-sm-7">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>