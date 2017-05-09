<!DOCTYPE html>
<html>
<head>
	<title>navbar</title>
	<link rel="stylesheet" href="../css/nav_style.css">
	<script src="../js/nav.js"></script>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>


</head>
<body>
	 <header>
	    <div id="logo" class="menuUp">
	        <IMG SRC="../img/LDA1.png" height=50 >
	        <IMG SRC="../img/DB2.png"  width=50>

	        <div id="navToggle"><a href="#">Menu</a></div>
	    </div>
	    <nav>
	        <ul>
	            <li>
	            	<a href="#">Mostrar<span class="toggle">Expand</span><span class="caret"></span></a>
	                <nav>
	                    <ul>
	                        <li><a href="CRUD/read.php">Profesor</a></li>
	                        <li><a href="../CRUD/read_alumno.php"target="central">Alumno</a></li>
	                        <li><a href="../CRUD/read_facultad.php"target="central">Facultad</a></li>
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

	
</body>

</html>