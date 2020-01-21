<?php
session_start();
include("header.php");
unset($_SESSION['userid']);
unset($_SESSION['login-error']);
Redirect('login.php', false);
?>