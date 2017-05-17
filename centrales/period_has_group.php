<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="css/insertar_style.css">
		<title>period_has_group</title>
		<script src="js/insertar.js"></script>
		<script src="js/period_has_group.js"></script>

	</head>
	<body>

		<form class="form-style-4"  method="post"  action="CRUD/create.php" >
		<label align="center">perdiod_has_group</label><br>
		
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

	
		<?php
			
			$query2="SELECT DISTINCT id,clave_grupo FROM _group";
			$res2=$db->query($query2);
			$option2='';
			
			while($row= mysqli_fetch_array($res2)){
				$option2.= "<option value=\"$row[id]\">$row[clave_grupo]</option>";
				
			}
		?>

		<label>
			<span>Grupo</span>
				<select class= "field-slid" name="grupo" id ="query_group">
				<option value="-" >Seleccionar</option>
				 <?php echo $option2;?>
		         </select>
		</label>

		<label>
			<span>Materia</span>
				<select class= "field-slid" name="materia" id ="query_subject">
				<option value="-" >Seleccionar</option>
		         </select>
		</label>

		<?php
			
			$query3="SELECT DISTINCT id,nombre FROM teacher";
			$res3=$db->query($query3);
			$option3='';
			
			while($row= mysqli_fetch_array($res3)){
				$option3.= "<option value=\"$row[id]\">$row[nombre]</option>";
				
			}
		?>

		<label>
			<span>Profesor</span>
				<select class= "field-slid" name="profesor" id ="query_teacher">
				<option value="-" >Seleccionar</option>
				 <?php echo $option3?>
		         </select>
		</label>


		<label>
			<span>Dias habiles</span>

			<input type='hidden' value='0' name='lunes'><br>
  			<input type='checkbox' value='1' name='lunes'>lunes<br>
  			<input type='hidden' value='0' name='martes'><br>
  			<input type='checkbox' value='1' name='martes'>martes<br>
  			<input type='hidden' value='0' name='miercoles'><br>
  			<input type='checkbox' value='1' name='miercoles'>miercoles<br>
  			<input type='hidden' value='0' name='jueves'><br>
  			<input type='checkbox' value='1' name='jueves'>jueves<br>
  			<input type='hidden' value='0' name='viernes'><br>
  			<input type='checkbox' value='1' name='viernes'>viernes<br>
  			<input type='hidden' value='0' name='sabado'><br>
  			<input type='checkbox' value='1' name='sabado'>sabado<br>
			

				
		</label>
		
		<label>
		<input type="submit" name="agregar_cycle_has_student" value="Agregar"/>
		</label>
		</form>

		

	</body>
</html>
