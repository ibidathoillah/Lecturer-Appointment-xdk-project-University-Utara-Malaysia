<?php
	

include 'conn.php';


$id=$_POST['id'];

$query = $con -> query("UPDATE sap_appointmet SET accepted='2' WHERE id='$id'");


?>