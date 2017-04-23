<!DOCTYPE html>
<html>
<head>
	<title>usuarios registrados</title>
	<link rel="stylesheet" href="css/nav_style.css">

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
            <li><a href="#">Registro</a></li>
            <li><a href="#">Acerca de</a></li>
            <li>
                <a href="#">Opciones <span class="toggle">Expand</span><span class="caret"></span></a>
                <nav>
                    <ul>
                        <li><a href="#">Tablas</a></li>
                        <li><a href="#">Mas</a></li>
                        <li><a href="#">Humour</a></li>
                        <li><a href="#">Opciones</a></li>
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





<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/nav.js"></script>
</body>
</html>