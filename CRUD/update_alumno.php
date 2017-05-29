<?php
require '../conexion.class.php';

if(isset($_GET['id'])){
	$db= new conexion();
	$id=$_GET['id'];
	$query= "SELECT * FROM student WHERE id=$id";
	$resultado= $db->query($query);
	$datos= mysqli_fetch_array($resultado);
	$a=$datos['direccion'];
	echo $a;
	

}else{
	header("../location:usuarios_registrados.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Actualizar alumno</title>
	<meta charsef="utf-8">
	<script src="../js/insertar.js"></script>
	<link rel="stylesheet" href="../css/insertar_style.css">
</head>
<body>

<form class="form-style-4" action="../CRUD/update.php" method="post">
		<label align="center">Modificar alumno</label><br>
		<label>
		<span>Matricula</span><input type="text" name="matricula" required="true"  value=<?php echo $datos['matricula']?> />
		</label>
		<label>
		<span>Nombre</span><input type="text" name="nombre" required="true"  value=<?php echo $datos['nombre']?> />
		</label>
		<label for="field1">
		<span>Apellido Paterno</span><input type="text" name="apellido_paterno" required="true" value=<?php echo $datos['apellido_paterno']?> />
		</label>
		<label for="field1">
		<span>Apellido Materno</span><input type="text" name="apellido_materno" required="true" value=<?php echo $datos['apellido_materno']?> />
		</label>
		<label for="field1">
		<span>Correo electronico</span><input type="email" name="email" required="true" value=<?php echo $datos['correo_electronico']?> />
		</label>
		<label for="field1">
		<span>Direccion</span><input type="text" name="direccion" required="false" value=<?php echo $a ?> />
		</label>
		
		<label for="field1">
		<span>Telefono</span><input type="text" name="telefono" required="true" value=<?php echo $datos['telefono']?> />
		</label>
		<label for="field2">
		<span>Tutor</span><input type="text" name="nombre_tutor" required="true" value=<?php echo $datos['nombre_tutor']?> />
		</label>
		<label for="field1">
		<span>Telefono</span><input type="text" name="telefono_tutor" required="true" value=<?php echo $datos['telefono_tutor']?> />
		</label>
		<label for="field1">
		<span>Email</span><input type="email" name="correo_tutor" required="true" value=<?php echo $datos['correo_tutor']?> />
		</label>
		<input type="hidden" name="id" value= <?php echo $id; ?>  </input>
		<label>
		<span>&nbsp;</span><input type="submit" name="modificar_alumno" value="Modificar" />
		</label>
  </form>



</body>
</html>