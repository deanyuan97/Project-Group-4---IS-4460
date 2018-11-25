<?php

function backout(){
  header("Location: /loginpage.php");
}

if(!empty($_POST)){
  include_once "login.php";
  $conn = new mysqli($hn, $un, $pw, $db);
  if ($conn->connect_error) die("Fatal Error");

  $username = $conn->real_escape_string($_POST['username']);

  if($_POST['type'] == 'buyer'){
    $type = 'buyer';
  } elseif($_POST['type'] == 'seller') {
    $type = 'seller';
  } else {
    die("Invalid form data");
  }

  $query = "SELECT * FROM user WHERE username='$username' AND type='$type'";

  $result = $conn->query($query);
  if(!$result) die($conn->error);

  $user = $result->fetch_assoc();
  if(empty($user)) backout();

  if(password_verify($_POST['password'], $user['password'])){
    session_start();
    $_SESSION['userid'] = $user['id'];
    $_SESSION['role'] = $type;
    $_SESSION['username'] = $user['username'];
    session_write_close();
    header("Location: /mainpage.php");
  }
  $conn->close();
} else backout();

?>
