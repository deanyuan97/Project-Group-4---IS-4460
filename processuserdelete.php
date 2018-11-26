<?php
session_start();

function backout(){
  header("Location: userdelete.php");
}

if(!empty($_POST)){
  include_once "login.php";
  $conn = new mysqli($hn, $un, $pw, $db);
  if ($conn->connect_error) die("Fatal Error");

  $password = $conn->real_escape_string($_POST['password']);
  $id = $conn->real_escape_string($_SESSION['userid']);

  $query = "SELECT password FROM user WHERE id=".$id;

  $result = $conn->query($query);
  if(!$result) die($conn->error);

  $dbpassword = $result->fetch_assoc()['password'];

  if(password_verify($password, $dbpassword)){
      $query = "DELETE FROM user WHERE id=".$id;
      $result = $conn->query($query);
      if(!$result) die($conn->error);
      session_destroy();
      header("Location: mainpage.php");
  } else backout();
  $conn->close();
} else backout();

?>
