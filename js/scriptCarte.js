


$(function(){
	$(".diva p ").css("display","none");
     $( ".mapdiv a" ).on('mouseover', function(e) {
		 /* e.preventDefault(); */
		 $(".diva p ").css("display","none");
		
		 var txt1="Barika - بريكة";
		 var txt2="Bitam - بطام";
		 var txt3="Seggana - سقانة";
		 var txt4="M'Doukal - امدوكال";
		 var txt5="Metkaouak - متكعوك";
		 var txt6="Djzezzar - الجزار";
		 var txt7="Ouled Ammar - اولاد عمار";
		 var txt8="Tilatou - تيلاطو";
		
		 var txt9="Sefiane - سفيان";
		 var txt10="Gosbat - غوسبات";
		 var txt11="Boumaguer - بومقر";
		 var txt12="N'Gaous - نقاوس";
		 var txt13="OuledAouf - اولاد عوف";
		 var txt14="Ouled Si Sliman - اولاد سي سليمان";
		 var txt15="Ras ElAouin - رأس العيون";
		 var txt16="Guigba - قيقبة";
		 var txt17="Rahbat - الرحبات";
		 var txt18="Ain Touta - عين التوتة";
		 var txt19="Maafa - هعافة";
		 var txt20="Hidoussa - حيدوسة";
		 var txt21="Taxlent - تاكسلانت";
		 var txt22="Lemcen - لمسان";
		 var txt23="Oued Chaaba - واد الشعبة";
		 var txt24="OuledSellam - اولاد سلام";
		 var txt25="Talkhamtt - تالخمت";
		 var txt26="Merouana - مروانة";
		 var txt27="Ksarr Bellezma - قصر بالزمة";
		 var txt28="El Hassi - الحاسي";
		 var txt29="Ain Djasser - عين جاسر";
		 var txt30="Oued El Ma - واد الماء";
		 var txt31="Zana El Beida - زانة البيضاء";
		 var txt32="Lazrou - لازرو";
		 var txt33="Seriana - سريانة";
		 var txt34="Fesdis - فسديس";
		 var txt35="Djerna - الجرنة";
		 var txt36="Ain Yaggout - عين ياقوت";
		 var txt37="El Madher - المعذر";
		 var txt38="Boumia - بوميا";
		 var txt39="Boulehilet - بولهيلات";
		 var txt40="Chemora - شمورة";
		 var txt41="Oum El Assafir - أم العصافير";
		 var txt42="Timgad - تيمقاد";
		 var txt43="Ouled Fadel - اولاد فاضل";
		 var txt44="Beni Fadhala - بني فضالة";
		 var txt45="Larbaa - الاربعاء";
		 var txt46="Tazoult - تازولت";
		 var txt47="Oued Taga - واد الطاقة";
		 var txt48="Bouzina - بوزينة";
		 var txt49="Ghassira - غاسيرة";
		 var txt50="Menaa - منعة";
		 var txt51="Tigherghar - تيقرقار";
		 var txt52="Chir - شير";
		 var txt53="Theniet El Abed - ثنية العابد";
		 var txt54="Tiganimine - تيقانيمين";
		 var txt55="Arris - أريس";
		 var txt56="Foum Toub - فم الطوب";
		 var txt57="Ichmoul - اشمول";
		 var txt58="inoughissen - انوغيسان";
		 var txt59="T'Kout - تكوت";
		 var txt60="Kimmel - كيمل";
		 var txt61="Batna - باتنة";
		 
 		 if($(this).attr("xlink:title")=="Batna"){
			
            $('#mareg').html(txt61); } 
		 if($(this).attr("xlink:title")=="Barika"){
			 
            $('#mareg').html(txt1); }
		else if($(this).attr("xlink:title")=="Bitam"){
			$('#mareg').html(txt2);
		
             }
		else if($(this).attr("xlink:title")=="Seggana"){
			
            $('#mareg').html(txt3); }
		else if($(this).attr("xlink:title")=="M'Doukal"){
		
            $('#mareg').html(txt4); }
		else if($(this).attr("xlink:title")=="Metkaouak"){
			 
            $('#mareg').html(txt5); }
		else if($(this).attr("xlink:title")=="Djzezzar"){
			
            $('#mareg').html(txt6); }
		else if($(this).attr("xlink:title")=="Ouled Ammar"){
			 
            $('#mareg').html(txt7); }
		else if($(this).attr("xlink:title")=="Tilatou"){
			 
            $('#mareg').html(txt8); }
		if($(this).attr("xlink:title")=="Sefiane"){
			
            $('#mareg').html(txt9); } 
		 if($(this).attr("xlink:title")=="Gosbat"){
		
            $('#mareg').html(txt10); }
		else if($(this).attr("xlink:title")=="Boumaguer"){
			$('#mareg').html(txt11);
		  
             }
		else if($(this).attr("xlink:title")=="N'gous"){
			
            $('#mareg').html(txt12); }
		else if($(this).attr("xlink:title")=="OuledAouf"){
		 
            $('#mareg').html(txt13); }
		else if($(this).attr("xlink:title")=="Ouled Si Sliman"){
		 
            $('#mareg').html(txt14); }
		else if($(this).attr("xlink:title")=="Ras ElAouin"){
			
            $('#mareg').html(txt15); }
		else if($(this).attr("xlink:title")=="Guigba"){
		
            $('#mareg').html(txt16); }
		else if($(this).attr("xlink:title")=="Rahbat"){
		
            $('#mareg').html(txt17); }
		if($(this).attr("xlink:title")=="Ain Touta"){
			$("p#imgAinTouta").fadeIn(); 
            $('#mareg').html(txt18); } 
		 if($(this).attr("xlink:title")=="Maafa"){
		
            $('#mareg').html(txt19); }
		else if($(this).attr("xlink:title")=="Hidoussa"){
			$('#mareg').html(txt20);
		    }
             
		else if($(this).attr("xlink:title")=="Taxlent"){
		 
            $('#mareg').html(txt21); }
		else if($(this).attr("xlink:title")=="Lemcen"){
		
            $('#mareg').html(txt22); }
		else if($(this).attr("xlink:title")=="Oued Chaaba"){
			 
            $('#mareg').html(txt23); }
		else if($(this).attr("xlink:title")=="OuledSellam"){
			
            $('#mareg').html(txt24); }
		else if($(this).attr("xlink:title")=="Talkhamtt"){
			 
            $('#mareg').html(txt25); }
		else if($(this).attr("xlink:title")=="Merouana"){
		
            $('#mareg').html(txt26); }
		if($(this).attr("xlink:title")=="Ksarr Bellezma"){
		
            $('#mareg').html(txt27); } 
		 if($(this).attr("xlink:title")=="El Hassi"){
			
            $('#mareg').html(txt28); }
		else if($(this).attr("xlink:title")=="Ain Djasser"){
			$('#mareg').html(txt29);
		   } 
             
		else if($(this).attr("xlink:title")=="Oued El Ma"){
			 
            $('#mareg').html(txt30); }
		else if($(this).attr("xlink:title")=="Zana El Beida"){
		
            $('#mareg').html(txt31); }
		else if($(this).attr("xlink:title")=="Lazrou"){
			
            $('#mareg').html(txt32); }
		else if($(this).attr("xlink:title")=="Seriana"){
		
            $('#mareg').html(txt33); }
		else if($(this).attr("xlink:title")=="Fesdis"){
		
            $('#mareg').html(txt34); }
		else if($(this).attr("xlink:title")=="Djerna"){
		
            $('#mareg').html(txt35); }
		if($(this).attr("xlink:title")=="Ain Yaggout"){
		
            $('#mareg').html(txt36); } 
		 if($(this).attr("xlink:title")=="El Madher"){
		 
            $('#mareg').html(txt37); }
		else if($(this).attr("xlink:title")=="Boumia"){
			$('#mareg').html(txt38);
		    $("p#imgBoumia").fadeIn();} 
             
		else if($(this).attr("xlink:title")=="Boulehilet"){
		
            $('#mareg').html(txt39); }
		else if($(this).attr("xlink:title")=="Chemora"){
		 
            $('#mareg').html(txt40); }
		else if($(this).attr("xlink:title")=="Oum El Assafir"){
		
            $('#mareg').html(txt41); }
		else if($(this).attr("xlink:title")=="Timgad"){
	
            $('#mareg').html(txt42); }
		else if($(this).attr("xlink:title")=="Ouled Fadel"){
		
            $('#mareg').html(txt43); }
		else if($(this).attr("xlink:title")=="Beni Fadhala"){
		
            $('#mareg').html(txt44); }
		if($(this).attr("xlink:title")=="Larbaa"){
		
            $('#mareg').html(txt45); } 
		 if($(this).attr("xlink:title")=="Tazoult"){
	 
            $('#mareg').html(txt46); }
		else if($(this).attr("xlink:title")=="Oued Taga"){
			$('#mareg').html(txt47);
		   }
             
		else if($(this).attr("xlink:title")=="Bouzina"){
		
            $('#mareg').html(txt48); }
		else if($(this).attr("xlink:title")=="Ghassira"){
		 
            $('#mareg').html(txt49); }
		else if($(this).attr("xlink:title")=="Menaa"){
		 
            $('#mareg').html(txt50); }
		else if($(this).attr("xlink:title")=="Tigherghar"){
			 
            $('#mareg').html(txt51); }
		else if($(this).attr("xlink:title")=="Chir"){
		
            $('#mareg').html(txt52); }
		else if($(this).attr("xlink:title")=="Theniet El Abed"){
		 
            $('#mareg').html(txt53); }
		else if($(this).attr("xlink:title")=="Tiganimine"){
		
            $('#mareg').html(txt54); }
		else if($(this).attr("xlink:title")=="Arris"){
			
            $('#mareg').html(txt55); }
		else if($(this).attr("xlink:title")=="Foum Toub"){
		
            $('#mareg').html(txt56); }
		else if($(this).attr("xlink:title")=="Ichmoul"){
			$("p#imgIchmoul").fadeIn(); 
            $('#mareg').html(txt57); }
		else if($(this).attr("xlink:title")=="inoughissen"){
			 
            $('#mareg').html(txt58); }
		else if($(this).attr("xlink:title")=="T'Kout"){
	
            $('#mareg').html(txt59); }
		else if($(this).attr("xlink:title")=="Kimmel"){
	 
            $('#mareg').html(txt60); }	
			
	 });	
});

