<nav class="navbar navbar-default">
  <div class="container">
  <div class="navbar-header">
     <a class="navbar-brand" href="mainpage.php">Outdoor Swap <span class="glyphicon glyphicon-globe logo"></span></a>
  </div>
  <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav navbar-right">
      <li><a href="mainpage.php#about">ABOUT</a></li>
      <li><a href="mainpage.php#events">EVENTS</a></li>
      <li><a href="mainpage.php#pricing">PRICING</a></li>
      <li><a href="mainpage.php#contact">CONTACT</a></li>
      <li class="navbar-text">|</li>
      <?php if($_SESSION['role'] == 'seller') { ?>
        <li><a href="sellerview.php">MY LISTINGS</a></li>
        <li class="navbar-text">|</li>
      <?php } elseif($_SESSION['role'] == 'buyer') { ?>
        <li><a href="buyerview.php">ALL LISTINGS</a></li>
        <li class="navbar-text">|</li>
      <?php } ?>
      <?php if($_SESSION['username']) { ?>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $_SESSION['username'] ?>
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="profile.php">Profile</a></li>
            <li><a href="logout.php">Sign out</a></li>
          </ul>
        </li>
      <?php } else { ?>
        <li><a href='loginpage.php'>LOGIN</a></li>
        <li><a href='usercreate.php'>CREATE ACCOUNT</a></li>
      <?php } ?>
    </ul>
  </div>
  </div>
</nav>
