
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
			url: 'jsSelect/js_period_connect.php',
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

$(function(){

	$("#query_period").change(function(){ 
		var id= $(this).val();
		
		$.ajax({
			url: 'jsSelect/js_period_id.php',
			type: 'post',
			data: {query_period_id:id},
			success: function (data){

				$("#query_cycle_has_subject")
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





   function hide(){
          var elem = document.getElementById('query_cycle_has_subject');
          elem.style.display = 'none';
        }





