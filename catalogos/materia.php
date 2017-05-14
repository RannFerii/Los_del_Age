<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="css/insertar_style.css">
		<title>Agregar materia</title>
		<script src="js/insertar.js"></script>
	</head>

	<body>

		<form class="form-style-4" action="CRUD/create.php" method="post">
		<label align="center">Materia</label><br>
		<label >
		<span>Materia:</span><input type="text" name="nombre" required="true" />
		</label>
		<label>
			<span>Tipo:</span>
				<select class= "field-slid" name="tipo" >
			        <option value="UNAM">UNAM</option>
			        <option value="UAA">UAA</option>
		         </select>
		</label>
		<br>
		<label >
		<span>Clave:</span><input type="text" name="clave" required="true" />
		</label>
		<?php
			require'../conexion.class.php';
			$db= new Conexion();
			$query="SELECT DISTINCT id,clave_grupo FROM _group";
			$res=$db->query($query);
			$option='';
			while($row= mysqli_fetch_array($res)){
				$option.= "<option value=\"$row[id]\">$row[clave_grupo]</option>";
			}
		?>

		<label>
			<span>Grupo:</span>
				<select class= "field-slid" name="grupo" >
			        <option value="-">Seleccionar</option>
			        <?php echo $option;?>
		         </select>
		</label>
		<br>
		<label>
		<input type="submit" name="agregar_materia" value="Agregar materia" />
		</label>
		</form>

	</body>
</html>
