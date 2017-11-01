<?php

include 'conn.php';
$id = $_POST['id'];
$pur = $_POST['purpose'];
$location= $_POST['location'];
$date = $_POST['date']." ".$_POST['hour'].":".$_POST['minutes'];


$query = $con -> query("UPDATE sap_appointmet SET purpose='$pur', location='$location', sap_appointmet.date='$date', accepted='0' WHERE id='$id'");



?>