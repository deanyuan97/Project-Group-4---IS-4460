<?php

function backout(){
  header("Location: /usercreate.php");
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
  $type = $conn->real_escape_string($_POST['type']);

  if($_POST['type'] == 'buyer'){
    $type = 'buyer';
  } elseif($_POST['type'] == 'seller') {
    $type = 'seller';
  } else {
    die("Invalid form data");
  }

  if($password == $cpassword){
    $password = password_hash($password, PASSWORD_BCRYPT);
  } else backout();

  $query = "INSERT INTO user (firstname, lastname, username, password, phone, billingaddress, creditcard, expirationdate, type) VALUES ('$firstname', '$lastname', '$username', '$password', '$phone', '$billingaddress', '$creditcard', '$expdate', '$type')";

  $result = $conn->query($query);
  if(!$result) die($conn->error);

  if($result){
    $query = "SELECT * FROM user WHERE username='$username' AND type='$type'";
    $result = $conn->query($query);
    if(!$result) die($conn->error);

    $user = $result->fetch_assoc();
    if(empty($user)) backout();

    session_start();
    $_SESSION['userid'] = $user['id'];
    $_SESSION['role'] = $type;
    $_SESSION['username'] = $user['username'];
    session_write_close();
    header("Location: /mainpage.php");
  }
} else backout();

?>
