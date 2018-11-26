<nav class="navbar navbar-default">
  <div class="container">
  <div class="navbar-header">
     <a class="navbar-brand" href="../mainpage.php">Outdoor Swap <span class="glyphicon glyphicon-globe logo"></span></a>
  </div>
  <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav navbar-right">
      <li><a href="../mainpage.php#about">ABOUT</a></li>
      <li><a href="../mainpage.php#events">EVENTS</a></li>
      <li><a href="../mainpage.php#pricing">PRICING</a></li>
      <li><a href="../mainpage.php#contact">CONTACT</a></li>
      <li class="navbar-text">|</li>
      <?php if((isset($_SESSION['role']) ? $_SESSION['role'] : null) == 'seller') { ?>
        <li><a href="../seller/sellerview.php">MY LISTINGS</a></li>
        <li class="navbar-text">|</li>
      <?php } if((isset($_SESSION['role']) ? $_SESSION['role'] : null) == 'buyer') { ?>
        <li><a href="buyerview.php">ALL LISTINGS</a></li>
        <li class="navbar-text">|</li>
      <?php } ?>
      <?php if((isset($_SESSION['username']) ? $_SESSION['username'] : null)) { ?>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $_SESSION['username'] ?>
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="../user/profile.php">Profile</a></li>
            <?php
            if($_SESSION['role'] == 'buyer') echo "<li><a href='buyerorders.php'>My Orders</a></li>";
            if($_SESSION['role'] == 'seller') echo "<li><a href='../seller/sellersales.php'>My Sales</a></li>";
            ?>
            <li><a href="../user/useredit.php">Update Account</a></li>
            <li><a href="../user/userdelete.php" id='accountdelete'>Delete Account</a></li>
            <li class="divider"></li>
            <li><a href="../logout.php">Sign out</a></li>
          </ul>
        </li>
      <?php } else { ?>
        <li><a href='../loginpage.php'>LOGIN</a></li>
        <li><a href='../user/usercreate.php'>CREATE ACCOUNT</a></li>
      <?php } ?>
    </ul>
  </div>
  </div>
</nav>
