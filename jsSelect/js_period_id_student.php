	<?php
		
			require'../conexion.class.php';
			$db= new Conexion();

			$id=$_POST["query_cycle_has_subject"];
			$query="SELECT  id,student_id FROM student_has_subject where  period_has_group_id='$id'";
			$res=$db->query($query);
			
			$contador=0;

			while($row= mysqli_fetch_array($res)){

				$student_id[$contador]=$row['student_id'];
				$contador=$contador + 1;
				
				
			}

			$longitud= count($student_id);
			
				for( $i=0;$i<$longitud;$i++)
			{
				echo $student_id[$i];
			$query="SELECT  id,nombre FROM student where  id='$student_id[$i]'";
			$res=$db->query($query);


				while($row= mysqli_fetch_array($res)){

					$option.= "<option >$row[nombre]</option><br>";
				}

				
			}

			
			echo $option;
		?>