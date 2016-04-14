$(document).ready(function(e){
	$(".menuTopo a ").click(function(e){
	e.preventDefault();
	var href=$(this).attr("href");
	$(".aPorraToda").load(href + " .conteudo");
});
});
