<?php
include("header.php");
include("database.php");
extract($_POST);
$rs=mysqli_query($conn,"select * from users where email='$email'");
if (mysqli_num_rows($rs)>0)
{
}
else
{
$query="insert into users (fname, lname, email, password, phone, dob, gender, city) values('$fname','$lname','$email','$pass','$phone', '$dob', '$gender', '$city');";
$rs=mysqli_query($conn,$query);
}
Redirect("login.php",false);
?>