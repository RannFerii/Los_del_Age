
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
			
			}
		});
	})

});



$(function(){

	$("#query_cycle").change(function(){ 
		var id= $(this).val();
		
		$.ajax({
			url: 'jsSelect/js_ciclo.php',
			type: 'post',
			data: {query_cycle:id},
			success: function (data){

				$("#query_period")
				.find('option')
				.remove()
				.end()
				.append(data);
				console.log(data);
				
			}
		});
	})

});
//period conenect subject js

$(function(){

	$("#query_period").change(function(){ 
		var id= $(this).val();
		
		$.ajax({
			url: 'jsSelect/js_period_connect_student.php',
			type: 'post',
			data: {query_period:id},
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



// subject  student


$(function(){

	$("#query_subject").change(function(){ 
		var id= $(this).val();
		
		$.ajax({
			url: 'jsSelect/js_subject_student.php',
			type: 'post',
			data: {query_subject_student:id},
			success: function (data){

				$("#query_student")
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

	$("#query_student").change(function(){ 
		var id= $(this).val();
		
		$.ajax({
			url: 'jsSelect/js_student_period_has_group_id.php',
			type: 'post',
			data: {query_period_has_group_has_student_id:id},
			success: function (data){

				$("#query_period_has_group_has_student_id")
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







