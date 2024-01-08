<?php

require_once 'Cnn_Coran.php';
?>
<?php
	
		$retour1="NULL";
	 if(!empty($_POST['numero'])){
		
		$retour1=$_POST['numero'];
		
				}else{
			
			}	



 		$rs1 = $bdd->prepare('SELECT * FROM sowar_a WHERE NoOrder= :code1');
		$rs1->execute(array(':code1' => $retour1));  
		   				           
		 $donnees1 = $rs1->fetch();  
 		 		$nom=$donnees1['NomSora'];
 		        $no=$donnees1['NoOrder'];	


			   			                
		$rs2 = $bdd->prepare('SELECT * FROM sowar_c WHERE NoOrder= :code2');
		$rs2->execute(array(':code2' => $retour1)); 
		   				           
		 $donnees2 = $rs2->fetch();
 		 			  
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>القرآن العظيم</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">	
		<link rel="stylesheet"  href="css/bootstrap.min.css">
 
<style>
.scroll-to-top {
			  background-color:#333;
			  color:#fff;
			  position:fixed;
			  bottom:50px;
			  right:10px;
			  padding:2px 5px;
			 display:inline-block; 
  }
#page a:link, #page a:visited {
  background-color: #f44336;
  color: white;
  padding: auto;
  text-align: center;
  text-decoration: none;
  display: inline-block;

  
}

#page a:hover, #page a:active {
  background-color: blue;
}
    .footer1 {
		    text-align:center;
			width: 280px;
			font-size:0.8em; 
			padding-top: 5px;
			height:40px;
			color: white;
			background-color: #777;
			clear: left;
			border-radius: 10px;
			box-shadow: 2px 2px 2px #fff;
		   }


</style>
</head>
<body>


