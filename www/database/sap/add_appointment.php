<?php

include 'conn.php';
$ids = $_POST['idstudent'];
$idl = $_POST['idlecture'];
$pur = $_POST['purpose'];
$location= $_POST['location'];
$date = $_POST['date']." ".$_POST['hour'].":".$_POST['minutes'];


$query = $con -> query("INSERT INTO sap_appointmet (`id`,`id_student`, `id_lecture`, `purpose`, `location`, `date`, `accepted`) VALUES('','$ids','$idl','$pur','$location','$date',0)");





?>