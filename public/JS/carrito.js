$(document).ready(function(){
	$('#comprar').click(function(){
		if ($("#tipo").val() == 't') {
			alertify.alert("Error", "Se necesita iniciar sesion para poder comprar");
			return;
		}
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