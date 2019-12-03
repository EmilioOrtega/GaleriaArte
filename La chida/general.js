$(document).ready(function(){

	$('#log').click(function(){
		var configuracion = { 
			funcion: "checarUsuario",
			user: $("#log_user").val(),
			pass: $("#log_pass").val()
		};
		$.ajax({
			type: "POST",
			url: "ajax.php",
			data: configuracion,
			success: function(response)
			{
				if (response == "ok") {
					alertify.alert('Exito', 'Bienvenido a la Galeria Brothers', 
					function(){ $('#log_form').submit(); });
				}else {
					alertify.alert("Error", "El usuario o la contraseña no son correctos");
				}
			}
		});
	});

	$('#sign').click(function(){
		if ($("#sign_pass").val().length<8) {
			alertify.alert("Error", "La contraseña debe tener entre 8 y 16 caracteres");
			return;
		}
		var configuracion = { 
			funcion: "checarDisponible",
			user: $("#sign_name").val()
		};
		$.ajax({
			type: "POST",
			url: 'ajax.php',
			data: configuracion,
			success: function(response)
			{
				if (response == "ok") {
					alertify.alert('Exito', 'Usuario creado exitosamente', 
					function(){ $('#sign_form').submit(); });
				}else {
					alertify.alert("Error", "El usuario elegido ya existe");
				}
			}
		});
	});
});