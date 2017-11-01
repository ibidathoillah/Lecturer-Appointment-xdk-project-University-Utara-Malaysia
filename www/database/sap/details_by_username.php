
<?php

include 'conn.php';


$id=$_POST['id'];

$query = $con -> query("SELECT * FROM sap_user WHERE username='$id'")->fetch();

?>
<script type="text/javascript">

	var user = function(){
		this.id="<?php echo $query['id'] ?>";
		this.username="<?php echo $query['username'] ?>";
		this.name="<?php echo $query['name'] ?>";
		this.password="<?php echo $query['password'] ?>";
		this.matric="<?php echo $query['matric'] ?>";
		this.school="<?php echo $query['school'] ?>";
		this.email="<?php echo $query['email'] ?>";
		this.phone="<?php echo $query['phone'] ?>";
		this.room="<?php echo $query['room'] ?>";
		this.course="<?php echo $query['course'] ?>";
		this.chour="<?php echo $query['chour'] ?>";
		this.image="<?php echo $query['image'] ?>";
		this.active="<?php echo $query['active'] ?>";
		this.datesubmit="<?php echo $query['datesubmit'] ?>";

	};

	var info = new user();

</script>