<div class="container text-center"style="margin-top: 5px;background : #abc"> 
		<!--   -------------------------------------------------------------------------------------------------------------------------------- -->   
		    
                <p id="page"style="border-radius:  20px 20px 20px 20px;margin:auto;height:40px;width:260px;padding-top:8px;background-color:#ffa;color:#000;font-size :16px;text-align:center;"><span><a href="index.html" style="border-radius:  20px 20px 20px 20px;width: 100px;color:#fff;font-weight:bold;font-size: 16px;">الى القائمة</a></span>&nbsp;&nbsp;&nbsp;&nbsp;<span><a href="coran1.php" style="border-radius:  20px 20px 20px 20px;width: 100px;color:#fff;font-weight:bold;font-size: 16px;">الى الصفحة-2</a></span></p>
		

		  <div class="row"id="banne1">
			<div class="col-sm-12">

				
				   
						  <div style="background-color:#ffa;padding-top: 25px;border-radius:  20px 20px 20px 20px;  width : 60%;margin:auto;"> 								
									<span style="color: #00F;font-size :25px;font-family: Andalus;">قراءة و نسخ</span></br>
		                            <span style="color: #000;font-size :18px">سورة&nbsp;&nbsp;</span><span style="color: #f00;font-size :18px"><?php echo $nom; ?></span><span style="color: #000;font-size :18px">&nbsp;&nbsp;رقم&nbsp;&nbsp;</span>															 																 
									<span style="color: #00F;font-size :18px"><?php echo $no; ?> </span>								
						  </div>	
																																	
						  <div style="border-radius: 20px 20px 20px 20px;background-color:#ffa;margin:auto;width: 80%;height: 60px;display: -webkit-flex;-webkit-flex-direction: row-reverse;display: flex;flex-direction: row-reverse;">
								<div style="padding-top:2px;margin : auto;font-size:1.2em;border-radius: 10px;border: 1px solid #000;color: #00f;box-shadow: 3px 3px 3px #000;text-align:center;background-color:#fff;width: 70%;height: 35px;  ">
	       
										 <form action="coran2.php" method="POST">													 							
										  <select name="numero">								
												<option value="1"  <?php if($retour1=="1") echo "selected" ?>>الفاتحة</option>
												<option value="2"  <?php if($retour1=="2") echo "selected" ?>>البقرة</option>
												<option value="3"  <?php if($retour1=="3") echo "selected" ?>>آل عمران</option>							
												<option value="4"  <?php if($retour1=="4") echo "selected" ?>>النساء</option>
												<option value="5"  <?php if($retour1=="5") echo "selected" ?>>المائدة</option>
												<option value="6"  <?php if($retour1=="6") echo "selected" ?>>الأنعام</option>
												<option value="7"  <?php if($retour1=="7") echo "selected" ?>>الأعراف</option>
												<option value="8"  <?php if($retour1=="8") echo "selected" ?>>الأنفال</option>
												<option value="9"  <?php if($retour1=="9") echo "selected" ?>>التوبة</option>
												<option value="10"  <?php if($retour1=="10") echo "selected" ?>>يونس</option>
												<option value="11"  <?php if($retour1=="11") echo "selected" ?>>هود</option>
												<option value="12"  <?php if($retour1=="12") echo "selected" ?>>يوسف</option>
												<option value="13"  <?php if($retour1=="13") echo "selected" ?>>الرعد</option>
												<option value="14"  <?php if($retour1=="14") echo "selected" ?>>إبراهيم</option>
												<option value="15"  <?php if($retour1=="15") echo "selected" ?>>الحجر</option>
												<option value="16"  <?php if($retour1=="16") echo "selected" ?>>النحل</option>
												<option value="17"  <?php if($retour1=="17") echo "selected" ?>>الإسراء</option>								
												<option value="18" <?php if($retour1=="18") echo "selected" ?>>الكهف</option>
												<option value="19" <?php if($retour1=="19") echo "selected" ?>>مريم</option>
												<option value="20" <?php if($retour1=="20") echo "selected" ?>>طه</option>
												<option value="21" <?php if($retour1=="21") echo "selected" ?>>الأنبياء</option>
														
												<option value="22"  <?php if($retour1=="22") echo "selected" ?>>الحج</option>
												<option value="23"  <?php if($retour1=="23") echo "selected" ?>>المؤمنون</option>
												<option value="24"  <?php if($retour1=="24") echo "selected" ?>>النور</option>							
												<option value="25"  <?php if($retour1=="25") echo "selected" ?>>الفرقان</option>
												<option value="26"  <?php if($retour1=="26") echo "selected" ?>>الشعراء</option>
												<option value="27"  <?php if($retour1=="27") echo "selected" ?>>النمل</option>
												<option value="28"  <?php if($retour1=="28") echo "selected" ?>>القصص</option>
												<option value="29"  <?php if($retour1=="29") echo "selected" ?>>العنكبوت</option>
												<option value="30"  <?php if($retour1=="30") echo "selected" ?>>الروم</option>
												<option value="31"  <?php if($retour1=="31") echo "selected" ?>>لقمان</option>
												<option value="32"  <?php if($retour1=="32") echo "selected" ?>>السجدة</option>
												<option value="33"  <?php if($retour1=="33") echo "selected" ?>>الأحزاب</option>
												<option value="34"  <?php if($retour1=="34") echo "selected" ?>>سبأ</option>
												<option value="35"  <?php if($retour1=="35") echo "selected" ?>>فاطر</option>
												<option value="36"  <?php if($retour1=="36") echo "selected" ?>>يس</option>
												<option value="37"  <?php if($retour1=="37") echo "selected" ?>>الصافات</option>
												<option value="38"  <?php if($retour1=="38") echo "selected" ?>>ص</option>								
												<option value="39" <?php if($retour1=="39") echo "selected" ?>>الزمر</option>
												<option value="40" <?php if($retour1=="40") echo "selected" ?>>غافر</option>
												<option value="41" <?php if($retour1=="41") echo "selected" ?>>فصلت</option>
												<option value="42" <?php if($retour1=="42") echo "selected" ?>>الشورى</option>
												<option value="43"  <?php if($retour1=="43") echo "selected" ?>>الزخرف</option>
												<option value="44"  <?php if($retour1=="44") echo "selected" ?>>الدخان</option>
												<option value="45"  <?php if($retour1=="45") echo "selected" ?>>الجاثية</option>							
												<option value="46"  <?php if($retour1=="46") echo "selected" ?>>الأحقاف</option>
												<option value="47"  <?php if($retour1=="47") echo "selected" ?>>محمد</option>
												<option value="48"  <?php if($retour1=="48") echo "selected" ?>>الفتح</option>
												<option value="49"  <?php if($retour1=="49") echo "selected" ?>>الحجرات</option>
												<option value="50"  <?php if($retour1=="50") echo "selected" ?>>ق</option>
												<option value="51"  <?php if($retour1=="51") echo "selected" ?>>الذاريات</option>
												<option value="52"  <?php if($retour1=="52") echo "selected" ?>>الطور</option>
												<option value="53"  <?php if($retour1=="53") echo "selected" ?>>النجم</option>
												<option value="54"  <?php if($retour1=="54") echo "selected" ?>>القمر</option>
												<option value="55"  <?php if($retour1=="55") echo "selected" ?>>الرحمن</option>
												<option value="56"  <?php if($retour1=="56") echo "selected" ?>>الواقعة</option>
												<option value="57"  <?php if($retour1=="57") echo "selected" ?>>الحديد</option>
												<option value="58"  <?php if($retour1=="58") echo "selected" ?>>المجادلة</option>
												<option value="59"  <?php if($retour1=="59") echo "selected" ?>>الحشر</option>								
												<option value="60" <?php if($retour1=="60") echo "selected" ?>>الممتحنة</option>
												<option value="61" <?php if($retour1=="61") echo "selected" ?>>الصف</option>
												<option value="62" <?php if($retour1=="62") echo "selected" ?>>الجمعة</option>
												<option value="63" <?php if($retour1=="63") echo "selected" ?>>المنافقون</option>
												<option value="64" <?php if($retour1=="64") echo "selected" ?>>التغابن</option>
												<option value="65" <?php if($retour1=="65") echo "selected" ?>>الطلاق</option>
												<option value="66" <?php if($retour1=="66") echo "selected" ?>>التحريم</option>
												<option value="67" <?php if($retour1=="67") echo "selected" ?>>الملك</option>
												<option value="68" <?php if($retour1=="68") echo "selected" ?>>القلم</option>
												<option value="69"  <?php if($retour1=="69") echo "selected" ?>>الحاقة</option>
												<option value="70"  <?php if($retour1=="70") echo "selected" ?>>المعارج</option>
												<option value="71"  <?php if($retour1=="71") echo "selected" ?>>نوح</option>							
												<option value="72"  <?php if($retour1=="72") echo "selected" ?>>الجن</option>
												<option value="73"  <?php if($retour1=="73") echo "selected" ?>>المزمل</option>
												<option value="74"  <?php if($retour1=="74") echo "selected" ?>>المدثر</option>
												<option value="75"  <?php if($retour1=="75") echo "selected" ?>>القيامة</option>
												<option value="76"  <?php if($retour1=="76") echo "selected" ?>>الإنسان</option>
												<option value="77"  <?php if($retour1=="77") echo "selected" ?>>المرسلات</option>
												<option value="78"  <?php if($retour1=="78") echo "selected" ?>>النبأ</option>
												<option value="79"  <?php if($retour1=="79") echo "selected" ?>>النازعات</option>
												<option value="80"  <?php if($retour1=="80") echo "selected" ?>>عبس</option>
												<option value="81"  <?php if($retour1=="81") echo "selected" ?>>التكوير</option>
												<option value="82"  <?php if($retour1=="82") echo "selected" ?>>الإنفطار</option>
												<option value="83"  <?php if($retour1=="83") echo "selected" ?>>المطففين</option>
												<option value="84"  <?php if($retour1=="84") echo "selected" ?>>الإنشقاق</option>
												<option value="85"  <?php if($retour1=="85") echo "selected" ?>>البروج</option>								
												<option value="86" <?php if($retour1=="86") echo "selected" ?>>الطارق</option>
												<option value="87" <?php if($retour1=="87") echo "selected" ?>>الأعلى</option>
												<option value="88" <?php if($retour1=="88") echo "selected" ?>>الغاشية</option>
												<option value="89" <?php if($retour1=="89") echo "selected" ?>>الفجر</option>
												<option value="90"  <?php if($retour1=="90") echo "selected" ?>>البلد</option>
												<option value="91"  <?php if($retour1=="91") echo "selected" ?>>الشمس</option>
												<option value="92"  <?php if($retour1=="92") echo "selected" ?>>الليل</option>							
												<option value="93"  <?php if($retour1=="93") echo "selected" ?>>الضحى</option>
												<option value="94"  <?php if($retour1=="94") echo "selected" ?>>الشرح</option>
												<option value="95"  <?php if($retour1=="95") echo "selected" ?>>التين</option>
												<option value="96"  <?php if($retour1=="96") echo "selected" ?>>العلق</option>
												<option value="97"  <?php if($retour1=="97") echo "selected" ?>>القدر</option>
												<option value="98"  <?php if($retour1=="98") echo "selected" ?>>البينة</option>
												<option value="99"  <?php if($retour1=="99") echo "selected" ?>>الزلزلة</option>
												<option value="100"  <?php if($retour1=="100") echo "selected" ?>>العاديات</option>
												<option value="101"  <?php if($retour1=="101") echo "selected" ?>>القارعة</option>
												<option value="102"  <?php if($retour1=="102") echo "selected" ?>>التكاثر</option>
												<option value="103"  <?php if($retour1=="103") echo "selected" ?>>العصر</option>
												<option value="104"  <?php if($retour1=="104") echo "selected" ?>>الهمزة</option>
												<option value="105"  <?php if($retour1=="105") echo "selected" ?>>الفيل</option>
												<option value="106"  <?php if($retour1=="106") echo "selected" ?>>قريش</option>								
												<option value="107" <?php if($retour1=="107") echo "selected" ?>>الماعون</option>
												<option value="108" <?php if($retour1=="108") echo "selected" ?>>الكوثر</option>
												
												
												<option value="109" <?php if($retour1=="109") echo "selected" ?>>الكافرون</option>
												<option value="110" <?php if($retour1=="110") echo "selected" ?>>النصر</option>
												<option value="111" <?php if($retour1=="111") echo "selected" ?>>المسد</option>
												<option value="112" <?php if($retour1=="112") echo "selected" ?>>الإخلاص</option>
												<option value="113" <?php if($retour1=="113") echo "selected" ?>>الفلق</option>
												<option value="114" <?php if($retour1=="114") echo "selected" ?>>الناس</option>								
										 </select>	
												<button type="submit" class="btn btn-info btn-xs"  style="color: #f00;font-size:1em; margin-left: 15px;"><b>اختر</b></button> 
								      
									 </form>	    
								  </div>

							 </div>
							<div  style="background : #ffa;width: 100%;border-radius: 20px;">	
																									
											
													  <p style="color: #393; text-align:center;font-family: Diwani Simple Striped; font-size: 22px;font-weight:bold;">
															 
																 أعوذ بالله من الشيطان الرجيم</br>																					
													  </p>
										<?php		  
											if($retour1=="9"){ 
												echo "";
										    } else {
                                                  echo '<p style="color: #00f; text-align:center;font-family: Diwani Simple Striped; font-size: 35px;font-weight:bold;">
															 
																 بسم الله الرحمن الرحيم</br>																					
													  </p>';
                                            }  
											  
									    ?>	
								  								 
									   <p style=" color: #000;padding : 10px;font-size :24px;font-family: Traditional Arabic;text-align:justify;line-height:38px;">									 
									 	 <?php										    
											echo nl2br($donnees1['TextSora1']);										
										 ?>									
									   </p>
								 
									   
							 </div>
									 
				  </div>								   								      
			
			 
			
		  </div>
		<!--   -------------------------------------------------------------------------------------------------------------------------------- -->   
   
  <div class="row">
		 <div class="col-sm-3 well">



				  <div class="well">
					<p>عندما كنت</p>
					<img src="imagesS/moi2.jpg" class="img-circle" height="70" width="60" alt="Avatar">
					<p style=" color: #000;font-family: Kunstler Script;font-size :25px;text-align:center;">Barika Education Culture </p>

				  </div>
			       <div class="alert alert-success fade in">
											<p style="font-family: Diwani Simple Striped; text-align:center;color: #00f;font-size :25px;"><strong>كيف تقرأ</strong></p>																		
											 <p style=" color: #000;text-align:right;line-height:22px;font-family: tahoma;font-size :12px;">
                                             نشرت الداعية الدكتورة عبلة الكحلاوي، أستاذة الفقه بكلية الدراسات الإسلامية والعربية بنات 
