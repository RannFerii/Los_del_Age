$(obtener_profesor());
$(obtener_alumno());

function obtener_profesor(profesor)
{
	$.ajax({
		url : 'busqueda/search_profesor.php',
		type : 'POST',
		dataType : 'html',
		data : { profesor: profesor },
		})

	.done(function(resultado){
		$("#tabla_profesor").html(resultado);
	})
}

$(document).on('keyup', '#busqueda_profesor', function()
{
	var valorBusqueda=$(this).val();
	if (valorBusqueda!="")
	{
		obtener_profesor(valorBusqueda);
	}
	else
		{
			obtener_profesor();
		}
});


function obtener_alumno(alumno)
{
	$.ajax({
		url : 'busqueda/search_alumno.php',
		type : 'POST',
		dataType : 'html',
		data : { alumno: alumno },
		})

	.done(function(resultado){
		$("#tabla_alumno").html(resultado);
	})
}

$(document).on('keyup', '#busqueda_alumno', function()
{
	var valorBusqueda=$(this).val();
	if (valorBusqueda!="")
	{
		obtener_alumno(valorBusqueda);
	}
	else
		{
			obtener_alumno();
		}
});