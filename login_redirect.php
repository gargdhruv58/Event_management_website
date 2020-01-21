<?php
session_start();
$email = $_POST['email'];
include("database.php");
include("header.php");
$query = "SELECT userid, password FROM users WHERE email = '$email';";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{
	$row = mysqli_fetch_assoc($result);
	if($_POST['pass'] == $row['password'])
	{
		$_SESSION['userid'] = $row['userid'];
		unset($_SESSION['login-error']);
		Redirect('my-projects.php', false);

	}
	else
	{
		$_SESSION['login-error'] = 'Wrong Password!';
		Redirect('login.php', false);
	}
}
else
{
	$_SESSION['login-error'] = 'No User Found!';
	Redirect('login.php', false);
}
?>