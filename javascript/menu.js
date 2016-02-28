$(document).ready(main);

var contador = 1;

function main(){
	if($(window).width() <= 800){
		$('nav').toggle()
	}
	
	$('.menu_bar').click(function(){
		$('nav').toggle()
		contador = 0;
	});
};