<?php
session_start();
require_once 'db.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die("Fatal Error");

if(!empty($_POST)){
  $name = $_POST['name'];
  $description = $_POST['description'];
  $price = $_POST['price'];
  $IMG = $_POST['IMG'];

  $query = "INSERT INTO item (name, description, price, IMG, user) VALUES ('$name', '$description', '$price', '$IMG', {$_SESSION['userid']})";

  $result = $conn->query($query);
  if (!$result) die($conn->error);
  else {
    $conn->close();
    header("Location: sellerview.php");
  }
} else die("WTF");
?>
