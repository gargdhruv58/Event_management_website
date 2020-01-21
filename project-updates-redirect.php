<?php
include("database.php");
include("header.php");
include("logged.php");
if (isset($_SESSION['projid']))
{
	$projid = $_SESSION['projid'];
}
else
{
	Redirect("my-projects.php");
}
$userid = $_SESSION['userid'];
$des = $_POST['update'];
$date=date("Y-m-d",strtotime("now"));
$query = "INSERT INTO updates (userid, projid, time, description) VALUES ($userid, $projid, $date, \"" . $des . "\");";
$conn->query($query);
Redirect("project-updates.php?projid=?" . (string)$projid, false);
?>