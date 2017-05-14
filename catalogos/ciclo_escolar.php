<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="css/insertar_style.css">
		<title>Agregar Ciclo escolar</title>
		<script src="js/insertar.js"></script>
	</head>

	<body>

		<form class="form-style-4" action="CRUD/create.php" method="post">
		<label align="center">Ciclo escolar</label><br>
		<label >
		<span>Ciclo:</span><input type="text" name="ciclo" required="true" />
		</label>
		<br>

		<?php
			require'../conexion.class.php';
			$db= new Conexion();
			$query="SELECT DISTINCT id,nombre_carrera FROM carrer";
			$res=$db->query($query);
			$option='';
			while($row= mysqli_fetch_array($res)){
				$option.= "<option value=\"$row[id]\">$row[nombre_carrera]</option>";
			}
		?>

		<label>
			<span>Carrera:</span>
				<select class= "field-slid" name="carrera_id" >
			        <option value="-">Seleccionar</option>
			        <?php echo $option;?>
		         </select>
		</label>
		<br>
		<label>
		<input type="submit" name="agregar_ciclo" value="Agregar ciclo" />
		</label>
		</form>

	</body>
</html>
