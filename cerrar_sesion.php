<<!DOCTYPE html>
<html>
<head>
	<title>Cerrar Sesion</title>
</head>
<body>
<?php
	session_start();
	session_destroy();
	header("location:index.php");
?>

</body>
</html>