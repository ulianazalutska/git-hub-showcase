<?php
	include('config.php');
	$id=$_GET['id'];
 
	$name=$_POST['name'];
	$lastname=$_POST['lastname'];
    $email=$_POST['email'];
	$phone=$_POST['phone'];
    $address=$_POST['address'];
 
	mysqli_query($conn,"update `users` set name='$name', lastname='$lastname', email='$email', phone='$phone', address='$address' where id='$id'");
	header('location:customers.php');
?>