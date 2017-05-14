<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="css/insertar_style.css">
		<title>Agregar Periodo</title>
		<script src="js/insertar.js"></script>
	</head>

	<body>

		<form class="form-style-4" action="CRUD/create.php" method="post">
		<label align="center">Periodo</label><br>
		<label>
			<span>Periodo:</span>
				<select class= "field-slid" name="periodo" >
			        <option value="1°-Semestre">1°-Semestre</option>
			        <option value="2°-Semestre">2°-Semestre</option>
			        <option value="3°-Semestre">3°-Semestre</option>
			        <option value="4°-Semestre">4°-Semestre</option>
			        <option value="5°-Semestre">5°-Semestre</option>
			        <option value="6°-Semestre">6°-Semestre</option>
			        <option value="7°-Semestre">7°-Semestre</option>
			        <option value="8°-Semestre">8°-Semestre</option>
			        <option value="9°-Semestre">9°-Semestre</option>
			        <option value="10°-Semestre">10°-Semestre</option>
			        <option value="1°-Cuatrimestre">1°-Cuatrimestre</option>
			        <option value="2°-Cuatrimestre">2°-Cuatrimestre</option>
			        <option value="3°-Cuatrimestre">3°-Cuatrimestre</option>
			        <option value="4°-Cuatrimestre">4°-Cuatrimestre</option>
			        <option value="5°-Cuatrimestre">5°-Cuatrimestre</option>
			        <option value="6°-Cuatrimestre">6°-Cuatrimestre</option>
			        <option value="7°-Cuatrimestre">7°-Cuatrimestre</option>
			        <option value="8°-Cuatrimestre">8°-Cuatrimestre</option>
			        <option value="9°-Cuatrimestre">9°-Cuatrimestre</option>
			       
			      
			        

			        
		         </select>
		</label>
		<label>
			<span>Tipo:</span>
				<select class= "field-slid" name="tipo" >
			        <option value="1">inpar</option>
			        <option value="2">par</option>
			        <option value="3">triple</option>
			        
		         </select>
		</label>
		<br>
		<?php
			require'../conexion.class.php';
			$db= new Conexion();
			$query="SELECT DISTINCT id,nombre_ciclo FROM school_cycle";
			$res=$db->query($query);
			$option='';
			while($row= mysqli_fetch_array($res)){
				$option.= "<option value=\"$row[id]\">$row[nombre_ciclo]</option>";
			}
		?>

		<label>
			<span>Ciclo:</span>
				<select class= "field-slid" name="ciclo" >
			        <option value="-">Seleccionar</option>
			        <?php echo $option;?>
		         </select>
		</label>
		<br>
		<label>
		<input type="submit" name="agregar_periodo" value="Agregar periodo" />
		</label>
		</form>

	</body>
</html>
