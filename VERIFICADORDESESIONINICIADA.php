<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
  header('Location: index1.php');
  exit;
}
?>