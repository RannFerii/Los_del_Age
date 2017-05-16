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

		<form class="form-style-4"  method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
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

		<label>
			<span>Perio</span>
				<select class= "field-slid" name="periodo" id ="query_period">
				<option value="-" >Seleccionar</option>
		         </select>
		</label>
		<label id="resultado"></label>
		<label>
		<input type="submit" name="submit" value="agregar" onclick="capturar()"/>
		</label>
		</form>

	</body>
</html>
