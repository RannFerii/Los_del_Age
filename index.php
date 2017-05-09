<html>
  <head>
  <title>MAIN</title>
  <link rel="stylesheet" href="css/nav_style.css">
  <script src="js/nav.js"></script>
  <script type="text/javascript" src="js/query.js"></script>


  <script>
            $(document).ready(function(){
                $('#profesor').click(function(){
                $("#contenido").load("Tablas/profesor.php");
                                             });

                $('#facultad').click(function(){
                $("#contenido").load("Tablas/facultad.php");
                                             });

                $('#Jython').click(function(){
                $("#contenido").load("c_jython.php");
                                             });
                                        });
        </script>
  </head>

  <body>
     <header>
        <div id="logo" class="menuUp">
            <IMG SRC="img/LDA1.png" height=50 >
            <IMG SRC="img/DB2.png"  width=50>

            <div id="navToggle"><a href="#">Menu</a></div>
        </div>
        <nav>
            <ul>
                <li>
                    <a href="#">Mostrar<span class="toggle">Expand</span><span class="caret"></span></a>
                    <nav>
                        <ul>
                            <li><a href="#" id="profesor">Profesor</a></li>
                            <li><a href="#" id="alumno">Alumno</a></li>
                            <li><a href="#" id="facultad">Facultad</a></li>
                            <li><a href="#">Opciones</a></li>
                            <li><a href="#">Music</a></li>
                        </ul>
                    </nav>
                </li>
                <li><a href="#">Acerca de</a></li>
                <li>
                    <a href="#">Agregar<span class="toggle">Expand</span><span class="caret"></span></a>
                    <nav>
                        <ul>
                            <li><a href="../Tablas/profesor.php"target="central">Profesor</a></li>
                            <li><a href="../Tablas/alumno.php"target="central">Alumno</a></li>
                            <li><a href="../Tablas/facultad.php"target="central">Facultad</a></li>
                            <li><a href="#">Music</a></li>
                        </ul>
                    </nav>
                </li>
                <li><a href="#">MYSQL</a></li>
                <li>
                    <a href="#">Sesion <span class="toggle">Expand</span><span class="caret"></span></a>
                    <nav>
                        <ul>
                            <li><a href="form/cerrar_sesion.php">Cerrar</a></li>
                            
                        </ul>
                    </nav>
                </li>
                
            </ul>
        </nav>
    </header>

    <div id ="contenido">
                </div>

    
</body>


   
  

</html>