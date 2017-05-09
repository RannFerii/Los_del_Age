<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="css/insertar_style.css">
		<title>Agregar Facultad</title>
		<script src="js/insertar.js"></script>
	</head>

	<body>

		<form class="form-style-4" action="../CRUD/create_profesor.php" method="post">
		<label align="center">Facultad</label><br>
		<label >
		<span>Nombre</span><input type="text" name="nombre" required="true" />
		</label>
		<label>
		<span>&nbsp;</span><input type="submit" name="agregar_facultad" value="Agregar facultad" />
		</label>
		</form>

	</body>
</html>
