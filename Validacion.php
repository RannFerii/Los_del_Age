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
	$sql="SELECT * from _user where email=:email and password= :password";
	$resultado=$base-> prepare ($sql);
	$email=htmlentities(addslashes($_POST["email"]));
	$password=htmlentities(addslashes($_POST["password"]));
	$resultado->bindValue(":email",$email);
	$resultado->bindValue(":password",$password);
	$resultado->execute();
	$registro=$resultado->rowCount();
	if($registro!=0){
		session_start();
		$_SESSION["nombre"]=$_POST["emaidl"];
		header("location:index.php");

	}else{
		header("location:login.php");

	}


}catch(Exception $e){
	die("Error: " . $e->getMessage());

}
?>
</body>
</html>