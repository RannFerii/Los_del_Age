	<?php
		
			require'../conexion.class.php';
			$db= new Conexion();

			$id_fa=$_POST["query_facul"];
			

			$query="SELECT DISTINCT id,nombre_carrera FROM carrer where  faculty_id='$id_fa'";
			$res=$db->query($query);
			$option='';

			$option.= "<option value=\"-\">Seleccionar</option>";
			while($row= mysqli_fetch_array($res)){

				
				$option.= "<option value=\"$row[id]\">$row[nombre_carrera]</option>";
			}
			
			echo $option;
?>