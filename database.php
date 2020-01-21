<?php
$hostname="localhost";
$username="root";
$password="";
$dbname="mydb";
$conn=new mysqli($hostname,$username,$password,$dbname);
if($conn->connect_error){
	die('Could not Connect My Sql:' .mysql_error());
}
?>