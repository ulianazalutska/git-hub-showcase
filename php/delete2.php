<?php
	$id=$_GET['id'];
	include('config.php');
	mysqli_query($conn,"delete from `users` where id='$id'");
	header('location:customers2.php');
?>