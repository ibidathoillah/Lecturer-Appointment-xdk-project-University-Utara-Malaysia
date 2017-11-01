<?php

include 'conn.php';

$username = $_POST['username'];
$password = md5($_POST['password']);
$status= $_POST['status'];

if($status)
{
	$loginas='lecture';
}
else
{
	$loginas='student';
}

$data = $con -> query("SELECT COUNT(*) as count FROM sap_user WHERE username='$username' AND password='$password' AND status='$status' ")->fetch();

if($data['count'])
{
	echo $loginas;
}
else
{
	echo '0';
}


?>