<!DOCTYPE html>
<html>
<head>
    <title>INTERFAZ</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/index_style.css">
    <link rel="stylesheet" href="css/login_style.css">
</head>

<body>

<div align="center" class"titulo">
    <IMG SRC="img/LDA1.png" class="IMG" ><br>
    <IMG SRC="img/DB2.png"  width=100><br><br>
</div>

  <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Registrarse</a></li>
        <li class="tab"><a href="#login">Ingresar</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>¿Tu primera ves?</h1>
          
          <form action="Validacion.php" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                Nombre<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                Apellido<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email <span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Contraseña<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off"/>
          </div>
          
          <button type="submit" class="button button-block"/>Enviar</button>
          
          </form>

        </div>
        
        <div id="login">   
          <h1>¡Bienvenido!</h1>
          
          <form action="Validacion.php" method="post">
          
            <div class="field-wrap">
            <label>
              Usuario<span class="req"></span>
            </label>
            <input type="text"required autocomplete="off" name="login"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Contraseña<span class="req"></span>
            </label>
            <input type="password"required autocomplete="off"name="password"/>
          </div>
          
          <p class="forgot"><a href="#">¿Olvidades la contraseña?</a></p>
          
          <button class="button button-block" name="enviar"/>Ingresar</button>
          
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='js/jquery.min.js'></script>

    <script src="js/login.js"></script>

</body>
</html>