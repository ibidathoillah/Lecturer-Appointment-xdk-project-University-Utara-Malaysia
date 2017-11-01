<?php

include 'conn.php';
$username = $_POST['username'];
$password = md5($_POST['password']);
$matric = $_POST['matric'];
$school= $_POST['school'];
$email = $_POST['email'];
$status= $_POST['status'];


$query = $con -> query("INSERT INTO sap_user (`id`, `username`, `password`, `matric`, `school`, `email`, `status`,`datesubmit`) VALUES('','$username','$password','$matric','$school','$email','$status',NOW())");





?>