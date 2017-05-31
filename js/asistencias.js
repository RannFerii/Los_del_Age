
$(function(){

	$("#query_facul").change(function(){ 
		var id= $(this).val();
		
		$.ajax({
			url: 'jsSelect/js_facultad.php',
			type: 'post',
			data: {query_facul:id},
			success: function (data){

				$("#query_carrer")
				.find('option')
				.remove()
				.end()
				.append(data);
				console.log(data);

				$("#query_cycle")
				.find('option')
				.remove()
				.end();
				$("#query_period")
				.find('option')
				.remove()
				.end();
			
				
			}
		});
	})

});

$(function(){

	$("#query_carrer").change(function(){ 
		var id= $(this).val();
		
		$.ajax({
			url: 'jsSelect/js_carrera.php',
			type: 'post',
			data: {query_carrer:id},
			success: function (data){

				$("#query_cycle")
				.find('option')
				.remove()
				.end()
				.append(data);
				console.log(data);
				$("#query_period")
				.find('option')
				.remove()
				.end();
				
			}
		});
	})

});



$(function(){

	$("#query_cycle").change(function(){ 
		var id= $(this).val();
		
		$.ajax({
			url: 'jsSelect/js_cycle_subject.php',
			type: 'post',
			data: {query_cycle:id},
			success: function (data){

				$("#query_subject")
				.find('option')
				.remove()
				.end()
				.append(data);
				console.log(data);
				
			}
		});
	})

});

//subject group

$(function(){

	$("#query_group").change(function(){ 
		var id= $(this).val();
		
		$.ajax({
			url: 'jsSelect/js_group.php',
			type: 'post',
			data: {query_group:id},
			success: function (data){

				$("#query_subject")
				.find('option')
				.remove()
				.end()
				.append(data);
				console.log(data);
				
			}
		});
	})

});










	