بجامعة الأزهر، على صفحتها بموقع "فيسبوك" 15 وصية تنصح بها قارئ القرآن الكريم ﺃﺛﻨﺎﺀ تلاوته:

قالت الكحلاوي: أقترح عليك بخمس عشرة وصية وهي:

١ - ﻻ ﺗﻌﻄِ ﺍﻟﻘﺮﺁﻥ ﻓﻀﻠﺔ ﻭﻗﺘﻚ، ﺑﻞ ﺧﺼّﺺ ﻟﻪ ﻭﻗﺘﺎً ﻣﺤﺪﺩﺍً ﻻ ﻳﻨﺎﺯﻋﻚ ﻋﻠﻴﻪ ﺃﺣﺪ.

2- ﻗﺒﻞ ﺍﻟﻘﺮﺍﺀﺓ ﺟﺪﺩ ﻭﺿﻮﺀﻙ، ﻭﺍﺳﺘﻘﺒﻞ ﺍﻟﻘﺒﻠﺔ، ﻭﺍﺑﺪﺃ ﺑﺎﻻﺳﺘﻌﺎﺫﺓ ﺛﻢ ﺍﻟﺒﺴﻤﻠﺔ، ﻭﺍﺳﺘﺤﻀﺮ ﻓﻀﻞ ﻗﺮﺍﺀﺓ ﺍﻟﻘﺮﺁﻥ.

