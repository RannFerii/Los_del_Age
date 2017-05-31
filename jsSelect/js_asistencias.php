<?php
		
			require'../conexion.class.php';
			$db= new Conexion();

			$id_subject=$_POST["query_cycle"];

			$query="SELECT  id,subject_id,teacher_id,school_cycle_id FROM period_has_group where  ='$id_ci'";
			$res=$db->query($query);
			$option='';
			$teacher='';
			$materia='';
			$ciclo='';


			while($row= mysqli_fetch_array($res)){
				
			
				$materia=$row['subject_id'];
				$teacher=$row['teacher_id'];
				$ciclo=$row['school_cycle_id'];
			}
			
			$query="SELECT  id,nombre_materia FROM subject where  id='$materia'";
			$res=$db->query($query);



		   echo $option;
			?>
