<?php
require_once 'login.php';
$conn=new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die("Fatal Error");

$itemid=$_POST['itemid'];
$query="DELETE FROM item WHERE id='$itemid'";

if ($conn->query($query)===TRUE){
	header("Location: sellerview.php");
} else {
	die("Error deleting record:" .$conn->error);
}

$conn->close();
?>
