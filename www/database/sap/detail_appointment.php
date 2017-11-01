
<?php

include 'conn.php';


$id=$_POST['id'];

$query = $con -> query("SELECT * FROM sap_appointmet WHERE id='$id'")->fetch();

$id_lecture= $query['id_lecture'];

$id_student= $query['id_student'];

$lecture = $con -> query("SELECT * FROM sap_user WHERE username='$id_lecture'")->fetch();

$student = $con -> query("SELECT * FROM sap_user WHERE username='$id_student'")->fetch();



?>
<script type="text/javascript">

	var appointment = function(){
		this.id="<?php echo $query['id'] ?>";
		this.id_student="<?php echo $query['id_student'] ?>";
		this.id_lecture="<?php echo $query['id_lecture'] ?>";
		this.name="<?php echo $lecture['name'] ?>";
		this.namestudent="<?php echo $student['name'] ?>";
		this.ids_student="<?php echo $student['id'] ?>";
		this.purpose="<?php echo $query['purpose'] ?>";
		this.location="<?php echo $query['location'] ?>";
		this.date =new Date("<?php echo $query['date'] ?>").toISOString().substring(0, 10);
		this.hour =new Date("<?php echo $query['date'] ?>").toString().substring(16, 18);
		this.minutes =new Date("<?php echo $query['date'] ?>").toISOString().substring(14, 16);
		this.accepted="<?php echo $query['accepted'] ?>";

	};

	var info = new appointment();

</script>
