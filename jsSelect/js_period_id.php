<?php
		
			require'../conexion.class.php';
			$db= new Conexion();

			$id_period=$_POST["query_period_id"];

			$query="SELECT  id FROM period_has_group where  period_id='$id_period'";
		    $res=$db->query($query);
			$option='';
			


			while($row= mysqli_fetch_array($res)){

				
				$option.= "<option value=\"$row[id]\">$row[id]</option>";
				echo $row["id"]."<br>";

			}
			
		
		
     
           echo $option;
	
			?>
