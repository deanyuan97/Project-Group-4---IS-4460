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
		   <a class="navbar-brand" href="#myPage"><span class="glyphicon glyphicon-home"></span></a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
		  <ul class="nav navbar-nav navbar-right">
			<li><a href="#about">ABOUT</a></li>
			<li><a href="#events">EVENTS</a></li>
			<li><a href="loginpage.php">LOGIN</a></li>
			<li><a href="sellerview.php">SELLER</a></li>
			<li><a href="buyer page.php">BUYER</a></li>
			<li><a href="#pricing">PRICING</a></li>
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
<!-- About Page -->
	
	<div id="about" class="container-fluid text-center">
		<div class="row">
			<div class="col-sm-12">
				<h2>About Outdoor Swap</h2><br>
				<h4>Outdoor Swap - Where Adventuers buy and sell high quality outdoor gear</h4><br>
				<p>We provide access to companies who are looking to get their new gear out to true outdoor lovers. "Buyers" get access to exceptional new gear and "Sellers" get to sell their products to adventure lovers who spread the word about what they love.</p>

			</div>
		</div>
	</div>
	
	<!-- Events -->
		<div id="events" class="container-fluid text-center">
  <h2>EVENTS</h2>
  <h4>Follow us on Facebook and Instagram to find out about events near you</h4>
  <br>
  <div class="row">
    <div class="col-sm-6">
      <img src='Images/group-camping.jpg'width='500' height='300' style="width 50"></img>
      <h4>Group Events</h4>
      <p>Join us for one of our monthly group events</p>
    </div>
    <div class="col-sm-6">
    <img src='Images/gear-review.jpg'width='500' height='300' style="width 50"></img>
      <h4>Gear Reviews</h4>
      <p>Join us at a pop-up gear review near you</p>
    </div>
  </div>
</div>

	<!-- Pricing -->
		<div id="pricing" class="container-fluid">
  <div class="text-center">
    <h2>Seller Pricing</h2>
    <h4>Buyers can always browse for free</h4>
  </div>
  <div class="row">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Basic</h1>
        </div>
        <div class="panel-body">
          <p><strong>2</strong> Posts per week</p>
          <p><strong>1</strong> Company listing</p>
          <p><strong>1</strong> Company Bio</p>
        </div>
        <div class="panel-footer">
          <h3>Free</h3>
          <h4>enjoy!</h4>
          <button class="btn btn-lg">Create Account</button>
        </div>
      </div>      
    </div>     
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Pay Monthly</h1>
        </div>
        <div class="panel-body">
         <p><strong>Unlimited</strong> Posts per week</p>
          <p><strong>Unlimited</strong> Company listings</p>
          <p><strong>Unlimited</strong> Company Bios</p>
        </div>
        <div class="panel-footer">
          <h3>$5.99</h3>
          <h4>per month</h4>
          <button class="btn btn-lg">Create Account</button>
        </div>
      </div>      
    </div>       
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Pay Annually</h1>
        </div>
        <div class="panel-body">
           <p><strong>Unlimited</strong> Posts per week</p>
          <p><strong>Unlimited</strong> Company listings</p>
          <p><strong>Unlimited</strong> Company Bios</p>
        </div>
        <div class="panel-footer">
          <h3>$65.00</h3>
          <h4>Annually</h4>
          <button class="btn btn-lg">Create Account</button>
        </div>
      </div>      
    </div>    
  </div>
</div>
	
	<!-- Portfolio -->
	
		<div id="portfolio" class="container-fluid text-center bg-grey">
    
  <h2>What our users say</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"I've never found gear this good for this price anywhere else"<br><span>Anthony G, Avid Camper, Millcreek, UT</span></h4>
      </div>
      <div class="item">
        <h4>"My new favorite website"<br><span>Gabriella G, Tail Runner, Holladay, UT</span></h4>
      </div>
      <div class="item">
        <h4>"I love getting access to our real customers"<br><span>Jason Nesbit, Director, GearSellers</span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
	

	
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

	<!-- Footer -->
		<footer class="container-fluid text-center">
		<a href="#myPage" title="To Top">
			<span class="glyphicon glyphicon-chevron-up"></span>
		</a>
		<p>Bootstrap Theme Made By Group 4 - The Best Group!</p>
	</footer>

</body>
</html>


<?php

require_once 'login.php';

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);

?>


