<?php
$con = mysqli_connect('localhost', 'root', 'root', 'user');
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$contact = $_POST['contact'];
$gender = $_POST['gender'];
$sql = "INSERT INTO userreg('firstName', 'lastName', 'email', 'dob', 'contact', 'gender') VALUES ('$firstName', '$lastName', '$email', '$dob', '$contact', '$gender')";
$execute = mysqli_connect($con, $sql);
?>