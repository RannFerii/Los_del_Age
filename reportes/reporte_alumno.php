<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="css/insertar_style.css">
		<title>Reportes Alumnos</title>
		<script src="js/insertar.js"></script>

	</head>
	<body>

		<form class="form-style-4"  method="post"  action="reportes/generar_reportes_alumno.php" >
		<label align="center">Reporte de Alumno</label><br>
	
		<?php
				require'../conexion.class.php';
			$db= new Conexion();	
			$query3="SELECT DISTINCT id,nombre,apellido_paterno,apellido_materno FROM student";
			$res3=$db->query($query3);
			$option3='';
			
			while($row= mysqli_fetch_array($res3)){
				$option3.= "<option value=\"$row[id]\">$row[nombre] $row[apellido_paterno] $row[apellido_materno]</option>";
				
			}
		?>

		<label>
			<span>Alumno</span>
				<select class= "field-slid" name="alumno" id ="query_alumno">
				<option value="-" >Seleccionar</option>
				 <?php echo $option3?>
		         </select>
		</label>
		<input id="opcion" type="hidden" name="OpcionEscogida">
		<input id="enviar" type="submit" name="Enviar" value="Generar Reporte">
		</form>
		<script>
			$(function(){
				var btn=$("#enviar").click(function(){
					var opcion_seleccionada = $("#query_alumno option:selected").text();
					document.getElementById('opcion').value=opcion_seleccionada;

				});

			});
		</script>

	</body>
</html>
