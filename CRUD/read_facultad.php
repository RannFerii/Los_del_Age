<!DOCTYPE html>
<html>
<head>
	<title>Facultates registradas</title>
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
      </div>


		<?php
			require'../conexion.class.php';
			$db= new Conexion();
			$query = "SELECT DISTINCT *  FROM faculty";
			$resultado=$db->query($query);
			$table='';
			while( $row=mysqli_fetch_array($resultado)){
				$table.="<div class='row'>";
				$table.="<div class='cell'>$row[nombre]</div>";
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