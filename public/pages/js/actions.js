(function ($) {

	$("#actionForm").on('submit', (function (event) {
		event.preventDefault();
		service = $("#service").val();
		names = $("#names").val();
		email = $("#email").val();
		phone = $("#phone").val();
		company = $("#company").val()
		whatsapp = $("#whatsapp").val()
		

		url = "https://api.whatsapp.com/send?phone=57"+whatsapp+"&text=Hola%20estoy%20interesado%20en%los%20serivicios%20de%20%20" + service + "%20Mi%20nombre%20es: " + names + "%20Correo:%20" + email + "%20#%20Telefono%20" + phone;
		window.location.replace(url);

	}));


	

})(jQuery);