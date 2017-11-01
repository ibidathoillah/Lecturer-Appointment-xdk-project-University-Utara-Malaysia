<?php
	

include 'conn.php';


$id=$_POST['id'];

$query = $con -> query("DELETE FROM sap_appointmet WHERE id='$id'");


?>