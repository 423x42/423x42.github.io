<?php 
$login = $_POST['login'];
$pas = $_POST['password'];
if ($login == 'admin' && $pas == "admin9963")
  {
  session_start();
  $_SESSION['admin'] = true;
  $script = '329fs94Sc984s.php';
  }
else
$script = 'admin.php';
header("Location: $script");
?>