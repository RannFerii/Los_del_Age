<?php

!isset($_POST) ? die('Acceso denegado') : '';
require '../conexion.class.php';
$db = new Conexion();

////////////////////////////////////////////////////CYCLE_HAS_STUDENT//////////////////////////////////////////////

if(isset($_POST['agregar_cycle_has_student'])){
$subject  = $_POST["materia"];
$teacher=$_POST["profesor"];
$ciclo_escolar=$_POST["ciclo_escolar"];

$lunes=$_POST["lunes"];
$martes=$_POST["martes"];
$miercoles=$_POST["miercoles"];
$jueves=$_POST["jueves"];
$viernes=$_POST["viernes"];
$sabado=$_POST["sabado"];

$sql=" INSERT INTO `period_has_group`(`subject_id`,`teacher_id`,`lunes`,`martes`,`miercoles`,`jueves`,`viernes`,`sabado`,`school_cycle_id`) values ('$subject','$teacher','$lunes','$martes','$miercoles','$jueves','$viernes','$sabado','$ciclo_escolar')";
$db->query($sql);
echo "<script type=\"text/javascript\">alert(\"Tabla cental agregada\");</script>"; 
echo '<meta http-equiv="Refresh" content="0;URL=../index.php">'; 
}

////////////////////////////////////////////////////STUDENT_HAS_SUBJECT//////////////////////////////////////////////

if(isset($_POST['agregar_student_has_subject'])){
$id = $_POST["cycle_has_subject_id"];
$alumno=$_POST["student_id"];
$tipo=$_POST["tipo"];

$sql=" INSERT INTO `student_has_subject`(`period_has_group_id`,`student_id`,`student_subject_type`) values ('$id','$alumno','$tipo')";
$db->query($sql);

 
}


////////////////////////////////////////////////////PRIMER FILTRO/////////////////////////////////////////////////

//INSERTAR EN FACULTAD
if(isset($_POST['agregar_facultad'])){
$nombre=$_POST["nombre"];
$sql=" INSERT INTO `faculty`(`nombre_faculty`) values ('$nombre')";
$db->query($sql);
echo "<script type=\"text/javascript\">alert(\"Facultad agregada\");</script>"; 
echo '<meta http-equiv="Refresh" content="0;URL=../index.php">'; 

}


//INSERTAR EN CARRERA
if(isset($_POST['agregar_carrera'])){
$nombre=$_POST["nombre"];
$nombre_abreviado=$_POST["nombre_abreviado"];
$clave=$_POST["clave"];
$sql=" INSERT INTO `carrer`(`nombre_carrera`,`faculty_id`,`nombre_abbr`) values ('$nombre',$clave,'$nombre_abreviado')";
$db->query($sql);
echo "<script type=\"text/javascript\">alert(\"Carrera agregada\");</script>"; 
echo '<meta http-equiv="Refresh" content="0;URL=../index.php">'; 

}

//INSERTAR EN PERIODO
if(isset($_POST['agregar_periodo'])){
$periodo=$_POST["periodo"];
$tipo=$_POST["tipo"];
$ciclo=$_POST["ciclo"];
$sql=" INSERT INTO `period`(`nombre_periodo`,`periodo_type`,`school_cycle_id`) values ('$periodo','$tipo','$ciclo')";
$db->query($sql);
echo "<script type=\"text/javascript\">alert(\"Periodo agregado\");</script>"; 
echo '<meta http-equiv="Refresh" content="0;URL=../index.php">'; 

}



//INSERTAR EN ALUMNO
if(isset($_POST['agregar_alumno'])){

$nombre=$_POST["nombre"];
$matricula=$_POST["matricula"];
$telefono=$_POST["telefono"];
$apellido_paterno=$_POST["apellido_paterno"];
$apellido_materno=$_POST["apellido_materno"];
$correo_electronico=$_POST["email"];
$direccion=$_POST["direccion"];
$correo_tutor=$_POST["email_tutor"];
$telefono_tutor=$_POST["telefono_tutor"];
$nombre_tutor=$_POST["nombre_tutor"];

$sql=" INSERT INTO `student`(`matricula`,`nombre`,`apellido_paterno`,`apellido_materno`,`correo_electronico`,`direccion`,`telefono`,`nombre_tutor`,`telefono_tutor`,`correo_tutor`) 
     values ('$matricula','$nombre','$apellido_paterno','$apellido_materno','$correo_electronico','$direccion','$telefono','$nombre_tutor','$telefono_tutor','$correo_tutor')";

$db->query($sql);
echo "<script type=\"text/javascript\">alert(\"Alumno agregado\");</script>"; 
echo '<meta http-equiv="Refresh" content="0;URL=../index.php">'; 

}



//INSERTAR EN CICLO ESCOLAR
if(isset($_POST['agregar_ciclo'])){
$nombre=$_POST["ciclo"];
$carrera=$_POST["carrera_id"];
$sql=" INSERT INTO `school_cycle`(`nombre_ciclo`,`id_carrer`) values ('$nombre','$carrera')";
$db->query($sql);
echo "<script type=\"text/javascript\">alert(\"Ciclo agregado\");</script>"; 
echo '<meta http-equiv="Refresh" content="0;URL=../index.php">'; 


}



////////////////////////////////////////////////////SEGUNDO FILTRO/////////////////////////////////////////////////

//INSERTAR EN GRUPO
if(isset($_POST['agregar_grupo'])){
$clave=$_POST["clave_grupo"];
$sql=" INSERT INTO `_group`(`clave_grupo`) values ('$clave')";
$db->query($sql);
echo "<script type=\"text/javascript\">alert(\"Grupo agregado\");</script>"; 
echo '<meta http-equiv="Refresh" content="0;URL=../index.php">'; 
}

//INSERTAR EN SUBJECT
if(isset($_POST['agregar_materia'])){
$materia=$_POST["nombre"];
$tipo=$_POST["tipo"];
$clave=$_POST["clave"];
$grupo=$_POST["grupo"];
$sql=" INSERT INTO `subject`(`nombre_materia`,`subject_type`,`clave_materia`,`_group_id`) values ('$materia','$tipo','$clave','$grupo')";
$db->query($sql);
echo "<script type=\"text/javascript\">alert(\"Materia agregada\");</script>"; 
echo '<meta http-equiv="Refresh" content="0;URL=../index.php">'; 

}


////////////////////////////////////////////////////TERCER FILTRO/////////////////////////////////////////////////

//INSERTAR EN PROFESOR
if(isset($_POST['agregar_profesor'])){
$email=$_POST["email"];
$grado=$_POST["grado"];
$telefono=$_POST["telefono"];
$nombre=$_POST["nombre"];
$apellido_paterno=$_POST["apellido_paterno"];
$apellido_materno=$_POST["apellido_materno"];
$sql=" INSERT INTO `teacher`(`nombre`,`apellido_paterno`,`apellido_materno`,`grado`,`correo_electronico`,`telefono`) values ('$nombre','$apellido_paterno','$apellido_materno','$grado','$email','$telefono')";
echo "<script type=\"text/javascript\">alert(\"Profesor agregado\");</script>"; 
echo '<meta http-equiv="Refresh" content="0;URL=../index.php">'; 


$db->query($sql);

}



?>