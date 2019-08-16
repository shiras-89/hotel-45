<?php
session_start();
if(!isset($_SESSION["sess_users"])){
header("Location: ../Admin-Login.php");
exit(); }
?>
