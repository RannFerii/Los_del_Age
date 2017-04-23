<!DOCTYPE html>
<html>
<head>
	<title>usuarios registrados</title>
	<link rel="stylesheet" type="text/css" href="css/usuarios_registrados_style.css">
</head>
<body>

<div align="center" class"titulo">
    <IMG SRC="img/LDA1.png" class="IMG" ><br>
    <IMG SRC="img/DB2.png"  width=100><br><br>
</div>
<?php

session_start();

if(!isset($_SESSION["usuario"])){
	header("Location:index.php");

}


?>
<h1>BIENVENIDO PELOCONCHA</h1>
<?php
echo "Buen dia:".$_SESSION["usuario"] ."<br><br>";
?>

<p><a href="cerrar_sesion.php">Cerrar sesion</a></p>




</body>
</html>