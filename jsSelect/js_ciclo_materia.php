<?php
		
			require'../conexion.class.php';
			$db= new Conexion();

			$id_ci=$_POST["query_ciclo_materia"];

			$query="SELECT  id,nombre_materia FROM subject where  id='$id_ci'";
			$res=$db->query($query);
			$option='';

			while($row= mysqli_fetch_array($res)){
				
				$option.= "<option value=\"$row[id]\">$row[nombre_materia]</option>";
			}
			
			echo $option;


			?>