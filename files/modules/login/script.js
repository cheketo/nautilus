
$(document).ready(function() {
	if(get['error']=='login' || get['error']=='login#'){
		notifyError("Para ingresar a esta sección debe estar conectado.");
	}
	if(get['error']=='customer' || get['error']=='customer#'){
		notifyError("El cliente se encuentra deshabilitado por falta de pago.");
	}
});





$(function(){
	$(".ButtonLogin").click(function(){
		document.location = "process.login.php";
	});

	$("body").keypress(function(e){
		if(e.which==13){
			$(".ButtonLogin").click();
		}
	});

});
