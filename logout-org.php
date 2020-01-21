<?php
session_start();
include("header.php");
unset($_SESSION['orgid']);
unset($_SESSION['login-error']);
Redirect('login-org.php', false);
?>