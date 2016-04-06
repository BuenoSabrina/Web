$(document).ready(function(){
	$("#data").mask("99/99/9999");
});
 
function verifica(){
		var datanasc = document.querySelector("#data").value.split('/');
		var hoje = new Date();
		var dia = hoje.getDate();
		var mes = hoje.getMonth() + 1;
		var ano = hoje.getYear() + 1900;
		var dianasc = datanasc[0];
		var mesnasc = datanasc[1];
		var anonasc = datanasc[2];

		if (anonasc > ano){
			alert("O ano de nascimento informada deve ser anterior ao ano atual!");
		}

		else if (mesnasc > mes && anonasc == ano){
			alert("O mes de nascimento informada deve ser anterior ao mes atual!");
		}

		else if (mesnasc == mes && anonasc == ano && dianasc > dia){
			alert("o dia de nascimento deve ser anterior ao dia atual");
		}
		
		else if(dianasc == dia && mesnasc == mes){
			alert("hoje é seu aniversário!");
		}
		
		else {
			var idade;
			idade = ano - anonasc;
			alert("você tem " + idade + " anos");
		}
		
		
};

	if (anonasc >= 1945 && anonasc <= 1999){
		alert ("você está apto para votar");
	}else{
		alert ("você não está apto para votar");
	}
