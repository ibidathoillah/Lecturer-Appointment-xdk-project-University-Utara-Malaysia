<?php

include 'conn.php';

$user= $_POST['uname'];
$p= $_POST['permission'];
if($p=='student')
{
$query = $con -> query("SELECT * FROM sap_appointmet WHERE id_student='$user'");




?>
<script type="text/javascript">
		$(document).ready(function() {			

			var date = new Date();

		
			$('#calendar').fullCalendar({


				header: {
                left: 'prev,next today',
                center: 'title',
                right: 'listMonth,month'
           		},


				events:
				[

				<?php

				$i=0;
				while ($data = $query->fetch()) {
				$id_lecture= $data['id_lecture'];
				$Lecture = $con -> query("SELECT * FROM sap_user WHERE username='$id_lecture'")->fetch();
				?>
				{
					title  : strip("<?php echo $Lecture['name']  ?> (lecture), purpose: <?php echo $data['purpose'] ?>"),
					start  : '<?php echo $data['date']  ?>',
					url : <?php echo $data['id']  ?>
				},
				<?php
				}
				?>
				],
				eventClick: function(event) {
			        if (event.url) {
			            detail(event.url);
			            return false;
			        }
			    }
			})
		});
	</script>

<?php

}

elseif ($p="lecture") {

	$query = $con -> query("SELECT * FROM sap_appointmet WHERE id_lecture='$user'");




?>
<script type="text/javascript">
		$(document).ready(function() {			

			var date = new Date();

		
			$('#calendar').fullCalendar({


				header: {
                left: 'prev,next today',
                center: 'title',
                right: 'listMonth,month'
           		},


				events:
				[

				<?php

				$i=0;
				while ($data = $query->fetch()) {
				$id_student= $data['id_student'];
				$Student = $con -> query("SELECT * FROM sap_user WHERE username='$id_student'")->fetch();
				?>
				{
					title  : strip("<?php echo $Student['name']  ?> (student), purpose: <?php echo $data['purpose'] ?>"),
					start  : '<?php echo $data['date']  ?>',
					url : <?php echo $data['id']  ?>
				},
				<?php
				}
				?>
				],
				eventClick: function(event) {
			        if (event.url) {
			            detail(event.url);
			            return false;
			        }
			    }
			})
		});
	</script>

<?php
}
?>