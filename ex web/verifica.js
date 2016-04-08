$(document).ready(function(e){
	$("#dialog-confirm").hide();
	$(".menuPrincipal a").click(function(e){
		e.preventDefaut();
		var href = $(this).attr('href');
		$(" .conteudo").load(href + " .conteudo");
 });
});
function dialogo(){
	$("#dialog-confirm").dialog({
		resizable: false,
		width:400,
		modal: true,
		buttons: {
			"Confirma": function() {
				$(this).dialog( "close" );
			},
			Cancelar: function() {
				$(this).dialog( "close" );
			}
		}
});
};

function email(){
	var email = document.querySelector("#email").value.split('@');
	var nome = document.querySelector("#nome").value.split(' ');
	var var1 = email[0];
	var var2 = email[1];
	var nome1 = nome[0];
	var nome2 = nome[1];
	var ok = false;
	
	if( var1.length > 3){
		ok = true;
	}

	if (var2.length > 4){
		ok = true;
		
	} 

	if( nome1.length > 3){
		ok = true;
	}

	 if (nome2.length > 4){
		ok = true;
		
	} 

	if ( ok = false){
		alert("Algum campo não foi preenchido corretamente");
	}
});
  
