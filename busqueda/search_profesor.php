
<?php
/////// CONEXIÓN A LA BASE DE DATOS /////////
require '../conexion.class.php';

$conexion = new Conexion();

//////////////// VALORES INICIALES ///////////////////////

$tabla="";
$query="SELECT * FROM teacher ORDER BY id";

///////// LO QUE OCURRE AL TECLEAR SOBRE EL INPUT DE BUSQUEDA ////////////
if(isset($_POST['profesor']))
{
	$q=$conexion->real_escape_string($_POST['profesor']);
	$query="SELECT * FROM teacher WHERE 
		id LIKE '%".$q."%' OR
		nombre LIKE '%".$q."%' OR
		apellido_paterno LIKE '%".$q."%' OR
		apellido_materno LIKE '%".$q."%' OR
		grado LIKE '%".$q."%' OR
		correo_electronico LIKE '%".$q."%' OR 
		telefono LIKE '%".$q."%'";
}

$row=$conexion->query($query);
if ($row->num_rows > 0)
{


	$tabla.="<div class='row header green'>";
       
        $tabla.="<div class='cell'>";
         $tabla.='Nombre';
        $tabla.="</div>";

         $tabla.="<div class='cell'>";
         $tabla.='apellido_paterno';
         $tabla.="</div>";

         $tabla.="<div class='cell'>";
         $tabla.='apellido_materno';
         $tabla.="</div>";

         $tabla.="<div class='cell'>";
         $tabla.='grado';
         $tabla.="</div>";

         $tabla.="<div class='cell'>";
         $tabla.='Email';
         $tabla.="</div>";

         $tabla.="<div class='cell'>";
         $tabla.='Tel';
         $tabla.="</div>";

         $tabla.="<div class='cell'>";
         $tabla.='Modificar';
         $tabla.="</div>";

         $tabla.="<div class='cell'>";
         $tabla.='Eliminar';
         $tabla.="</div>";

     $tabla.=" </div>";
	
	while($cell= $row->fetch_assoc())
	{
			
		$tabla.="<div class='row'>";
		    $tabla.="<div class='cell'>$cell[nombre]</div>";
			$tabla.="<div class='cell'>$cell[apellido_paterno]</div>";
			$tabla.="<div class='cell'>$cell[apellido_materno]</div>";
			$tabla.="<div class='cell'>$cell[grado]</div>";
			$tabla.="<div class='cell'>$cell[correo_electronico]</div>";
			$tabla.="<div class='cell'>$cell[telefono]</div>";
			$tabla.="<div class='cell'><a href=\"CRUD/update_profesor.php?id=$cell[id]\">Editar</a></div>";
			$tabla.="<div class='cell'><a href=\"CRUD/delete_profesor.php?id=$cell[id]\">Eliminar</a></div>";
	    $tabla.="</div>";
	}


} else
	{
		$tabla="No se encontraron coincidencias con sus criterios de búsqueda.";
	}


	echo $tabla;
?>

