<?php
include("database.php");
include("header.php");
extract($_POST);
$query = "INSERT INTO projects (name, description, startdate, duration) VALUES ('$name', '$desc', '$date', '$duration');";
$conn->query($query);
Redirect("res/single-post.html",false);
?>