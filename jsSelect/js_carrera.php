<?php
		
			require'../conexion.class.php';
			$db= new Conexion();

			$id_ca=$_POST["query_carrer"];

			$query2="SELECT  id,nombre_ciclo FROM school_cycle where  id_carrer='$id_ca'";
			$res2=$db->query($query2);
			$option2='';
            $option2.= "<option value=\"-\">Seleccionar</option>";
			while($row= mysqli_fetch_array($res2)){
				
				$option2.= "<option value=\"$row[id]\">$row[nombre_ciclo]</option>";
			}
			
			echo $option2;


			?>