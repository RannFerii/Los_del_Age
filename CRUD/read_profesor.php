<!DOCTYPE html>
<html>
<head>
	<title>Profesores registrados</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/table_style.css"> 
	 <script src='js/jquery.min.js'></script>
</head>
<body>

<div class="wrapper">
    <div class="table">
      <div class="row header green">
        <div class="cell">
          Nombre
        </div>
        <div class="cell">
          Apellido paterno
        </div>
        <div class="cell">
          Apellido materno
        </div>
        <div class="cell">
         Grado
        </div>
        <div class="cell">
         Email
        </div>
        <div class="cell">
        Telefono
        </div>
        <div class="cell">
         Modificar
        </div>
        <div class="cell">
         Eliminar
        </div>
      </div>


		<?php
			require'../conexion.class.php';
			$db= new Conexion();
			$query = "SELECT DISTINCT *  FROM teacher";
			$resultado=$db->query($query);
			$table='';
			while( $row=mysqli_fetch_array($resultado)){
				$table.="<div class='row'>";
				$table.="<div class='cell'>$row[nombre]</div>";
				$table.="<div class='cell'>$row[apellido_paterno]</div>";
				$table.="<div class='cell'>$row[apellido_materno]</div>";
				$table.="<div class='cell'>$row[grado]</div>";
				$table.="<div class='cell'>$row[correo_electronico]</div>";
				$table.="<div class='cell'>$row[telefono]</div>";
				$table.="<div class='cell'><a href=\"update_profesor.php?id=$row[id]\">Editar</a></div>";
				$table.="<div class='cell'><a href=\"delete_profesor.php?id=$row[id]\">Eliminar</a></div>";
				$table.="</div>";
			}
			echo $table;
			?>
	  </div>
	</div>


</body>
</html>