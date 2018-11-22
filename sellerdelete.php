<?php
require_once 'login.php';
$conn=new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die("Fatal Error");

$itemid=$_POST['itemid'];
$query="Delete from item where itemid='$itemid'";
	
	
if ($conn->query($query)===TRUE){
	Echo "Record deleted successfully";
} Else {
	Echo "Error deleting record:" .$conn->error;
	}
	
$conn->close();
	

?>