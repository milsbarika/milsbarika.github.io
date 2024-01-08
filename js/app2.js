$(function(){
	/* $( "p" ).hide(); */
     $( "a" ).on('click', function() {
		 $("img").css("display","none");
		/*  $("img").css("display","none"); */
		 var txt1="<p class='red'>Barika</p>";
		 var txt2="Bitam";
		 var txt3="Ouled Ammar";
		 if($(this).attr("xlink:title")=="Barika"){
			$("img#imgbar").fadeIn(); 
            $('#mareg').html(txt1); }
		else if($(this).attr("xlink:title")=="Bitam"){	
		    $("img#imgbit").fadeIn(); 
            $('#mareg').html(txt2); }
		else if($(this).attr("xlink:title")=="Ouled Ammar"){
			$("img#imgseg").fadeIn(); 
            $('#mareg').html(txt3); }
		else if($(this).attr("xlink:title")=="M'Doukal"){	
            $('#mareg').html("M'Doukal"); }
	 });	
});
$(function(){
  $('[id*=Wilaya_]').on('mouseover',function(){

	  /* console.log($(this)); */
	  let region =$(this);
	  let regionID=$(this)["0"].id;
	  let allRegion=$('[id*=Wilaya_]');
	  
	  // console.log(region);
	  // console.log(regionID); 
	  
	    if($(this).attr("title")=="")return false;
			$('#utility-2').append('<span class="infobulle" style="color:#f0f;background-color:#abc;"></span>');
			var bulle=$('.infobulle');

	  
 	  /*  
	    lors du click toute les regions deviennent blanches
	   et  la region clickée devient verte
		
	  */
	  allRegion.css('fill','#ffffff');
	  region.css('fill','#00ff90');
	  
	regionID=regionID.replace('Wilaya_','');
	       //console.log(regionID);
	  
	    let boucle = true;
	     do{
			 regionID=regionID.replace('_',' ');
			if(regionID.indexOf('_')== -1)
				boucle = false;
			 
		 }while(boucle);
		 $('#infosRegion').text(regionID);
		 
		 	bulle.append().text(regionID);
			var posTop=$(this).offset().top - $(this).height()+20;
			var PosLeft=$(this).offset().left + $(this).width()/2-bulle.width()/2;
			bulle.css({
						left:PosLeft,
						top:posTop
						
					}); 
		 
           /* console.log(regionID);  */
		   
});
});
	$('[id*=Wilaya_]').mouseout(function(){
	$(".infobulle").remove();
});

/* $(function(){
		$("a").mouseover(function(){
			if($(this).attr("title")=="")return false;
			$("body").append('<span class="infobulle"></span>');
			var bulle=$('.infobulle');
			bulle.append($(this).attr('title'));
			var posTop=$(this).offset().top - $(this).height();
			var PosLeft=$(this).offset().left + $(this).width()/2-bulle.width()/2;
			bulle.css({
						left:PosLeft,
						top:posTop
						
					});
	});
	
	$("a").mouseout(function(){
	$(".infobulle").remove();
});
	
}); */


/* function hello(evt){
	msg(evt.target.innerHTML);
} */


/* function hello(evt){
	msg("largeur: " + evt.target.innerWidth + ",hauteur: " + evt.target.innerHeight);
} */

/* function hello(){
	msg($("#head1").text());
} */
/* var obj = document.getElementById("head1");
obj.style.color="red"; */
/* //fonction de debogage
function msg(txt){
	console.log(txt);
}
$( document ).ready(function(){
	
	var txt = "coucou c'est moi toto";
msg($("#head1").text(txt));
}); */