<?php
		
			require'../conexion.class.php';
			$db= new Conexion();

			$id_ci=$_POST["query_ciclo_materia"];

			$query="SELECT  id,subject_id,teacher_id,school_cycle_id FROM period_has_group where  id='$id_ci'";
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

			while($row= mysqli_fetch_array($res)){
				
				$option.= "<option >$row[nombre_materia]</option><br>";
				
			}

			$query="SELECT  id,nombre FROM teacher where  id='$teacher'";
			$res=$db->query($query);

			while($row= mysqli_fetch_array($res)){

				$option.= "<option >Profesor: </option>";
				$option.= "<option >$row[nombre]</option><br>";
				
			}

			$query="SELECT  id,nombre_ciclo FROM school_cycle where  id='$ciclo'";
			$res=$db->query($query);

			while($row= mysqli_fetch_array($res)){

				$option.= "<option >Ciclo escolar: </option>";
				$option.= "<option >$row[nombre_ciclo]</option>";
				
			}

echo $option;
			?>