3- ﻟﻴﻜﻦ ﺻﻮﺗﻚ ﻭﺳﻄﺎً ﻻ ﻣﺮﺗﻔﻌﺎً ﻓﺘﺘﻌﺐ ﻭﺗﺰﻋﺞ، ﻭﻻ ﻣﻨﺨﻔﻀﺎً ﻓﺘﻤﻞّ ﻭﺗﻨﻌﺲ، ﻭﻟﺘﻜﻦ ﺳﺮﻋﺘﻚ ﻭﺳﻄﺎً ﻻ ﺳﺮﻳﻌﺔ، ﻭﻻ ﺑﻄﻴﺌﺔً ﻓﺘﺴﺄﻡ.

4- ﻟﻠﻘﺮﺁﻥ ﻫﻴﺒﺔ ﻭﻭﻗﺎﺭ، ﻭﻣﻦ ﻋﻈّﻢ ﺍﻟﻘﺮﺁﻥ ﻓﻲ ﻗﻠﺒﻪ ﻋﻈّﻢ ﺍﻟﻠﻪ ﻣﻜﺎﻧﺘﻪ ﺑﻴﻦ ﺍﻟﻨﺎﺱ، ﻓﻼ ﺗﻘﻄﻊ ﻗﺮﺍﺀﺗﻚ ﺑﺎﻟﻜﻼﻡ ﻣﻊ ﻓﻼﻥ ﻭﻓﻼﻥ.

