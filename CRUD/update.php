
<?php  require '../conexion.class.php';
$db = new Conexion();

//MODIFICAR PROFESOR
if(isset($_POST['modificar_profesor'])){

$email=$_POST["email"];
$grado=$_POST["grado"];
$telefono=$_POST["telefono"];
$nombre=$_POST["nombre"];
$apellido_paterno=$_POST["apellido_paterno"];
$apellido_materno=$_POST["apellido_materno"];
$id=$_POST["id"];
$sql=" UPDATE teacher set `nombre`='$nombre',`apellido_paterno`='$apellido_paterno',`apellido_materno`='$apellido_materno',`grado`='$grado',`correo_electronico`='$email',`telefono`='$telefono' WHERE id=$id";
$db->query($sql);
echo "<script type=\"text/javascript\">alert(\"Profesor modificado\");</script>"; 
echo '<meta http-equiv="Refresh" content="0;URL=../index.php">'; 

}

//MODIFICAR ALUMNO
if(isset($_POST['modificar_alumno'])){

$email=$_POST["email"];
$matricula=$_POST["matricula"];
$telefono=$_POST["telefono"];
$nombre=$_POST["nombre"];
$apellido_paterno=$_POST["apellido_paterno"];
$apellido_materno=$_POST["apellido_materno"];
$direccion=$_POST["direccion"];
$nombre_tutor=$_POST["nombre_tutor"];
$telefono_tutor=$_POST["telefono_tutor"];
$correo_tutor=$_POST["correo_tutor"];
$id=$_POST["id"];

$sql=" UPDATE student set `matricula`='$matricula',`nombre`='$nombre',`apellido_paterno`='$apellido_paterno',`apellido_materno`='$apellido_materno',`direccion`='$direccion',`correo_electronico`='$email',`telefono`='$telefono',`nombre_tutor`='$nombre_tutor',`telefono_tutor`='$telefono_tutor',`correo_tutor`='$correo_tutor' WHERE id=$id";
$db->query($sql);

echo "<script type=\"text/javascript\">alert(\"Alumno modificado\");</script>"; 
echo '<meta http-equiv="Refresh" content="0;URL=../index.php">'; 


}

?>
