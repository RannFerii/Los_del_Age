<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Reportes Materias</title>
	<link rel="stylesheet" href="css/insertar_style.css">
	<script src="js/insertar.js"></script>
</head>
<body>
	<form id="form1" class="form-style-4"  method="post"  action="reportes/generar_reportes_materia.php">
		<label align="center">Reporte de Materias</label><br>
	
		<?php
				require'../conexion.class.php';
			$db= new Conexion();	
			$query3="SELECT DISTINCT id,nombre_materia FROM subject";
			$res3=$db->query($query3);
			$option3='';
			
			while($row= mysqli_fetch_array($res3)){
				$option3.= "<option value=\"$row[id]\">$row[nombre_materia]</option>";
				
			}
		?>

		<label>
			<span>Materia</span>
				<select class= "field-slid" name="Materias" id ="query_materias">
				<option value="-" >Seleccionar</option>
				 <?php echo $option3?>
		         </select>
		</label>
		<input id="opcion" type="hidden" name="OpcionEscogida">
		<input id="enviar" type="submit" name="Enviar" value="Generar Reporte" >
		</form>

		<script>
			$(function(){
				var btn=$("#enviar").click(function(){
					var opcion_seleccionada = $("#query_materias option:selected").text();
					document.getElementById('opcion').value=opcion_seleccionada;

				});

			});
		</script>

</body>
</html>
