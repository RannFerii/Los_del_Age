<?php
		
			require'../conexion.class.php';
			$db= new Conexion();

			$id_period=$_POST["query_period"];

			$query="SELECT  id,subject_id FROM period_has_group where  period_id='$id_period'";
		    $res=$db->query($query);
			$option='';
			$teacher='';
			$contador=0;
			$ciclo='';


			while($row= mysqli_fetch_array($res)){

				
				$materia[$contador]=$row['subject_id'];
				$contador=$contador + 1;
				echo $contador ."<br>";
			}
			
		
			$longitud= count($materia);
			echo $longitud."<br>";
			$option.= "<option value=\"-\">Seleccionar</option>";
			for( $i=0;$i<$longitud;$i++)
			{
				echo $materia[$i]."<br>";
			$query="SELECT  id,nombre_materia FROM subject where  id='$materia[$i]'";
			$res=$db->query($query);


				while($row= mysqli_fetch_array($res)){

					$option.= "<option value=\"$row[id]\">$row[nombre_materia]</option>";
					
				}

				
			}


     
           echo $option;
	
			?>
