<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="css/insertar_style.css">
		<title>period_has_group</title>
		<script src="js/asistencias.js"></script>

	</head>
	<body>

		<form class="form-style-4"  method="post"  action="CRUD/create.php" >
		<label align="center">Asistencias</label><br>
		
	    <?php
			require'../conexion.class.php';
			$db= new Conexion();
			$query="SELECT DISTINCT id,nombre_faculty FROM faculty";
			$res=$db->query($query);
			$option='';
			
			while($row= mysqli_fetch_array($res)){
				$option.= "<option value=\"$row[id]\">$row[nombre_faculty]</option>";
				
			}
		?>

		<label>
			<span>Facultad:</span>
				<select  class= "field-slid" name="facultad" id="query_facul" >
			        <option value="-" >Seleccionar</option>
			        <?php echo $option;?>
		         </select>
		</label>
		<br>
		<label>
			<span>Carrera</span>
				<select class= "field-slid" name="carrera" id ="query_carrer">
				<option value="-" >Seleccionar</option>
		        </select>
		</label>
		<label>
			<span>Ciclo escolar</span>
				<select class= "field-slid" name="ciclo_escolar" id ="query_cycle">
				<option value="-" >Seleccionar</option>
		         </select>
		</label>
		<label>
			<span>Periodo</span>
				<select class= "field-slid" name="periodo" id ="query_period">
				<option value="-" >Seleccionar</option>
		         </select>
		</label>

		<label>
			<span>Materia</span>
				<select class= "field-slid" name="materia" id ="query_subject">
				<option value="-" >Seleccionar</option>
		         </select>
		</label>
		

		<label>
			<span>Alumno</span>
				<select class= "field-slid" name="student_id" id="query_student">
				<option value="-" >Seleccionar</option>
		        </select>
		</label>

		<!--ID PERIOD CONECTADO DE CYCLE_HAS_SUBJECT CON STUDENT_HAS_SUBJECT ¡-->
		<select class= "field-slid" id="query_period_has_group_has_student_id"   name="period_has_group_has_student_id" >			     
		</select>
		<label>
			<span>Asistencia</span>
				<select class= "field-slid" name="asistencia" >
				<option value="asistio" >Asistencia</option>
				<option value="retardo" >Retardo</option>
				<option value="falta" >Falta</option>
				<option value="justificante" >Justificante</option>
		         </select>
		</label>

	

		
		
		<label>
		<input type="submit" name="agregar_asistencia" value="Agregar"/>
		</label>
		</form>

		

	</body>
</html>
