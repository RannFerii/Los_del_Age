<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="css/insertar_style.css">
		<title>score</title>
		<script src="js/calificaciones.js"></script>
		<script>
			
			$(function(){
				$('#enviar').on('click',function(e){
					e.preventDefault();
					
					var calificacion= $('#calificacion').val();
					var tipo= $('#tipo').val();
					var id= $('#query_period_has_group_has_student_id').val();

					$.ajax({
						type: "POST",
						url:"a_p/cre.php",
						data:('score_calificacion='+calificacion+'&tipo='+tipo+'&id_period_student='+id),
					
						success: function(respuesta){
							if(respuesta==1){
								$('#mensaje').html('Alumno calificado');
								
							}
								else{
								$('#mensaje').html('Calificacion duplicada, intente otra ves');
								$('#calificacion').val("");
							}
						}


					});
				})
			})



		</script>

	</head>
	<body>

		<form class="form-style-4"  method="post"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >
		<label align="center">Calificaciones</label><br>
		
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


		<label>
			<span>Tipo de calificacion</span>
				<select class= "field-slid" name="tipo" id="tipo">
				<option value="-" >Seleccionar</option>
				<option value="Departamental_A">Departamental A</option>
				<option value="Departamental_B">Departamental B</option>
				<option value="Parcial">Parcial</option>
				<option value="Final_A">Vuelta A</option>
				<option value="Final_B">Vuelta B</option>
				
		        </select>
		</label>
			
	    <label>
			<span>Calificacion:</span>
				<input type="text" name="calificacion"  id= "calificacion" required="true" />
		</label>


		 <label>
			<p id="mensaje">j</p>
				
		</label>
	

		
		
		<label>
		<input type="submit" id="enviar" name="agregar_calificaciones" value="Agregar"/>
		</label>
		</form>

		

	</body>
</html>
