<?php
		
			require'../conexion.class.php';
			$db= new Conexion();

			$id_ci=$_POST["query_ciclo_materia"];

			$query2="SELECT  id,nombre FROM teacher where  id='$id_ci'";
			$res2=$db->query($query2);
			$option2='';

			while($row= mysqli_fetch_array($res2)){
				
				$option2.= "<option value=\"$row[id]\">$row[nombre]</option>";
			}
			
			echo $option2;


			?>