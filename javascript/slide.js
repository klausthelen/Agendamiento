var i = 0;
pasar();
var myVar = setInterval(pasar, 1500);
	 function pasar () {
	 		
	 		var ruta_images = new Array (
	 				"images/presindex/cal1.png",
	 				"images/presindex/cal2.png",
	 				"images/presindex/cal3.png",
	 				"images/presindex/cal4.png",
	 				"images/presindex/cal5.png"
	 			); 

	 		if(i==5){i=0;}
		 	document.getElementById('img_cal').src = ruta_images[i];
		 	i= i + 1;
	}	