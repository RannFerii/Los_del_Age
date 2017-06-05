	<?php
		
			require'../conexion.class.php';
			$db= new Conexion();

			$id_cy=$_POST["query_cycle"];
			$query3="SELECT  id,nombre_periodo FROM period where  school_cycle_id='$id_cy'";
			$res3=$db->query($query3);
			$option3='';
            $option3.= "<option value=\"-\">Seleccionar</option>";
			while($row= mysqli_fetch_array($res3)){
				
				$option3.= "<option value=\"$row[id]\">$row[nombre_periodo]</option>";
			}
			
			echo $option3;

			
	
		?>