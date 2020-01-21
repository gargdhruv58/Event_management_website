<?php
session_start();
if (!isset($_SESSION['orgid'])) {
  Redirect('login-org.php', false);
}
?>