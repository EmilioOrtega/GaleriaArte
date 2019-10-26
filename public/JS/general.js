$(document).ready(function(){
	$('#log').click(function(){
		var configuracion = { 
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
		});
	});

	$('#sign').click(function(){
		if (tiene_numeros($("#sign_name").val())) {
			alertify.alert("Error", "Formato de nombre incorrecto");
			return;
		}
		if (tiene_numeros($("#sign_last").val())) {
			alertify.alert("Error", "Formato de apellidos incorrecto");
			return;
		}
		if ($("#sign_pass").val().length<8) {
			alertify.alert("Error", "La contraseña debe tener entre 8 y 16 caracteres");
			return;
		}
		var configuracion = { 
			funcion: "checarDisponible",
			user: $("#sign_user").val()
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

	$('#card').click(function(){
		var configuracion = { 
			funcion: "checarTarjeta",
			card: $("#card_card").val(),
			cvv: $("#card_cvv").val()
		};
		$.ajax({
			type: "POST",
			url: 'ajax.php',
			data: configuracion,
			success: function(response)
			{
				if (response == "ok") {
					alertify.alert('Exito', 'Tarjeta introducida exitosamente', 
					function(){ location.reload(); });
				}else {
					alertify.alert("Error", "La tarjeta o su codigo no son correctos");
				}
			}
		});
	});

	function tiene_numeros(texto){
		var numeros="0123456789";
		for(i=0; i<texto.length; i++){
			if (numeros.indexOf(texto.charAt(i),0)!=-1){
				return true;
			}
		}
		return false;
	}
});