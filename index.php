<html>
  <head>
  <title>MAIN</title>
  <link rel="stylesheet" href="css/nav_style.css">
  <script src="js/nav.js"></script>
  <script type="text/javascript" src="js/query.js"></script>


  <script>
            $(document).ready(function(){

                //CENTRAL
                $('#P_H_G').click(function(){
                $("#agregar_central").load("centrales/period_has_group.php");
                                             });

                //CATALOGOS

                $('#profesor').click(function(){
                $("#agregar_catalogos").load("catalogos/profesor.php");
                                             });

                $('#alumno').click(function(){
                $("#agregar_catalogos").load("catalogos/alumno.php");
                                             });

                $('#carrera').click(function(){
                $("#agregar_catalogos").load("catalogos/carrera.php");
                                             });

                $('#facultad').click(function(){
                $("#agregar_catalogos").load("catalogos/facultad.php");
                                             });
                $('#ciclo').click(function(){
                $("#agregar_catalogos").load("catalogos/ciclo_escolar.php");
                                             });
                $('#periodo').click(function(){
                $("#agregar_catalogos").load("catalogos/periodo.php");
                                             });
                $('#materia').click(function(){
                $("#agregar_catalogos").load("catalogos/materia.php");
                                             });
                $('#grupo').click(function(){
                $("#agregar_catalogos").load("catalogos/grupo.php");
                                             });


                //MOSTRAR CATALOGOS

                $('#r_profesor').click(function(){
                $("#mostrar_catalogos").load("CRUD/read_profesor.php");
                                             });
                 $('#r_facultad').click(function(){
                $("#mostrar_catalogos").load("CRUD/read_facultad.php");
                                             });
                                        });

                 //MOSTRAR relaciones

                 


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
                    <a href="#">Central<span class="toggle">Expand</span><span class="caret"></span></a>
                    <nav>
                        <ul>
                            <li><a href="#" id="P_H_G">central</a></li>
                          
                        </ul>
                    </nav>
                </li>

                <li>
                    <a href="#">Agregar<span class="toggle">Expand</span><span class="caret"></span></a>
                    <nav>
                        <ul>
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
                            <li><a href="#" id="r_facultad">Facultades</a></li>
                            <li><a href="#">Music</a></li>
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
        <td>
           <p id ="agregar_catalogos"></p>
        </td>
        <td>
            <p id="mostrar_catalogos"></p>
        </td>
    </tr>
    <tr>

    <p id="agregar_central"></p>
      

    </tr>
</table>


    
</body>



</html>