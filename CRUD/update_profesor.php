<?php
require '../conexion.class.php';

if(isset($_GET['id'])){
	$db= new conexion();
	$id=$_GET['id'];
	$query= "SELECT * FROM teacher WHERE id=$id";
	$resultado= $db->query($query);
	$datos= mysqli_fetch_array($resultado);
	var_dump($datos);

}else{
	header("../location:usuarios_registrados.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>actualizar profesor</title>
	<meta charsef="utf-8">
	<script src="../js/insertar.js"></script>
	<link rel="stylesheet" href="../css/insertar_style.css">
</head>
<body>

<form class="form-style-4" action="../CRUD/create_profesor.php" method="post">
		<label align="center">Modificar</label><br>
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
		<span>Grado</span><input type="text" name="grado" required="true" value=<?php echo $datos['grado']?> />
		</label>
		<label for="field1">
		<span>Correo electronico</span><input type="email" name="email" required="true" value=<?php echo $datos['correo_electronico']?> />
		</label>
		<label for="field1">
		<span>Telefono</span><input type="text" name="telefono" required="true" value=<?php echo $datos['telefono']?> />
		</label>
		<input type="hidden" name="id" value= <?php echo $id; ?>  </input>
		<label>
		<span>&nbsp;</span><input type="submit" name="Modificar" value="Modificar" />
		</label>
  </form>



</body>
</html>