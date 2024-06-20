<?php
$conn = mysqli_connect("localhost","root","","mybase");

// Перевірка підключення
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>