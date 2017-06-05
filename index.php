<html>
  <head>
  <title>Los_del_Age</title>
  <link rel="stylesheet" href="css/nav_style.css">
  <script src="js/nav.js"></script>
  <script type="text/javascript" src="js/query.js"></script>


  <script>
            $(document).ready(function(){

              //ASISTENCIAS
               $('#asistencia').click(function(){
                $("#MENU").load("a_p/asistencias.php");
                                             });
                $('#promedio').click(function(){
                $("#MENU").load("a_p/calificaciones.php");
                                             });

              //REPORTES
                $('#reporte_alumno').click(function(){
                $("#MENU").load("reportes/reporte_alumno.php");
                                             });
                $('#reporte_profesor').click(function(){
                $("#MENU").load("reportes/reporte_profesor.php");
                                             });
                $('#reporte_materia').click(function(){
                $("#MENU").load("reportes/reporte_materia.php");
                                             });

                //CENTRAL
                $('#periodo-grupo').click(function(){
                $("#MENU").load("centrales/period_has_group.php");
                                             });
                 $('#periodo-alumno').click(function(){
                $("#MENU").load("centrales/period_has_group_has_student.php");
                                             });

                //CATALOGOS

                $('#profesor').click(function(){
                $("#MENU").load("catalogos/profesor.php");
                                             });

                $('#alumno').click(function(){
                $("#MENU").load("catalogos/alumno.php");
                                             });

                $('#carrera').click(function(){
                $("#MENU").load("catalogos/carrera.php");
                                             });

                $('#facultad').click(function(){
                $("#MENU").load("catalogos/facultad.php");
                                             });
                $('#ciclo').click(function(){
                $("#MENU").load("catalogos/ciclo_escolar.php");
                                             });
                $('#periodo').click(function(){
                $("#MENU").load("catalogos/periodo.php");
                                             });
                $('#materia').click(function(){
                $("#MENU").load("catalogos/materia.php");
                                             });
                $('#grupo').click(function(){
                $("#MENU").load("catalogos/grupo.php");
                                             });


                //MOSTRAR CATALOGOS

                $('#r_profesor').click(function(){
                $("#MENU").load("CRUD/read_profesor.php");
                                             });
                 $('#r_alumno').click(function(){
                $("#MENU").load("CRUD/read_alumno.php");
                                             });
                                        });
              //MODIFICACIONES

               $('#u_profesor').click(function(){
                $("#MENU").load("CRUD/update_profesor.php");
                                             });


                 //MOSTRAR relaciones

                 


        </script>
  </head>

  <body>


  <!--SESSION START ¡-->
  <?php 
  session_start();
  if(!isset($_SESSION["usuario"]))
  {
    header("Location:login.php");
  }
  ?>
     <header>
        <div id="logo" class="menuUp">
            <IMG SRC="img/LDA1.png" height=50 >
            <IMG SRC="img/DB2.png"  width=50>

            <div id="navToggle"><a href="#">Menu</a></div>
        </div>
        <nav>
            <ul>
                 <li>
                    <a href="#">Reportes<span class="toggle">Expand</span><span class="caret"></span></a>
                    <nav>
                        <ul>
                            <li><a href="#" id="reporte_alumno">Alumno</a></li>
                            <li><a href="#" id="reporte_profesor">Profesor</a></li>
                            <li><a href="#" id="reporte_materia">Materia</a></li>
                          
                        </ul>
                    </nav>
                </li>


                <li>
                    <a href="#">Agregar<span class="toggle">Expand</span><span class="caret"></span></a>
                    <nav>
                        <ul>
                            <li><a href="#" id="periodo-grupo">Periodo - Grupo</a></li>
                            <li><a href="#" id="periodo-alumno">Periodo - Alumno</a></li>
                            <li><a href="#" id="profesor">Profesor</a></li>
                            <li><a href="#" id="alumno">Alumno</a></li>
                            <li><a href="#" id="facultad">Facultad</a></li>
                            <li><a href="#" id="carrera">Carrera</a></li>
                            <li><a href="#" id="ciclo">Ciclo escolar</a></li>
                            <li><a href="#" id="periodo">Periodo</a></li>
                            <li><a href="#" id="materia">Materia</a></li>
                            <li><a href="#" id="grupo">Grupo</a></li>
                        </ul>
                    </nav>
                </li>
                <li>
                    <a href="#">Catalogos<span class="toggle">Expand</span><span class="caret"></span></a>
                    <nav>
                        <ul>
                            <li><a href="#" id="r_profesor">Profesores</a></li>
                            <li><a href="#" id="r_alumno">Alumnos</a></li>
                            <li><a href="#" id="r_facultad">Facultades</a></li>
                            
                        </ul>
                    </nav>
                </li>

                 <li>
                    <a href="#">A/P<span class="toggle">Expand</span><span class="caret"></span></a>
                    <nav>
                        <ul>
                            <li><a href="#" id="asistencia">Asistencia</a></li>
                            <li><a href="#" id="promedio">Calificaciones</a></li>
                        </ul>
                    </nav>
                </li>
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

<table>
    
    <tr>

    <p id="MENU"></p>
      

    </tr>
    
</table>


    
</body>



</html>