<?php
session_start();
require_once '../db.php';
$conn=new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die("Fatal Error");

$itemid=$conn->real_escape_string($_POST['itemid']);
$userid=$conn->real_escape_string($_SESSION['userid']);
$query="DELETE FROM sale WHERE item=$itemid";

if ($conn->query($query)===TRUE){
	$query="UPDATE item SET sold=0 WHERE id=".$itemid;
	if ($conn->query($query)===TRUE){
		header("Location: buyerorders.php");
	} else {
		die("Error:" .$conn->error);
	}
} else {
	die("Error:" .$conn->error);
}

$conn->close();
?>
