
<?php
/////// CONEXIÓN A LA BASE DE DATOS /////////
require '../conexion.class.php';

$conexion = new Conexion();

//////////////// VALORES INICIALES ///////////////////////

$tabla="";
$query="SELECT * FROM student ORDER BY id";

///////// LO QUE OCURRE AL TECLEAR SOBRE EL INPUT DE BUSQUEDA ////////////
if(isset($_POST['alumno']))
{
	$q=$conexion->real_escape_string($_POST['alumno']);
	$query="SELECT * FROM student WHERE 
		id LIKE '%".$q."%' OR
		matricula LIKE '%".$q."%' OR
		nombre LIKE '%".$q."%' OR
		apellido_paterno LIKE '%".$q."%' OR
		apellido_materno LIKE '%".$q."%' OR
		correo_electronico LIKE '%".$q."%' OR
		direccion LIKE '%".$q."%' OR
		telefono LIKE '%".$q."%' OR
		nombre_tutor LIKE '%".$q."%' OR
		telefono_tutor LIKE '%".$q."%' OR 
		correo_tutor LIKE '%".$q."%'";
}

$row=$conexion->query($query);
if ($row->num_rows > 0)
{


	$tabla.="<div class='row header green'>";
       
        $tabla.="<div class='cell'>";
         $tabla.='Matricula';
        $tabla.="</div>";

         $tabla.="<div class='cell'>";
         $tabla.='Nombre';
         $tabla.="</div>";

         $tabla.="<div class='cell'>";
         $tabla.='Apellido paterno';
         $tabla.="</div>";

         $tabla.="<div class='cell'>";
         $tabla.='Apellido materno';
         $tabla.="</div>";

         $tabla.="<div class='cell'>";
         $tabla.='Email';
         $tabla.="</div>";

         $tabla.="<div class='cell'>";
         $tabla.='Direccion';
         $tabla.="</div>";

         $tabla.="<div class='cell'>";
         $tabla.='Telefono';
         $tabla.="</div>";

         $tabla.="<div class='cell'>";
         $tabla.='Tutor';
         $tabla.="</div>";

         $tabla.="<div class='cell'>";
         $tabla.='Tel';
         $tabla.="</div>";

         $tabla.="<div class='cell'>";
         $tabla.='Email';
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
			$tabla.="<div class='cell'>$cell[matricula]</div>";
		    $tabla.="<div class='cell'>$cell[nombre]</div>";
			$tabla.="<div class='cell'>$cell[apellido_paterno]</div>";
			$tabla.="<div class='cell'>$cell[apellido_materno]</div>";
			$tabla.="<div class='cell'>$cell[correo_electronico]</div>";
			$tabla.="<div class='cell'>$cell[direccion]</div>";
			$tabla.="<div class='cell'>$cell[telefono]</div>";
			$tabla.="<div class='cell'>$cell[nombre_tutor]</div>";
			$tabla.="<div class='cell'>$cell[telefono_tutor]</div>";
			$tabla.="<div class='cell'>$cell[correo_tutor]</div>";
			$tabla.="<div class='cell'><a href=\"CRUD/update_alumno.php?id=$cell[id]\">Editar</a></div>";
			$tabla.="<div class='cell'><a href=\"CRUD/delete_alumno.php?id=$cell[id]\">Eliminar</a></div>";
	    $tabla.="</div>";
	}


} else
	{
		$tabla="No se encontraron coincidencias con sus criterios de búsqueda.";
	}


	echo $tabla;
?>

