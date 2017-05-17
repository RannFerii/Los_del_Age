
$(function(){

	$("#query_ciclo_materia").change(function(){ 
		var id= $(this).val();
		
		$.ajax({
			url: 'jsSelect/js_ciclo_materia.php',
			type: 'post',
			data: {query_ciclo_materia:id},
			success: function (data){

				$("#query_materia")
				.find('option')
				.remove()
				.end()
				.append(data);
				console.log(data);

				
			
				
			}
		});



	})

});




$(function(){

	$("#query_ciclo_materia").change(function(){ 
		var id= $(this).val();
		
			$.ajax({
			url: 'jsSelect/js_profesor.php',
			type: 'post',
			data: {query_ciclo_materia:id},
			success: function (data){

				$("#query_profesor")
				.find('option')
				.remove()
				.end()
				.append(data);
				console.log(data);

				
			
				
			}
		});


	})

});




	