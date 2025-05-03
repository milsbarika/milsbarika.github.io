
	
	$( document ).ready(function(){	
		$('#menu1 li a').click(function(){
			$('#menu1 a').removeClass('active');             // utiliser cette methode ou l'autre
			$(this).addClass('active');
					
			/* $(this).addClass('active').parent().siblings().find('a').removeClass('active'); */
		 });
		 		 
	 });	 
