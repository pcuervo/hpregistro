$(document).ready(function(e) {
    $("#otro").hide();    
	$(".primer_campo").focus(); 
	activarCampoOtro();   
});


// Funciones
function activarCampoOtro() {
	$("input[type=radio]").click(function(){
		if($(this).attr("value") == "otro") {
			$("#otro").show();	
			$("#otro input").focus();
		} else {
			$("#otro").hide();	
		}
	});	
}