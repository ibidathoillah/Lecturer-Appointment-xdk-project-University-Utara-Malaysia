<?php

include 'conn.php';

$query ="";

$id = $_POST['id'];
$name= $_POST['name'];
$phone = $_POST['phone'];
$email= $_POST['email'];
$image= $_POST['image'];


$query = $con -> query("UPDATE sap_user SET name='$name', phone='$phone',email='$email',active='1',image='$image' WHERE id=$id");



?>