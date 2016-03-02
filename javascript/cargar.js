$(document).ready(main);
var contador = 0;
function main(){
	
	//funcion para que se anime el menu al iniciar
	menu();	
	index();
	hora();
	pegajoso();
};

function menu(){
	if($(window).width() <= 800){
		//funcion para cuando es pequeño el dispositivo
		menures();
	}
	else{		
				$('nav').hide();	
				$("#item1").hide();
				$("#item2").hide();
				$("#item3").hide();
				$("#item4").hide();
				$("#item5").hide();
				$('nav').show(600,function(){});
				$("#item1").show(400,function(){
					$("#item2").show(400,function(){
						$("#item3").show(400,function(){	
							$("#item4").show(400,function(){
								$("#item5").show(400,function(){		
								});			
							});	
						});
					});
				});
			
		}
	
}

function menures(){
	$('nav').hide();
	$('.menu_bar').click(function(){
		$('nav').toggle();
		$("#item1").hide();
		$("#item2").hide();
		$("#item3").hide();
		$("#item4").hide();

		$("#item1").show(400,function(){
					$("#item2").show(400,function(){
						$("#item3").show(400,function(){	
							$("#item4").show(400,function(){		
							});	
						});
					});
				});
	});
	$(window).on('scroll',function(){
		$('nav').hide();
	});
}

function index(){

	$("#Welcome").toggle();
	$("#Welcome").show(500,function(){});	
	
}		

function hora(){
	myTimer();
	setInterval(myTimer, 1000);
	function myTimer() {
	    var d = new Date();
	    document.getElementById("fecha").innerHTML = d.toLocaleTimeString();
	    }
}

function pegajoso(){
	if($(window).width() <= 800){
		//funcion para cuando es pequeño el dispositivo
		pegares();
	}
	var altura = $('.menu_nav').offset().top;
	$(window).on('scroll',function(){
		if($(window).scrollTop() > altura){
			$('.menu_nav').addClass('menu_fixed');
		}else{
			$('.menu_nav').removeClass('menu_fixed');
		}
	});

}

function pegares(){
	
	var altura = $('.menu_bar').offset().top;
	$(window).on('scroll',function(){
		if($(window).scrollTop() > altura){
			$('.menu_bar').addClass('mnu_bar_fxd');
			$('.menu_nav').addClass('menu_fixed');
			$('.icon-menu3').addClass('icon-eject');
		}else{
			$('.menu_bar').removeClass('mnu_bar_fxd');
			$('.menu_nav').removeClass('menu_fixed');
			$('.icon-menu3').removeClass('icon-eject');
		}
	});

}		
						