5- ﻛﺎﻥ ﺍﻟﺴﻠﻒ ﺇﺫﺍ ﺷﺮﻉ ﺃﺣﺪﻫﻢ ﻓﻲ ﻗﺮﺍﺀﺓ ﺳﻮﺭﺓٍ ﻻ ﻳﻘﻄﻌﻬﺎ ﺣﺘﻰ ﻳﺘﻢ ﺍﻟﺴﻮﺭﺓ، ﻭﻫﺬﺍ ﻣﻦ ﺍﻷﺩﺏ ﻣﻊ ﻛﻼﻡ ﺍﻟﻠﻪ، ﻭﺍﻟﺒﻌﺾ ﻳﻘﻄﻊ ﺍﻵﻳﺎﺕ.

6 - ﺇﺫﺍ ﺑﺪﺃﺕ ﻗﺮﺍﺀﺗﻚ ﻓﻼ ﺗﻠﺘﻔﺖ ﻷﺣﺪ، ﻭﺇﺫﺍ ﺃﺭﺍﺩ ﺃﺣﺪﻫﻢ ﺍﻟﺤﺪﻳﺚ ﻣﻌﻚ ﻓﺄﺷﺮ ﺑﻴﺪﻙ ﻟﻪ ﻣﻌﺘﺬﺭﺍً، ﻭﻫﺬﺍ ﻣﻦ ﺗﻌﻈﻴﻤﻚ ﻟﻜﺘﺎﺏ ﺍﻟﻠﻪ.

7- ﺇﻥ ﻛﻨﺖ ﻭﻻ ﺑﺪ ﻗﺎﻃﻌﺎً ﺗﻼﻭﺗﻚ ﻟﺤﺪﻳﺜﻚ ﻷﺣﺪﻫﻢ، ﻓﻼ ﺗﺠﺒﻪ ﻓﻮﺭ ﺣﺪﻳﺜﻪ ﺑﻞ ﻟﻴﻨﺘﻈﺮﻙ ﺣﺘﻰ ﺗﻘﻒ ﻋﻠﻰ ﺭﺃﺱ ﺍﻵﻳﺔ ﻓﻲ ﻣﻮﻗﻒ ﻣﻨﺎﺳﺐ.

8- ﻳﺠﺐ ﻋﻠﻴﻚ ﺗﺤﺮﻳﻚ ﻟﺴﺎﻧﻚ ﺃﺛﻨﺎﺀ ﺍﻟﻘﺮﺍﺀﺓ، ﺃﻣﺎ ﻗﺮﺍﺀﺓ ﺍﻟﻌﻴﻦ ﻓﻬﻲ ﻻ ﺗﺠﺰﺉ ﻭﻻ تعتبر ﻗﺎﺭﺋﺎ.

9- ﻣﻦ ﻋﺪﻡ ﺍﺣﺘﺮﺍﻣﻚ ﻟﻜﻼﻡ ﺭﺑﻚ ﺃﻥ ﺗﻘﺮﺃ ﺁﻳﺎﺕ ﻳﺴﻴﺮﺓ ﺛﻢ ﺗﺘﺎﺑﻊ ﺗﻮﻳﺘﺮ ﻭﺗﻠﻴﺠﺮﺍﻡ ﻭ ... ﻭ ... ﺛﻢ ﺗﻌﻮﺩ، ﺛﻢ ﺗﺘﺼﻔﺢ ﻭﻫﻜﺬﺍ.

10 - ﺃﻧﺼﺤﻚ ﺃﻥ ﺗﺬﻫﺐ ﻟﻤﺴﺠﺪ ﺑﻌﻴﺪ ﻻ ﻣﻌﺎﺭﻑ ﻟﻚ ﺑﻪ، ﻭﺃﻥ ﺗﺬﻫﺐ ﺍﻷﺧﺖ ﻟﻐﺮﻓﺔ ﻣﻨﻌﺰﻟﺔ، ﻟﺘﺨﻠﻮ ﺑﻜﺘﺎﺏ ﺭﺑﻚ ﻓﺘﺬﻭﻕ ﺣﻼﻭﺗﻪ ﻭﺗﺘﺪﺑﺮ ﺁﻳﺎﺗﻪ.

11- ﻣﻬﻤﺔ: ﺷﺮ ﺟﻠﻴﺲ ﻟﻚ ﻓﻲ ﻗﺮﺍﺀﺗﻚ ﻫﺎﺗﻔﻚ! ﻓﺄﻧﺼﺤﻚ ﺃﻥ ﺗﺘﺮﻛﻪ ﻓﻲ ﺍﻟﻤﻨﺰﻝ ﺃﻭ ﺍﻟﺴﻴﺎﺭﺓ ﻭﺗﺬﻫﺐ ﻟﻠﻘﺮﺍﺀﺓ ﻭﺣﺪﻙ ﺣﺘﻰ ﻻ ﻳﺪﺧﻞ ﻣﻨﻪ ﺍﻟﺸﻴﻄﺎﻥ.

