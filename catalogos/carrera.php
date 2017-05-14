<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="css/insertar_style.css">
		<title>Agregar Carrera</title>
		<script src="js/insertar.js"></script>
	</head>

	<body>

		<form class="form-style-4" action="CRUD/create.php" method="post">
		<label align="center">Carrera</label><br>
		<label >
		<span>Nombre</span><input type="text" name="nombre" required="true" />
		</label><br>
		<label >
		<span>Nombre abreviado</span><input type="text" name="nombre_abreviado" required="true" />
		</label><br>

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
				<select class= "field-slid" name="clave" >
			        <option value="-">Seleccionar</option>
			        <?php echo $option;?>
		         </select>
		</label>
		<br><br>
		<label>
		<input type="submit" name="agregar_carrera" value="Agregar" />
		</label>
		</form>

	</body>
</html>
