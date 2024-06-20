<?php
	include('config.php');
 
	$name=$_POST['name'];
	$lastname=$_POST['lastname'];
    $email=$_POST['email'];
	$phone=$_POST['phone'];
    $address=$_POST['address'];
 
	mysqli_query($conn,"insert into `users` (name,lastname,email,phone,address) values ('$name','$lastname','$email','$phone','$address')");
	header('location:customers.php');
 
?>