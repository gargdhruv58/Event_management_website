<?php
include ("database.php");
include ("logged.php");
include ("header.php");
	$projid = $_SESSION['projid'];
	$userid = $_SESSION['userid'];
	$skill =  $_GET['role'];
	$query = "SELECT level FROM experties WHERE userid = $userid;";
	$result = $conn->query($query);
	if ($result->num_rows > 0)
	{
		$row = $result->fetch_assoc();
		$level = $row['level'];
	}
	$query = "INSERT INTO works VALUES($userid, $projid, '$skill', '$level');";
	$conn->query($query);
	Redirect('res/single-post.html', false);
?>