<?php
session_start();
if (!isset($_SESSION['userid'])) {
  Redirect('login.php', false);
}
?>