$(function(){
	$(".diva p ").css("display","none");
     $( ".mapdiv a" ).on('click', function(e) {
		 /* e.preventDefault(); */
		 $(".diva p ").css("display","none");
		
		 var txt1="Barika - بريكة";
		 var txt2="Bitam - بطام";
		 var txt3="Seggana - سقانة";
		 var txt4="M'Doukal - امدوكال";
		 var txt5="Metkaouak - متكعوك";
		 var txt6="Djzezzar - الجزار";
		 var txt7="Ouled Ammar - اولاد عمار";
		 var txt8="Tilatou - تيلاطو";
		
		 var txt9="Sefiane - سفيان";
		 var txt10="Gosbat - غوسبات";
		 var txt11="Boumaguer - بومقر";
		 var txt12="N'Gaous - نقاوس";
		 var txt13="OuledAouf - اولاد عوف";
		 var txt14="Ouled Si Sliman - اولاد سي سليمان";
		 var txt15="Ras ElAouin - رأس العيون";
		 var txt16="Guigba - قيقبة";
		 var txt17="Rahbat - الرحبات";
		 var txt18="Ain Touta - عين التوتة";
		 var txt19="Maafa - هعافة";
		 var txt20="Hidoussa - حيدوسة";
		 var txt21="Taxlent - تاكسلانت";
		 var txt22="Lemcen - لمسان";
		 var txt23="Oued Chaaba - واد الشعبة";
		 var txt24="OuledSellam - اولاد سلام";
		 var txt25="Talkhamtt - تالخمت";
		 var txt26="Merouana - مروانة";
		 var txt27="Ksarr Bellezma - قصر بالزمة";
		 var txt28="El Hassi - الحاسي";
		 var txt29="Ain Djasser - عين جاسر";
		 var txt30="Oued El Ma - واد الماء";
		 var txt31="Zana El Beida - زانة البيضاء";
		 var txt32="Lazrou - لازرو";
		 var txt33="Seriana - سريانة";
		 var txt34="Fesdis - فسديس";
		 var txt35="Djerna - الجرنة";
		 var txt36="Ain Yaggout - عين ياقوت";
		 var txt37="El Madher - المعذر";
		 var txt38="Boumia - بوميا";
		 var txt39="Boulehilet - بولهيلات";
		 var txt40="Chemora - شمورة";
		 var txt41="Oum El Assafir - أم العصافير";
		 var txt42="Timgad - تيمقاد";
		 var txt43="Ouled Fadel - اولاد فاضل";
		 var txt44="Beni Fadhala - بني فضالة";
		 var txt45="Larbaa - الاربعاء";
		 var txt46="Tazoult - تازولت";
		 var txt47="Oued Taga - واد الطاقة";
		 var txt48="Bouzina - بوزينة";
		 var txt49="Ghassira - غاسيرة";
		 var txt50="Menaa - منعة";
		 var txt51="Tigherghar - تيقرقار";
		 var txt52="Chir - شير";
		 var txt53="Theniet El Abed - ثنية العابد";
		 var txt54="Tiganimine - تيقانيمين";
		 var txt55="Arris - أريس";
		 var txt56="Foum Toub - فم الطوب";
		 var txt57="Ichmoul - اشمول";
		 var txt58="inoughissen - انوغيسان";
		 var txt59="T'Kout - تكوت";
		 var txt60="Kimmel - كيمل";
		 var txt61="Batna - باتنة";
		 
 		 if($(this).attr("xlink:title")=="Batna"){
			$("p#imgBatna").fadeIn(); 
            $('#mareg').html(txt61); } 
		 if($(this).attr("xlink:title")=="Barika"){
			$("p#imgBarika").fadeIn(); 
            $('#mareg').html(txt1); }
		else if($(this).attr("xlink:title")=="Bitam"){
			$('#mareg').html(txt2);
		    $("p#imgBitam").fadeIn(); 
             }
		else if($(this).attr("xlink:title")=="Seggana"){
			$("p#imgSeggana").fadeIn(); 
            $('#mareg').html(txt3); }
		else if($(this).attr("xlink:title")=="M'Doukal"){
			$("p#imgMdoukal").fadeIn(); 
            $('#mareg').html(txt4); }
		else if($(this).attr("xlink:title")=="Metkaouak"){
			$("p#imgMetkaouak").fadeIn(); 
            $('#mareg').html(txt5); }
		else if($(this).attr("xlink:title")=="Djzezzar"){
			$("p#imgDjzezzar").fadeIn(); 
            $('#mareg').html(txt6); }
		else if($(this).attr("xlink:title")=="Ouled Ammar"){
			$("p#imgOuledAmmar").fadeIn(); 
            $('#mareg').html(txt7); }
		else if($(this).attr("xlink:title")=="Tilatou"){
			$("p#imgTilatou").fadeIn(); 
            $('#mareg').html(txt8); }
		if($(this).attr("xlink:title")=="Sefiane"){
			$("p#imgSefiane").fadeIn(); 
            $('#mareg').html(txt9); } 
		 if($(this).attr("xlink:title")=="Gosbat"){
			$("p#imgGosbat").fadeIn(); 
            $('#mareg').html(txt10); }
		else if($(this).attr("xlink:title")=="Boumaguer"){
			$('#mareg').html(txt11);
		    $("p#imgBoumaguer").fadeIn(); 
             }
		else if($(this).attr("xlink:title")=="N'gous"){
			$("p#imgNgous").fadeIn(); 
            $('#mareg').html(txt12); }
		else if($(this).attr("xlink:title")=="OuledAouf"){
			$("p#imgOuledAouf").fadeIn(); 
            $('#mareg').html(txt13); }
		else if($(this).attr("xlink:title")=="Ouled Si Sliman"){
			$("p#imgOuledSiSliman").fadeIn(); 
            $('#mareg').html(txt14); }
		else if($(this).attr("xlink:title")=="Ras ElAouin"){
			$("p#imgRasElAouin").fadeIn(); 
            $('#mareg').html(txt15); }
		else if($(this).attr("xlink:title")=="Guigba"){
			$("p#imgGuigba").fadeIn(); 
            $('#mareg').html(txt16); }
		else if($(this).attr("xlink:title")=="Rahbat"){
			$("p#imgRahbat").fadeIn(); 
            $('#mareg').html(txt17); }
		if($(this).attr("xlink:title")=="Ain Touta"){
			$("p#imgAinTouta").fadeIn(); 
            $('#mareg').html(txt18); } 
		 if($(this).attr("xlink:title")=="Maafa"){
			$("p#imgMaafa").fadeIn(); 
            $('#mareg').html(txt19); }
		else if($(this).attr("xlink:title")=="Hidoussa"){
			$('#mareg').html(txt20);
		    $("p#imgHidoussa").fadeIn(); }
             
		else if($(this).attr("xlink:title")=="Taxlent"){
			$("p#imgTaxlent").fadeIn(); 
            $('#mareg').html(txt21); }
		else if($(this).attr("xlink:title")=="Lemcen"){
			$("p#imgLemcen").fadeIn(); 
            $('#mareg').html(txt22); }
		else if($(this).attr("xlink:title")=="Oued Chaaba"){
			$("p#imgOuedChaaba").fadeIn(); 
            $('#mareg').html(txt23); }
		else if($(this).attr("xlink:title")=="OuledSellam"){
			$("p#imgOuledSellam").fadeIn(); 
            $('#mareg').html(txt24); }
		else if($(this).attr("xlink:title")=="Talkhamtt"){
			$("p#imgTalkhamtt").fadeIn(); 
            $('#mareg').html(txt25); }
		else if($(this).attr("xlink:title")=="Merouana"){
			$("p#imgMerouana").fadeIn(); 
            $('#mareg').html(txt26); }
		if($(this).attr("xlink:title")=="Ksarr Bellezma"){
			$("p#imgKsarrBellezma").fadeIn(); 
            $('#mareg').html(txt27); } 
		 if($(this).attr("xlink:title")=="El Hassi"){
			$("p#imgElHassi").fadeIn(); 
            $('#mareg').html(txt28); }
		else if($(this).attr("xlink:title")=="Ain Djasser"){
			$('#mareg').html(txt29);
		    $("p#imgAinDjasser").fadeIn();} 
             
		else if($(this).attr("xlink:title")=="Oued El Ma"){
			$("p#imgOuedElMa").fadeIn(); 
            $('#mareg').html(txt30); }
		else if($(this).attr("xlink:title")=="Zana El Beida"){
			$("p#imgZanaElBeida").fadeIn(); 
            $('#mareg').html(txt31); }
		else if($(this).attr("xlink:title")=="Lazrou"){
			$("p#imgLazrou").fadeIn(); 
            $('#mareg').html(txt32); }
		else if($(this).attr("xlink:title")=="Seriana"){
			$("p#imgSeriana").fadeIn(); 
            $('#mareg').html(txt33); }
		else if($(this).attr("xlink:title")=="Fesdis"){
			$("p#imgFesdis").fadeIn(); 
            $('#mareg').html(txt34); }
		else if($(this).attr("xlink:title")=="Djerna"){
			$("p#imgDjerna").fadeIn(); 
            $('#mareg').html(txt35); }
		if($(this).attr("xlink:title")=="Ain Yaggout"){
			$("p#imgAinYaggout").fadeIn(); 
            $('#mareg').html(txt36); } 
		 if($(this).attr("xlink:title")=="El Madher"){
			$("p#imgElMadher").fadeIn(); 
            $('#mareg').html(txt37); }
		else if($(this).attr("xlink:title")=="Boumia"){
			$('#mareg').html(txt38);
		    $("p#imgBoumia").fadeIn();} 
             
		else if($(this).attr("xlink:title")=="Boulehilet"){
			$("p#imgBoulehilet").fadeIn(); 
            $('#mareg').html(txt39); }
		else if($(this).attr("xlink:title")=="Chemora"){
			$("p#imgChemora").fadeIn(); 
            $('#mareg').html(txt40); }
		else if($(this).attr("xlink:title")=="Oum El Assafir"){
			$("p#imgOumElAssafir").fadeIn(); 
            $('#mareg').html(txt41); }
		else if($(this).attr("xlink:title")=="Timgad"){
			$("p#imgTimgad").fadeIn(); 
            $('#mareg').html(txt42); }
		else if($(this).attr("xlink:title")=="Ouled Fadel"){
			$("p#imgOuledFadel").fadeIn(); 
            $('#mareg').html(txt43); }
		else if($(this).attr("xlink:title")=="Beni Fadhala"){
			$("p#imgBeniFadhala").fadeIn(); 
            $('#mareg').html(txt44); }
		if($(this).attr("xlink:title")=="Larbaa"){
			$("p#imgLarbaa").fadeIn(); 
            $('#mareg').html(txt45); } 
		 if($(this).attr("xlink:title")=="Tazoult"){
			$("p#imgTazoult").fadeIn(); 
            $('#mareg').html(txt46); }
		else if($(this).attr("xlink:title")=="Oued Taga"){
			$('#mareg').html(txt47);
		    $("p#imgOuedTaga").fadeIn(); }
             
		else if($(this).attr("xlink:title")=="Bouzina"){
			$("p#imgBouzina").fadeIn(); 
            $('#mareg').html(txt48); }
		else if($(this).attr("xlink:title")=="Ghassira"){
			$("p#imgGhassira").fadeIn(); 
            $('#mareg').html(txt49); }
		else if($(this).attr("xlink:title")=="Menaa"){
			$("p#imgMenaa").fadeIn(); 
            $('#mareg').html(txt50); }
		else if($(this).attr("xlink:title")=="Tigherghar"){
			$("p#imgTigherghar").fadeIn(); 
            $('#mareg').html(txt51); }
		else if($(this).attr("xlink:title")=="Chir"){
			$("p#imgChir").fadeIn(); 
            $('#mareg').html(txt52); }
		else if($(this).attr("xlink:title")=="Theniet El Abed"){
			$("p#imgThenietElAbed").fadeIn(); 
            $('#mareg').html(txt53); }
		else if($(this).attr("xlink:title")=="Tiganimine"){
			$("p#imgTiganimine").fadeIn(); 
            $('#mareg').html(txt54); }
		else if($(this).attr("xlink:title")=="Arris"){
			$("p#imgArris").fadeIn(); 
            $('#mareg').html(txt55); }
		else if($(this).attr("xlink:title")=="Foum Toub"){
			$("p#imgFoumToub").fadeIn(); 
            $('#mareg').html(txt56); }
		else if($(this).attr("xlink:title")=="Ichmoul"){
			$("p#imgIchmoul").fadeIn(); 
            $('#mareg').html(txt57); }
		else if($(this).attr("xlink:title")=="inoughissen"){
			$("p#imginoughissen").fadeIn(); 
            $('#mareg').html(txt58); }
		else if($(this).attr("xlink:title")=="T'Kout"){
			$("p#imgTKout").fadeIn(); 
            $('#mareg').html(txt59); }
		else if($(this).attr("xlink:title")=="Kimmel"){
			$("p#imgKimmel").fadeIn(); 
            $('#mareg').html(txt60); }	
			
	 });	
});






