<?php

include 'conn.php';

$query ="";

$id = $_POST['id'];
$name= $_POST['name'];
$room = $_POST['room'];
$phone = $_POST['phone'];
$email= $_POST['email'];
$course = $_POST['course'];
$chour= $_POST['chour'];
$image= $_POST['image'];
$status= $_POST['status'];

$query = $con -> query("UPDATE sap_user SET name='$name', room='$room',phone='$phone',email='$email',course='$course',chour='$chour',active='$status',image='$image' WHERE id=$id");



?>