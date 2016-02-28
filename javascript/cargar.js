$(document).ready(main);

function main(){
	
	//funcion para que se anime el menu al iniciar
	menu();	
	index();
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
				$('nav').show(600,function(){});
				$("#item1").show(400,function(){
					$("#item2").show(400,function(){
						$("#item3").show(400,function(){	
							$("#item4").show(400,function(){		
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
}

function index(){
	$("#Welcome").toggle();
	$("#Welcome").show(500,function(){});	
								
						
}