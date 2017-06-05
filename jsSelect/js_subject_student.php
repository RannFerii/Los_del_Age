
<?php
		
			require'../conexion.class.php';
			$db= new Conexion();

			$id_subject=$_POST["query_subject_student"];
			echo $id_subject;
			echo $option='';


			$query="SELECT  id,student_id FROM student_has_subject where  period_has_group_id='$id_subject'";
		    $res=$db->query($query);
		    
		    $contador=0;
		    while($row= mysqli_fetch_array($res)){

				$id_student[$contador]=$row['id'];
				$student_id[$contador]=$row['student_id'];
				$contador=$contador + 1;

			}
            $longitud=count($student_id);
            
            $option.= "<option value=\"-\">Seleccionar</option>";
            for( $i=0;$i<$longitud;$i++)
			{
			    $query="SELECT  id,nombre FROM student where  id='$student_id[$i]'";
			    $res=$db->query($query);


			    while($row= mysqli_fetch_array($res)){

					
					$option.= "<option value='$id_student[$i]'>$row[nombre]</option>";
					echo $row['id']."<br>";

				}
			
     		}

			
			 echo $option;
			


		
		
     
          
	
			?>
