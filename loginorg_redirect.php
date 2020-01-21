<?php
session_start();
session_unset();
$id = $_POST['id'];
include("database.php");
include("header.php");
$query = "SELECT orgid, userid, password FROM organisations WHERE userid = '$id';";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{
	$row = mysqli_fetch_assoc($result);
	if($_POST['pass'] == $row['password'])
	{
		$_SESSION['orgid'] = $row['orgid'];
		unset($_SESSION['login-error']);
		Redirect('all-projects.php', false);

	}
	else
	{
		$_SESSION['login-error'] = 'Wrong Password!';
		Redirect('login-org.php', false);
	}
}
else
{
	$_SESSION['login-error'] = 'No Organisation Found!';
	Redirect('login-org.php', false);
}
?>