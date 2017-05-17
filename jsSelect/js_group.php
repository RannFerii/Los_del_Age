	<?php
		
			require'../conexion.class.php';
			$db= new Conexion();

			$id_group=$_POST["query_group"];
			$query3="SELECT  id,nombre_materia FROM subject where  _group_id='$id_group'";
			$res3=$db->query($query3);
			$option3='';

			while($row= mysqli_fetch_array($res3)){
				
				$option3.= "<option value=\"$row[id]\">$row[nombre_materia]</option>";
			}
			
			echo $option3;

			
	
		?>