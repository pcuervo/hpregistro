(function($){

	"use strict";

	$(function(){

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

})(jQuery);