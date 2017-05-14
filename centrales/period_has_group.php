<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="css/insertar_style.css">
		<title>period_has_group</title>
		<script src="js/insertar.js"></script>


		 <script>
            function capturar(){
            	  var porNombre=document.getElementsByName("facultad")[0].value;

            	     document.getElementById("resultado").innerHTML=porNombre;
            	      var variableJS ="5";

            }

           


         


        </script>

	</head>

	<body>
	<?php
$fac = "<script> document.write(variableJS) </script>";


?>



		<form class="form-style-4"  method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
		<label align="center">perdiod_has_group</label><br>
		
		<?php
			require'../conexion.class.php';
			$db= new Conexion();
			$query="SELECT DISTINCT id,nombre_faculty FROM faculty";
			$res=$db->query($query);
			$option='';
			
			while($row= mysqli_fetch_array($res)){
				$option.= "<option value=\"$row[id]\">$row[nombre_faculty]</option>";
				
			}
		?>

		<label>
			<span>Facultad:</span>
				<select  class= "field-slid" name="facultad" >
			        
			        <?php echo $option;?>
		         </select>
		</label>
		<br>

		<?php
		if(isset($_POST['submit']))

        {

        	$id=$_POST["facultad"];


			
			$db= new Conexion();
			$query2="SELECT DISTINCT id,nombre_carrera  FROM carrer where faculty_id='$id'";
			$res2=$db->query($query2);
			$option2='';
			while($row2= mysqli_fetch_array($res2)){
				$option2.= "<option value=\"$row2[id]\">$row2[nombre_carrera]</option>";
			}
		}
		?>

		<label>
			<span>Carrera</span>
				<select class= "field-slid" name="carrera" >
			        
			        <?php echo $option2;?>
		         </select>
		</label>
		<label id="resultado"></label>
		<label>
		<input type="submit" name="submit" value="agregar_periodo" onclick="capturar()"/>
		</label>
		</form>

	</body>
</html>
