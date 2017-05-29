<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="css/insertar_style.css">
		<title>period_has_group</title>
		<script src="js/student_has_subject.js"></script>

	</head>
	<body>

		<form class="form-style-4"  method="post"  action="CRUD/create.php" >
		<label align="center">student_has_subject</label><br>
		
		<?php
			require'../conexion.class.php';
			$db= new Conexion();
			$query="SELECT DISTINCT id, subject_id, teacher_id,school_cycle_id FROM period_has_group";
			$res=$db->query($query);
			$option='';
		
			
			while($row= mysqli_fetch_array($res)){
				$option.= "<option value=\"$row[id]\">$row[id]</option>";
				
				
			}
		?>

		<label>
			<span>Ciclo- Materia:</span>
				<select  class= "field-slid" name="cycle_has_subject_id" id="query_ciclo_materia" >
			        <option value="-" >Seleccionar</option>
			        <?php echo $option;?>

		         </select>

		        
		</label>
		<br>
		<label>
			<span>Materia:</span>
				<p  id="query_materia" >
			        
			        
		         </p>
		</label>
		<br>

	
	
		<?php
			
			$query2="SELECT DISTINCT id,nombre FROM student";
			$res2=$db->query($query2);
			$option2='';
			
			while($row= mysqli_fetch_array($res2)){
				$option2.= "<option value=\"$row[id]\">$row[nombre]</option>";
				
			}
		?>

		<label>
			<span>Alumno</span>
				<select class= "field-slid" name="student_id" id ="quer">
				<option value="-" >Seleccionar</option>
				<?php echo $option2;?>
		        </select>
		</label>

		<label>
			<span>Tipo</span>
				<select class= "field-slid" name="tipo" id ="query_subject">
				<option value="normal" >Normal</option>
				<option value="repetidor" >Repetidor</option>
		         </select>
		</label>

		
		
		<label>
		<input type="submit" name="agregar_student_has_subject" value="Agregar"/>
		</label>
		</form>

		

	</body>
</html>
