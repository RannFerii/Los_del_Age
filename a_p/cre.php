
<?php

require '../conexion.class.php';
$db = new Conexion();


$calificacion = $_POST["score_calificacion"];
$tipo= $_POST["tipo"];
$id= $_POST["id_period_student"];
$contador=0;


  $sql= "SELECT score_type FROM  score where score_type='$tipo'";
  $res=$db->query($sql);


  $fila=mysqli_num_rows($res);

     if($fila==0){
     	echo 1;
     }else{
     	echo 0;
     }

/*
			
			while($row= mysqli_fetch_array($res)){
				$score_type[$contador]=$row['score_type'];
				$contador=$contador + 1;
				
			}
			$longitud= count($score_type);

			for( $i=0;$i<$longitud;$i++)
			{
				
			

				
			}

			$var1 = "Hola";
			$var2 = "hola";
			if (strcmp($var1, $var2) !== 0) {
			    echo '$var1 no es igual a $var2 en una comparación que considera mayúsculas y minúsculas';
			}
			*/
 
	?>

