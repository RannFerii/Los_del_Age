<!DOCTYPE HTML>
<html>
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="css/insertar_style.css">
		<title>Agregar Alumno</title>
		<script src="js/insertar.js"></script>
</head>

<body>
	 <?php 
	  session_start();
	  if(!isset($_SESSION["usuario"]))
	  {
	    header("Location:login.php");
	  }
	  ?>

	<form class="form-style-4" action="CRUD/create.php" method="post">
	<label align="center">Alumno</label><br>
	<label for="field1">
	<span>Matricula</span><input type="text" name="matricula" required="true" />
	</label>
	<label for="field2">
	<span>Nombre</span><input type="text" name="nombre" required="true" />
	</label>
	<label for="field3">
	<span>Apellido paterno</span><input type="text" name="apellido_paterno" required="true" />
	</label>
	<label for="field1">
	<span>Apellido materno</span><input type="text" name="apellido_materno" required="true" />
	</label>
	<label for="field2">
	<span>Email</span><input type="text" name="email" required="true" />
	</label>
	<label for="field3">
	<span>Dirección</span><input type="text" name="direccion" required="true" />
	</label>
	<label for="field1">
	<span>Telefono</span><input type="text" name="telefono" required="true" />
	</label>
	<label for="field2">
	<span>Tutor</span><input type="text" name="nombre_tutor" required="true" />
	</label>
	<label for="field3">
	<span>Tel. del tutor</span><input type="text" name="telefono_tutor" required="true" />
	</label>
	<label for="field4">
	<span>Email del tutor</span><input type="email" name="email_tutor" required="true" />
	</label>

	<label>
	<span>&nbsp;</span><input type="submit" value="Agregar alumno" name="agregar_alumno" />
	</label>
	</form>

</body>
</html>
