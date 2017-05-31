
$(function(){

	$("#query_faculty").change(function(){ 
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
