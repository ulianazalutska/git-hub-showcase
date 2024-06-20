<?php
session_start();
if(!isset($_SESSION["fullname"])){
header("Location: log.php");
exit(); }
?>