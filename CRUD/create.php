<?php

!isset($_POST) ? die('Acceso denegado') : '';
require '../conexion.class.php';
$db = new Conexion();


//INSERTAR EN PROFESOR
if(isset($_POST['agregar_profesor'])){
$email=$_POST["email"];
$grado=$_POST["grado"];
$telefono=$_POST["telefono"];
$nombre=$_POST["nombre"];
$apellido_paterno=$_POST["apellido_paterno"];
$apellido_materno=$_POST["apellido_materno"];
$sql=" INSERT INTO `teacher`(`nombre`,`apellido_paterno`,`apellido_materno`,`grado`,`correo_electronico`,`telefono`) values ('$nombre','$apellido_paterno','$apellido_materno','$grado','$email','$telefono')";

$db->query($sql);

}




//INSERTAR EN FACULTAD
if(isset($_POST['agregar_facultad'])){
$nombre=$_POST["nombre"];
$sql=" INSERT INTO `faculty`(`nombre_faculty`) values ('$nombre')";
$db->query($sql);

}

//INSERTAR EN CARRERA
if(isset($_POST['agregar_carrera'])){
$nombre=$_POST["nombre"];
$nombre_abreviado=$_POST["nombre_abreviado"];
$clave=$_POST["clave"];
$sql=" INSERT INTO `carrer`(`nombre_carrera`,`faculty_id`,`nombre_abbr`) values ('$nombre','$clave','$nombre_abreviado')";
$db->query($sql);

}


//INSERTAR EN ALUMNO
if(isset($_POST['agregar_alumno'])){
$nombre=$_POST["nombre"];
$nombre_abreviado=$_POST["nombre_abreviado"];
$clave=$_POST["clave"];
$sql=" INSERT INTO `carrer`(`nombre_carrera`,`faculty_id`,`nombre_abbr`) values ('$nombre','$clave','$nombre_abreviado')";
$db->query($sql);

}




//MODIFICAR PROFESOR
if(isset($_POST['Modificar'])){


$email=$_POST["email"];
$grado=$_POST["grado"];
$telefono=$_POST["telefono"];
$nombre=$_POST["nombre"];
$apellido_paterno=$_POST["apellido_paterno"];
$apellido_materno=$_POST["apellido_materno"];
$id=$_POST["id"];


$sql=" UPDATE teacher set `nombre`='$nombre',`apellido_paterno`='$apellido_paterno',`apellido_materno`='$apellido_materno',`grado`='$grado',`correo_electronico`='$email',`telefono`='$telefono' WHERE id=$id";


$db->query($sql);

}



?>