/*  $( document ).ready(function(){	
     $( "h1" ).each(function(index) {		 
            msg("index :" + ""+ index + $(this).text());
		 
	 });
});   */



/* $(function(){
	$("img.diva ").css("display","none");
     $( "a" ).on('click', function() {
		 $("img.diva ").css("display","none");
		
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
 */


/*	 $(function(){
		$("a").on('click',function(){
			if($(this).attr("title")=="Barika"){
			$("#mareg").text('trtrtrtrtr');	
		$("#mareg").append('<span id="a"></span>');
 			if($(this).attr("xlink:title")=="Bitam"){
			$("#mareg").append('<span id="b"></span>');
						if($(this).attr("xlink:title")=="M'Doukal"){
			$("#mareg").append('<span id="c"></span>');
			if($(this).attr("xlink:title")=="Ouled Ammar"){
			$("#mareg").append('<span id="d"></span>');
						if($(this).attr("xlink:title")=="Seggana"){
			$("#mareg").append('<span id="e"></span>');
			if($(this).attr("xlink:title")=="Djzezzar"){
			$("#mareg").append('<span id="f"></span>'); 
		}			
			
	});
	

});
*/


/*  $(function(){
		$("a").on('mouseover',function(){
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
					
			$('#mareg').append().text($(this));
	});
	

}); */

/*  $(function(){
		$("a").on('mouseover',function(){
			let region =$(this);
			
			region.attr("title");
			

					
			$('#mareg').append().text(region);
	});
	

}); */