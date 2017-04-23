<!DOCTYPE html>
<html>
<head>
	<title>Registro de usuarios</title>
</head>
<body>


<?php
try{
	$base=new PDO("mysql:host=localhost; dbname=los_de_Age", "root","");
	$base-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$sql="SELECT * from _user_password where USUARIOS=:login and PASSWORD= :password";
	$resultado=$base-> prepare ($sql);
	$login=htmlentities(addslashes($_POST["login"]));
	$password=htmlentities(addslashes($_POST["password"]));
	$resultado->bindValue(":login",$login);
	$resultado->bindValue(":password",$password);
	$resultado->execute();
	$registro=$resultado->rowCount();
	if($registro!=0){
		session_start();
		$_SESSION["usuario"]=$_POST["login"];
		header("location:usuarios_registrados.php");

	}else{
		header("location:index.php");

	}


}catch(Exception $e){
	die("Error: " . $e->getMessage());

}
?>
</body>
</html>