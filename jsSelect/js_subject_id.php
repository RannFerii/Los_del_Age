<?php
		
			require'../conexion.class.php';
			$db= new Conexion();

			$id_subject=$_POST["query_subject_id"];

			$query="SELECT  id FROM period_has_group where  subject_id='$id_subject'";
		    $res=$db->query($query);
			$option='';
			


			while($row= mysqli_fetch_array($res)){

				
				$option.= "<option value=\"$row[id]\">$row[id]</option>";
				echo $row["id"]."<br>";

			}
			
		
		
     
           echo $option;
	
			?>
