<?php
session_start();

function backout(){
  header("Location: /useredit.php");
}

if(!empty($_POST)){
  include_once "login.php";
  $conn = new mysqli($hn, $un, $pw, $db);
  if ($conn->connect_error) die("Fatal Error");

  $firstname = $conn->real_escape_string($_POST['firstname']);
  $lastname = $conn->real_escape_string($_POST['lastname']);
  $username = $conn->real_escape_string($_POST['username']);
  $password = $conn->real_escape_string($_POST['password']);
  $cpassword = $conn->real_escape_string($_POST['cpassword']);
  $phone = $conn->real_escape_string($_POST['phone']);
  $billingaddress = $conn->real_escape_string($_POST['address']);
  $creditcard = $conn->real_escape_string($_POST['creditcard']);
  $expdate = $conn->real_escape_string($_POST['expdate']);

  if(!empty($password) || !empty($cpassword)){
    if($password == $cpassword){
      $password = password_hash($password, PASSWORD_BCRYPT);
      $query = "UPDATE user SET firstname='$firstname', lastname='$lastname', password='$password', phone='$phone', billingaddress='$billingaddress', creditcard='$creditcard', expirationdate='$expdate' WHERE id=".$_SESSION['userid'];
    } else backout();
  } else {
      $query = "UPDATE user SET firstname='$firstname', lastname='$lastname', phone='$phone', billingaddress='$billingaddress', creditcard='$creditcard', expirationdate='$expdate' WHERE id=".$_SESSION['userid'];
  }

  $result = $conn->query($query);
  if(!$result) die($conn->error);
  header("Location: /profile.php");
  $conn->close();
} else backout();

?>
