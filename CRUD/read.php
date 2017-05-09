<?php
include '../nav/navbar.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Profesores registrados</title>
	<meta charset="utf-8">
</head>
<body>
<table border="1">
	<tr>
			<th>Nombre</th>
			<th>Apellido Paterno</th>
			<th>Apellido Materno</th>
			<th>Grado</th>
			<th>Email</th>
			<th>Telefono</th>
			<th>Modificar</th>

			<?php
			require'../conexion.class.php';
			$db= new Conexion();
			$query = "SELECT DISTINCT *  FROM teacher";
			$resultado=$db->query($query);
			$table='';
			while( $row=mysqli_fetch_array($resultado)){
				$table.="<tr>";
				$table.="<td>$row[nombre]</td>";
				$table.="<td>$row[apellido_paterno]</td>";
				$table.="<td>$row[apellido_materno]</td>";
				$table.="<td>$row[grado]</td>";
				$table.="<td>$row[correo_electronico]</td>";
				$table.="<td>$row[telefono]</td>";
				$table.="<td><a href=\"update_profesor.php?id=$row[id]\">Editar</a></td>";
				$table.="<td><a href=\"delete_profesor.php?id=$row[id]\">Eliminar</a></td>";
				$table.="</tr>";
			}
			echo $table;
			?>

</table>


	</tr>
</table>

</body>
</html>