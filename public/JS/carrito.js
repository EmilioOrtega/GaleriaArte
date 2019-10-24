$(document).ready(function(){
	$('#comprar').click(function(){
		if ($("#tipo").val() == 't') {
			alertify.alert("Error", "Se necesita iniciar sesion para poder comprar");
			return;
		}

		if ($("#tarjeta").val().length<16) {
			alertify.alert("Error", "Se necesita tener una tarjeta registrada para realizar la compra");
			return;
		}

		alertify.confirm('Comprar Carrito', 'Desea comprar todo su carrito?', 
			function(){
				var configuracion = { 
					funcion: "comprarCarrito",
					user: $("#user").val(),
					tarjeta: $("#tarjeta").val(),
					total: $("#total").val()
				};
				$.ajax({
					type: "POST",
					url: 'ajax.php',
					data: configuracion,
					success: function(response)
					{
						alertify.alert('Alerta !', response, 
					function(){ location.href='http://192.168.84.49/VinateriaWeb/home'; });
					}
				});
			}, 
			function(){});

		/*var configuracion = { 
			funcion: "checarUsuario",
			user: $("#log_user").val(),
			pass: $("#log_pass").val()
		};
		$.ajax({
			type: "POST",
			url: 'ajax.php',
			data: configuracion,
			success: function(response)
			{
				if (response == "ok") {
					alertify.alert('Exito', 'Bienvenido a la Vinatería Cocos en la Playa', 
					function(){ $('#log_form').submit(); });
				}else {
					alertify.alert("Error", "El usuario o la contraseña no son correctos");
				}
			}
		});*/
	});
});