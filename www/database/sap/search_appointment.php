
<?php

include 'conn.php';





$user= $_POST['uname'];
$p= $_POST['permission'];
if($p=='student')
{

$condition="";
if($_POST['key']!="")
{
	$key= $_POST['key'];
	$condition = "AND (id_lecture LIKE '%$key%' OR purpose LIKE '%$key%'  OR location LIKE '%$key%'  OR date LIKE '%$key%') ";
}


$stat="";
if($_POST['status']!="")
{
	$key2= $_POST['status'];
	$stat = "AND (accepted='$key2') ";
}



$query = $con -> query("SELECT * FROM sap_appointmet WHERE id_student='$user' $condition $stat");
echo "<table";
while ($data = $query->fetch()) {
	$id= $data['id_lecture'];
	$q2 = $con -> query("SELECT name FROM sap_user WHERE username='$id'")->fetch();
	?>
	<tr>
	<td width="10px"><img width="40px" height="40px" 

	<?php
	if($data['accepted']==0){
		echo 'src="img/pending.png"';
	}
	elseif ($data['accepted']==2) {
		echo 'src="img/declined.png"';
	}
	elseif ($data['accepted']==1) {
		echo 'src="img/approved.png"';
	}
	

	?>
	 onerror="imgError(this);"></td><td>

	<table>
		<tr>
			<td style="border: none;padding:0px;">
				<b>Lecture &nbsp&nbsp: </b><?php echo $q2['name'] ?>
			</td>
		</tr>
		<tr>
			<td style="border: none;padding:0px;">
				<b>Location : </b><?php echo $data['location'] ?>
			</td>
		</tr>
		<tr>
			<td style="border: none;padding:0px">
				<b>Date &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</b> <?php echo $data['date'] ?></h4>
			</td>
		</tr>
		
	</table>
	
	</td><td><button class='button button-balanced' onclick="detail(<?php echo $data['id'] ?>)"> VIEW</button></td>
	</tr>

	<?php
}
echo "</table>";

}
else if($p=='lecture')
{

$condition="";
if($_POST['key']!="")
{
	$key= $_POST['key'];
	$condition = "AND (id_student LIKE '%$key%' OR purpose LIKE '%$key%'  OR location LIKE '%$key%'  OR date LIKE '%$key%') ";
}

$stat="";
if($_POST['status']!="")
{
	$key2= $_POST['status'];
	$stat = "AND (accepted='$key2') ";
}



$query = $con -> query("SELECT * FROM sap_appointmet WHERE id_lecture='$user' $condition $stat");
echo "<table";
while ($data = $query->fetch()) {
	$id= $data['id_student'];
	$q2 = $con -> query("SELECT username FROM sap_user WHERE username='$id'")->fetch();
	?>
	<tr>
	<td width="10px"><img width="40px" height="40px"
	
	<?php
	if($data['accepted']==0){
		echo 'src="img/pending.png"';
	}
	elseif ($data['accepted']==2) {
		echo 'src="img/declined.png"';
	}
	elseif ($data['accepted']==1) {
		echo 'src="img/approved.png"';
	}
	

	?>
	  onerror="imgError(this);"></td><td>

	<table>
		<tr>
			<td style="border: none;padding:0px;">
				Student &nbsp&nbsp: <?php echo $q2['username'] ?>
			</td>
			
		</tr>
		<tr>
			<td style="border: none;padding:0px;">
				Location &nbsp: <?php echo $data['location'] ?>
			</td>
		</tr>
		<tr>
			<td style="border: none;padding:0px">
				Date &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp : <?php echo $data['date'] ?></h4>
			</td>
		</tr>
	</table>
	


	
	</td><td><button class='button button-balanced' onclick="detail(<?php echo $data['id'] ?>)"> VIEW</button></td>
	</tr>

	<?php	
}
echo "</table>";

}
?>