12- ﺃﺛﻨﺎﺀ ﻗﺮﺍﺀﺗﻚ ﺳﺘﻤﺮ ﻋﻠﻴﻚ ﺁﻳﺎﺕ ﺭﺣﻤﺔ ﻭﻭﻋﻴﺪ ﻗﻒ ﻋﻨﺪ ﺑﻌﻀﻬﺎ ﻭﺍﺭﻓﻊ ﻳﺪﻳﻚ ﻭﺍﺳﺄﻝ ﺍﻟﻠﻪ ﻣﻦ ﻓﻀﻠﻪ ﻓﻠﻬﺎ ﺃﺛﺮ ﻋﻠﻰ ﺍﻟﻘﻠﺐ ﻛﺒﻴﺮ.

13 - ﺇﻥ ﻛﻨﺖ ﺑﻄﻲﺀ ﺍﻟﻘﺮﺍﺀﺓ ﺃﻭ ﻻ ﺗﺤﺴﻨﻬﺎ ﻓﺎﻋﻠﻢ ﺃﻥ ﺃﺟﺮﻙ ﻣﻀﺎﻋﻒ، ﻓﻠﻚ ﺍﻷﺟﺮ ﻣﺮﺗﻴﻦ، ﻭﺃﻭﺻﻴﻚ ﺑﺘﺤﻤﻴﻞ ﺍﻟﻘﺮﺁﻥ ﺻﻮﺗﻴﺎً ﺑﻬﺎﺗﻔﻚ ﻭﺗﺎﺑﻌﻪ.

