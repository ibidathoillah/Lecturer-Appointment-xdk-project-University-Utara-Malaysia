
<?php

include 'conn.php';

$condition="";
if($_POST['key']!="")
{
	$key= $_POST['key'];
	$condition = "AND (username LIKE '%$key%' OR name LIKE '%$key%'  OR email LIKE '%$key%' ) ";
}


$query = $con -> query("SELECT * FROM sap_user WHERE status=1 $condition");
echo "<table";

while ($data = $query->fetch()) {
	$img= $data['image'];
	?>
	<tr>
	<td width="10px"><img style="border-radius: 50pc" width="40px" height="40px" src="<?php echo $img ?>" onerror="imgError(this);"></td><td>

	<table>
		<tr>
			<td style="border: none;padding:0px">
				<h4><?php echo $data['username'] ?></h4>
			</td>
		</tr>
		<tr>
			<td style="border: none;padding:0px;">
				<?php echo $data['email'] ?>
			</td>
		</tr>
	</table>
	




	</td><td><button class='button button-balanced' onclick="var selected=<?php echo $data['id']; ?>; detail(selected)"> VIEW</button></td>
	</tr>

	<?php
}
echo "</table>";
?>
