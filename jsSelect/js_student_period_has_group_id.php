

<?php
		
			require'../conexion.class.php';
			$db= new Conexion();

			$id_ci=$_POST["query_period_has_group_has_student_id"];

			$query="SELECT  id FROM student_has_subject where  id='$id_ci'";
			$res=$db->query($query);
			$option='';
			while($row= mysqli_fetch_array($res)){
				
				$option.= "<option value=\"$row[id]\">$row[id]</option>";
			}
			
			echo $option;


			?>