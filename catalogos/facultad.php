<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="css/insertar_style.css">
		<title>Agregar Facultad</title>

		<script>
			
			$(function(){
				$('#enviar').on('click',function(e){
					e.preventDefault();
					
					var nombre= $('#nombre').val();

					$.ajax({
						type: "POST",
						url:"validacion/validacion.php",
						data:('score_calificacion='+calificacion+'&tipo='+tipo+'&id_period_student='+id),
					
						success: function(respuesta){
							if(respuesta==1){
								$('#mensaje').html('Facultad agregada');
								
							}
								else{
								$('#mensaje').html('Facultad repetida, ingresa otra diferente');
								$('#nombre').val("");
								
							}
						}


					});
				})
			})



		</script>
		
	</head>

	<body>

		<form class="form-style-4" action="CRUD/create.php" method="post">
		<label align="center"><h1>Facultad</h1></label><br>
		<label >
		<span>Nombre: </span><input type="text" name="nombre" id="nombre" required="true" />
		</label>
		<br>
		<span id="mensaje"></span>
	
		<input type="submit" name="agregar_facultad" id="enviar" value="Agregar facultad" />
		
		</form>

	</body>
</html>
