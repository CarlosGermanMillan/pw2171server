// $ = jquery
var iniciaApp = function(){
	//alert("Hola App");
	var entrar = function(){
		alert($("txtUsuario").val());
		alert($("txtClave").val());
	}
	var teclaUsuario = function(tecla){
		if(tecla.wich==13){
			$("txtClave").focus();
		}
	}
	var teclaClave= function(tecla){
		if(tecla.wich==13){
			entrar();
		}
	}
	//Sección de declaración de eventoss
	$("#btnEntrar").on("click",entrar);
	$("txtUsuario").on("keypress",teclaUsuario);
	$("txtClave").on("keypress",teclaClave);
}
$(document).ready(iniciaApp);