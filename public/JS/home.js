
$(document).ready(function(){
	$(document).on('click', '#carrito', function(){
		var id = $(this).val();
		var configuracion = { 
			funcion: "agregarCarrito",
			user: $("#user").val(),
			producto: $("#producto_"+id).val()
		};
		$.ajax({
			type: "POST",
			url: 'ajax.php',
			data: configuracion,
			success: function(response)
			{
				if (response == "Se agregó el producto al carrito correctamente") {
					alert("Se agrego al carrito correctamente");
				}
			}
		});
	});
});