<?php
	

include 'conn.php';


$id=$_POST['id'];

$query = $con -> query("UPDATE sap_appointmet SET accepted='1' WHERE id='$id'");


?>