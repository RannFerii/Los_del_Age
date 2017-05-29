<?php
require'../conexion.class.php';

if(isset($_GET['id'])){
	$db= new conexion();
	$id=$_GET['id'];
	$query= "DELETE from `teacher` WHERE id =$id";
	$db= new Conexion();
	$db->query($query);
	
	echo "<script type=\"text/javascript\">alert(\"Profesor eliminado\");</script>"; 
    echo '<meta http-equiv="Refresh" content="0;URL=../index.php">'; 
}

?>