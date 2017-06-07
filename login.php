<!DOCTYPE html>
<html>
<head>
    <title>INTERFAZ</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/login_style.css">
  

</head>

<body>

<div align="center" class"titulo">
    <IMG SRC="img/LDA1.png" class="IMG" ><br>
    <IMG SRC="img/DB2.png"  width=100><br><br>
</div>

<div class="form">
    <ul class="tab-group">
      <li class="tab "><a href="#signup">Registrarse</a></li>
      <li class="tab active"><a href="#login">Ingresar</a></li>
    </ul>
      
    <div class="tab-content">

      <div id="login">   
        <h1>¡Bienvenido!</h1>
        <form action="Validacion.php" method="post">
          <div class="field-wrap">
            <label>
              email<span class="req"></span>
            </label>
            <input type="text"required autocomplete="on" name="email"/>
          </div>            
          <div class="field-wrap">
            <label>
              Contraseña<span class="req"></span>
            </label>
            <input type="password"required autocomplete="on"name="password"/>
          </div>            
          <p class="forgot"><a href="#">¿Olvidades la contraseña?</a></p>
          <button class="button button-block" name="enviar"/>Ingresar</button>
        </form>
      </div>

      <div id="signup">   
        <h1>¿Tu primera vez?</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
          <div class="field-wrap">
              <label>
                Nombre<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name="nombre"/>
            </div>
        
            <!-- columnas <div class="top-row"> </div>-->
            <div class="field-wrap">
              <label>
                Apellido Paterno<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name="apellido_paterno"/>
            </div>

            <div class="field-wrap">
              <label>
                Apellido Materno<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name="apellido_materno"/>
            </div>

          <div class="field-wrap">
            <label>
              Email <span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off" name="email"/>
          </div>

          <div class="field-wrap">
            <label>
              usuario: <span class="req"></span>
            </label>


             <select class= "field-slid" name="usuario" >
                <option value="administrador">Administrador</option>
                <option value="alumno">Alumno</option>
                <option value="maestro">Maestro</option>
                <option value="super_usuario">Super Usuario</option>
              </select>
          </div>
          
          <div class="field-wrap">
            <label>
              Contraseña<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off"  id="passwd" name="password"/>
          </div>


           <div class="field-wrap">
            <label>
              Repita su contraseña<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" id="passwd2" name="password2"/>
          </div>
     
          <button id="validar" onClick="validar()" class="button button-block" name="envio"/>Enviar</button>
        </form>

      </div>
        
   </div><!-- tab-content -->
      
</div> <!-- /form -->

 <script src='js/jquery.min.js'></script>
  <script src="js/login.js"></script>

<?php

$base=new PDO("mysql:host=localhost; dbname=los_de_Age", "root","");
$base-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);



$conexion= mysqli_connect("localhost","root","","los_de_age");

  if(isset($_POST["envio"])){
  $confirContra=$_POST['password2'];
  $email=$_POST["email"];
  $usuario=$_POST["usuario"];
  $password=$_POST["password"];
  $nombre=$_POST["nombre"];
  $apellido_paterno=$_POST["apellido_paterno"];
  $apellido_materno=$_POST["apellido_materno"];

  if($confirContra==$password){
    
    $sql=" INSERT INTO _user(email,usuario,password,nombre,apellido_paterno,apellido_materno) values (:email,:usuario,:password,:nombre,:apellido_paterno,:apellido_materno)";

  $resultado=$base->prepare($sql);
  $resultado->execute(array(":email"=>$email,":usuario"=>$usuario, ":password"=>$password, ":nombre"=>$nombre, ":apellido_paterno"=>$apellido_paterno,":apellido_materno"=>$apellido_materno));

  header("location:login.php");
  }
  
echo "<script>";
echo "alert('Las contraseñas no son iguales¡, falló el registro');";  
echo "window.location = 'login.php';";
echo "</script>"; 
}


?>
 

</body>
</html>