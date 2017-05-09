<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="css/insertar_style.css">
		<title>Agregar Carrera</title>
		<script src="js/insertar.js"></script>
	</head>

	<body>

		<form class="form-style-4" action="../CRUD/create_profesor.php" method="post">
		<label align="center">Carrera</label><br>
		<label >
		<span>Nombre</span><input type="text" name="nombre" required="true" />
		</label>
		<label >
		<span>Nombre abreviado</span><input type="text" name="nombre_abreviado" required="true" />
		</label>
		<label >
		<span>Clave</span><input type="text" name="clave" required="true" />
		</label>
		<label>
		<span>&nbsp;</span><input type="submit" name="agregar_carrera" value="Agregar" />
		</label>
		</form>

	</body>
</html>
