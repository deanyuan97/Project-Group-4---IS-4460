<?php
require_once 'db.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die("Fatal Error");

if(isset($_POST['update'])){
$id = $_POST['id'];
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];
$IMG = $_POST['IMG'];

$query = "UPDATE item set name = '$name', description = '$description', price = '$price', IMG = '$IMG' where id=$id ";

$result = $conn->query($query);
if (!$result) die($conn->connect_error);
else header("Location: sellerview.php");
}
$conn->close();
?>
