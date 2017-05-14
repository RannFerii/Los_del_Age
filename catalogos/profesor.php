<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="css/insertar_style.css">
		<title>Agregar Profesor</title>
		<script src="../js/insertar.js"></script>
	</head>

	<body>

		<form class="form-style-4" action="CRUD/create.php" method="post">
		<label align="center">Profesor</label><br>
		<label >
		<span>Nombre</span><input type="text" name="nombre" required="true" />
		</label>
		<label for="field1">
		<span>Apellido Paterno</span><input type="text" name="apellido_paterno" required="true" />
		</label>
		<label for="field1">
		<span>Apellido Materno</span><input type="text" name="apellido_materno" required="true" />
		</label>
		<label for="field1">
		<span>Grado</span><input type="text" name="grado" required="true" />
		</label>
		<label for="field2">
		<span>Correo electronico</span><input type="email" name="email" required="true" />
		</label>
		<label for="field3">
		<span>Telefono</span><input type="text" name="telefono" required="true" />
		</label>
		<label>
		<span>&nbsp;</span><input type="submit" name="agregar_profesor" value="Agregar profesor" />
		</label>
		</form>

	</body>
</html>