14- ﺧﺘﻢ ﻗﺮﺍﺀﺗﻚ ﻋﻠﻰ ﺃﻭﺍﺧﺮ ﺍﻟﺴﻮﺭ ﺃﻛﻤﻞ ﻭﺃﻓﻀﻞ ﻣﻦ ﺧﺘﻤﻬﺎ ﻋﻠﻰ ﺃﻭﺍﺧﺮ ﺍﻷﺟﺰﺍﺀ.
- كان ﺍﺑﻦ ﻋﻤﺮ رضي الله عنهما ﺇﺫﺍ ﺷﺮﻉ ﻓﻲ ﺳﻮﺭﺓ ﻻ ﻳﻘﻒ ﺣﺘﻰ ﻳﺨﺘﻤﻬﺎ.

											</p>
										   <p style="text-align:right;font-size:10px; font-family: background-color:#ccc;color:#000; ">
                                            -المقال من -</br> www.masrawy.com 
										  </p>
			       </div>
			</div>
		<div class="col-sm-7">

		                            <!-- ---------------------fin ROW------------------- --> 
					<div class="row">

						<div class="col-sm-12">
							   <div class="well">
										 <p style="font-family: Diwani Simple Striped; color: #00f;font-size :30px;"><u><strong>القرآن الكريم</strong></u></p>
										 
											<p style=" color: #000;line-height:25px;font-family: tahoma;font-size :12px;">
												
												   القرآن الكريم نور رب العاملين، ورحمته المهداة للعالمين، قراءته عبادة، والتفكُّر في آياته عبادة، والعمل بمقتضى أحكامه واجب، وللمسلم عهد مع القرآن الكريم ينبغي أن يكون، فيغترف من فيض هداه يوميَّاً، فهو الطاقة المتجددة، والعطاء والخير الذي لا ينضب، فمن حسن برُّ المسلم بكتاب ربه، تجديد عهده معه بشكل يومي، فلا يكون له هاجراً ولا لأحكامه معطلاً، وانتظام المسلم بتلاوة القرآن الكريم بشكل يومي، يترتب عليه آثار عظيمة النفع على المسلم، نفسيَّة هي وجسديَّة، فقد وصفه الله سبحانه بأنّه شفاء لما في الصدور، ويترتب على هجره آثار سيئة، فهناك إذاً تصوُّر للعلاقة الجيِّدة التي ينبغي أن تكون مع كتاب الله عز وجل.
												
											 </p>

										 <p style=" color: #0f0;font-size :18px;"><u><strong>فضل قراءة القرآن الكريم يومياً</strong></u></p>
											 <p style=" color: #000;line-height:25px;font-family: tahoma;font-size :12px;">
												 
													صفاء الذهن، حيث يسترسل المسلم بشكل يومي مع القرآن الكريم، فيتتبع آياته وأحكامه، وعظمة الله في خلقه. قوَّة الذاكرة، فخير ما تنتظم به ذاكرة المسلم هو آيات القرآن الكريم، تأملاً، وحفظاً، وتدبراً. طمأنينة القلب، حيث يعيش من يحافظ على تلاوة القرآن الكريم وحفظ آياته بطمأنينة عجيبة، يقوى من خلالها على مواجهة الصعاب التي تواجهه، فقد قال تعالى:(الَّذِينَ آمَنُوا وَتَطْمَئِنُّ قُلُوبُهُم بِذِكْرِ اللَّهِ ۗ أَلَا بِذِكْرِ اللَّهِ تَطْمَئِنُّ الْقُلُوبُ) [الرعد: 28]. الشعور بالفرح والسعادة، وهي ثمرة أصيلة لتعلُّق قلب المسلم بخالقه، بترديده لآياته وتعظيمه له. الشعور بالشجاعة وقوَّة النفس، والتخلُّص من الخوف والحزن والتوتر والقلق. قوة في اللغة، فالذي يعيش مع آيات القرآن، وما فيها من بلاغة محكمة، وبيان عذب، ولغة قوية، تقوى بذلك لغته، وتثرى مفرداته، ولا سيَّما متى عاش مع القرآن متدبراً لمعانيه، ومن خلال كتب التفسير المتنوعة، كظلال القرآن الكريم لسيد قطب، الذي يركِّز على الجوانب التربويَّة والبلاغيَّة في القرآن الكريم. انتظام علاقات قارئ القرآن الاجتماعيَّة مع النَّاس من حوله، حيث ينعكس نور القرآن على سلوكه، قولاً وعملاً فيحبب الناس به ويشجعهم على بناء علاقات تواصليَّة معه، فيألف بهم، ويألفون به. التخلُّص من الأمراض المزمنة، حيث ثبت علمياً أنَّ المحافظة على تلاوة القرآن الكريم والاستماع لآياته، يقوي المناعة لدى الإنسان بما يمكِّنه من مواجهة الكثير من الأمراض المزمنة. رفع لقدرة الإنسان الإدراكيَّة في مجال الفهم والاستيعاب، فالمسلم المنتظم بعلاقته مع كتاب الله دائم البحث والتدبر في معانيه، مقلباً لكتب التفسير يتعلم كل ما هو جديد من معاني القرآن العظيمة. نيل رضى الله وتوفيقه له في شؤون الدنيا، يجده بركة في الرزق، ونجاة من المكروه. الفوز بالجنَّة يوم القيامة، حيث يأتي القرآن الكريم يوم القيامة يحاجّ عن صاحبه الذي كان يقرؤه، شفيعاً له

												 
											 </p> 
										 
										 <p style=" color: #0f0;font-size :18px;"><u><strong>آثار هجر القرآن الكريم</strong></u></p>
											<p style=" color: #000;line-height:25px;font-family: tahoma;font-size :12px;">
												
													  كثرة الهمّ والحزن في الحياة، فالحياة مليئة بالمشاكل والهموم، ومن فقد نور القرآن لن يتمكن من الوقوف في وجه هموم الحياة. إظلام النفس، ووحشة القلب، حيث يشعر المسلم الهاجر لكتاب الله بظلمة في نفسه، تنعكس على سلوكه اليومي، وعلى مزاجه العام. قلَّة بركة الرزق، فيشعر أنَّ الرزق رغم وفرته باستمرار لا بركة فيه أبداً، وأنَّه لا يكفي حتى معاشه اليومي. نفور في العلاقات الاجتماعيَّة اضطراب النفس، والشعور بالتوتر.

												 
											 </p>  
										  
										   <p style="text-align:right;font-size:10px; font-family: background-color:#ccc;color:#000; ">
                                            -المقال من -</br>  mawdoo3.com 
										  </p>

							   </div>
						</div> 
					</div> 

		  


   
	</div> <!-- ----------------------fin col 7------------------------>
		
			<div class="col-sm-2 well">
							  <div class="thumbnail">
							  <p><span style="color: #00F;font-size :18px;">تعداد حروف سورة </span></br><span style="color: #f00;font-size :18px"><?php echo $nom; ?></span></p>
                                  <p>									 
									  <?php
										   $utf8 = $donnees2['TextSora1'];
										   $strArray = count_chars($utf8,1);
									   
											foreach ($strArray as $key=>$value){     	
												$dataa=ord(chr($key));
												$var = '161';	  
											if ($var==$dataa){
											   echo "حرف :- ". substr_replace($var, 'ء', 0)." - :"." $value مرة<br>";	
											}

												$var = '162';
											if ($var==$dataa){
												echo "حرف :- ". substr_replace($var, 'آ', 0)."- :"."  $value مرة<br>";	
											}
												$var = '163';
											if ($var==$dataa){
												echo "حرف :- ". substr_replace($var, 'أ', 0)."- :"."  $value مرة<br>";	
											}
												$var = '164';
											if ($var==$dataa){
												echo "حرف :- ". substr_replace($var, 'ؤ', 0)."- :"." $value مرة<br>";	
											}
												$var = '165';
											if ($var==$dataa){
												echo "حرف :- ". substr_replace($var, 'إ' , 0)."- :"." $value مرة<br>";	
											}
												$var = '166';
											if ($var==$dataa){
												echo "حرف :- ". substr_replace($var, 'ئ', 0)."- :"." $value مرة<br>";	
											}
											   $var = '167';
											if ($var==$dataa){
											   echo "حرف :- ".substr_replace($var, 'ا', 0)."- :"." $value مرة<br>";	
											}
											   $var = '168';
											if ($var==$dataa){
											   echo "حرف :- ". substr_replace($var, 'ب', 0)."- :"." $value مرة<br>";	
											}
											   $var = '170';
											if ($var==$dataa){
											   echo "حرف :- " . substr_replace($var, 'ت', 0)."- :"." $value مرة<br>";	
											}
											   $var = '171';
											if ($var==$dataa){
											   echo "حرف :- ". substr_replace($var, 'ث', 0)."- :"." $value مرة<br>";	
											}
											   $var = '172';
											if ($var==$dataa){
											   echo "حرف :- ". substr_replace($var, 'ج', 0)."- :"." $value مرة<br>";	
											}
											   $var = '173';
											if ($var==$dataa){
											   echo "حرف :- ". substr_replace($var, 'ح', 0)."- :"."$value مرة<br>";
											}
											   $var = '174';
											if ($var==$dataa){
											   echo "حرف :- ". substr_replace($var, 'خ', 0)."- :"."$value مرة<br>";
											}
											   $var = '175';
											if ($var==$dataa){
											   echo "حرف :- ". substr_replace($var, 'د', 0)."- :"." $value مرة<br>";
											}
											   $var = '176';
											if ($var==$dataa){
											   echo "حرف :- ". substr_replace($var, 'ذ', 0)." - :"." $value مرة<br>";
											}
											   $var = '177';
											if ($var==$dataa){
											   echo "حرف :- ". substr_replace($var, 'ر', 0)."- :"."$value مرة<br>";
											}
											   $var = '178';
											if ($var==$dataa){
											   echo "حرف :- ". substr_replace($var, 'ز', 0)." - :"."$value مرة<br>";
											}
											   $var = '179';
											if ($var==$dataa){
											   echo "حرف :- ". substr_replace($var, 'س', 0)."- :"."$value مرة<br>";
											}
											   $var = '180';
											if ($var==$dataa){
											   echo "حرف :- ". substr_replace($var, 'ش', 0)." - :"." $value مرة<br>";
											}
											   $var = '181';
											if ($var==$dataa){
											   echo "حرف :- ".substr_replace($var, 'ص', 0)."- :"." $value مرة<br>";
											}
											   $var = '182';
											if ($var==$dataa){
											   echo "حرف :- ".substr_replace($var, 'ض', 0)."- :"." $value مرة<br>";
											}
											   $var = '183';
											if ($var==$dataa){
											   echo "حرف :- ".substr_replace($var, 'ط', 0)."- :"." $value مرة<br>";
											}
											   $var = '184';
											if ($var==$dataa){
											   echo "حرف :- ".substr_replace($var, 'ظ', 0)."- :"." $value مرة<br>";
											}
											   $var = '185';
											if ($var==$dataa){
											   echo "حرف :- ". substr_replace($var, 'ع', 0)."- :"." $value مرة<br>";
											}
											   $var = '186';
											if ($var==$dataa){
											   echo "حرف :- ".substr_replace($var, 'غ', 0)."- :"." $value مرة<br>";
											}
											   $var = '129';
											if ($var==$dataa){
											   echo "حرف :- ".substr_replace($var, 'ف', 0)."- :"." $value مرة<br>";
											}
											   $var = '130';
											if ($var==$dataa){
											   echo "حرف :- ".substr_replace($var, 'ق', 0)."- :"." $value مرة<br>";
											} 
											   $var = '131';
											if ($var==$dataa){
											   echo "حرف :- ". substr_replace($var, 'ك', 0)."- :"." $value مرة<br>";
											}
											   $var = '132';
											if ($var==$dataa){
											   echo "حرف :- ". substr_replace($var, 'ل', 0)."- :"." $value مرة<br>";
											}
											   $var = '133';
											if ($var==$dataa){
											   echo "حرف :- ".substr_replace($var, 'م', 0)."- :"." $value مرة<br>";
											}
											   $var = '134';
											if ($var==$dataa){
											   echo "حرف :- ".substr_replace($var, 'ن', 0)."- :"." $value مرة<br>";
											}
											   $var = '135';
											if ($var==$dataa){
											   echo "حرف :- ".substr_replace($var, 'ه', 0)."- :"." $value مرة<br>";
											}
											   $var = '136';
											if ($var==$dataa){
											   echo "حرف :- ".substr_replace($var, 'و', 0)."- :"." $value مرة<br>";
											}
											   $var = '137';
											if ($var==$dataa){
											   echo "حرف :- ".substr_replace($var, 'ى', 0)."- :"." $value مرة<br>";
											}
											   $var = '138';
											if ($var==$dataa){
											   echo "حرف :- ".substr_replace($var, 'ي', 0)."- :"." $value مرة<br>";
											}

											}	

										?>
									</p>								
							

							  </div>      

							
  
							  

			</div>
	</div><!-- ----------------------fin le grand ROW------------------------>
							<div class="footer1">| Design by |Barika Culture Education|</br><span>le Webmaster:-(( chayb.ta3na@gmail.com ))-:صاحب الموقع</span></div>

</div> <!-- ----------------------fin container text-center------------------------>
										
				 <a class="scroll-to-top" href="#"  >
					  <i class="fa fa-chevron-up" aria-hidden="true"></i>
				 قمة</a>
</body>
</html>
