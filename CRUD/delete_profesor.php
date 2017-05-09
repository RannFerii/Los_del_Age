<?php
require'../conexion.class.php';

if(isset($_GET['id'])){
	$db= new conexion();
	$id=$_GET['id'];
	$query= "DELETE from `teacher` WHERE id =$id";
	$db= new Conexion();
	$db->query($query);
	header("location:read_profesor.php");
}

?>