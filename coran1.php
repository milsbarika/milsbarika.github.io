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
			 z-index:99999;
  }

#page a:link, #page a:visited {
  background-color: #f44336;
  color: white;
  padding:auto;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  height:30px;
  
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



<div class="container text-center"style="background : #abc;"> 

                      <!-- -------------------------------------------------------------------------------------------------------------------- --> 
		 
                   <p id="page"style="border-radius:  20px 20px 20px 20px;margin:auto;height:35px;width:260px;background-color:#ffa;color:#000;font-size :16px;text-align:center;"><span><a href="index.html" style="padding-top:4px;border-radius:  20px 20px 20px 20px;width: 100px;color:#fff;font-weight:bold;font-size: 16px;">الى القائمة</a></span>&nbsp;&nbsp;&nbsp;&nbsp;<span><a href="coran2.php" style="padding-top:4px;border-radius:  20px 20px 20px 20px;width: 100px;color:#fff;font-weight:bold;font-size: 16px;">الى الصفحة-1</a></span></p>

   <p ><a href="#banne4" style="font-weight:bold;font-size :20px;background-color:#000;color:#fff;">الى البحث في السورة</a></p>
	 <div class="row"id = "banne3" >
        <div class="col-sm-12">
          <div class="panel panel-default text-left">
            <div class="panel-body">
			   <div class="container-fluid text-center">
					     	                          
                                <form action="coran1.php" method="POST"style="color: #000;margin-bottom: 10px;font-size :14px">
								
                                        <div style="margin-bottom: 20px;padding:10px;align:center;">
											 
												<div style="width:200px;margin:auto;text-align:center;margin-bottom: 30px;"><p style="background-color:#000;font-weight:bold;color:#fff;font-family: Diwani Simple Striped;font-size :22px;">البحث في كل القرآن</p></div>               
																						
												 <button type="submit" class="btn btn-success btn-xs"  style="color: #000;margin-bottom: 10px;font-size :14px">البحث </button>
												 <input type="text" name="rech2" placeholder="ادخل الكلمة للبحث " id="search"style="text-align:right;margin-bottom: 15px;color: #f00;"/>
											     <?php
													echo "<span style='font-family: Simplified Arabic Fixed;'>".$rech2."</span>";
												  ?>
												  
										</div>     
								 </form>										       
			               
										<table class="table table-hover"style="margin-top:20px;">													
											  <thead>
													<tr>														
														<th bgcolor="#6df999" style="text-align:center;"><b><u>نص الآية</u></b></th>										       												
														<th bgcolor="#ffcc88"style="text-align:center;"><b><u>الآية </u></b></th>
														<th bgcolor="#6699fd"style="text-align:center;"><b><u>السورة</u></b></th>
																											
												  </tr>
											   </thead>
																												 
												 <?php while ($retour = $rs3->fetch()): ?>
													<tr class="warning">
														<td><?php echo htmlspecialchars($retour['TextSora']);?></td>
														<td style="color: #000; font-weight:bold;background-color: #ffcc88"><?php echo htmlspecialchars($retour['NoAya']);?></td>							   
														<td style="color: #000; font-weight:bold;background-color: #6699fd"><?php echo htmlspecialchars($retour['NomSora']);?>&nbsp;&nbsp;<?php echo htmlspecialchars($retour['NoSora']);?></td>											
														<!-- <td style="color: #000; font-weight:bold;background-color: #f99ff9"></td>	-->
														
													</tr>																																																																		
												 <?php endwhile; ?>
						                  </table>				
 
				</div>
			  </div>
			</div>
		  </div>
      </div>

 <!-- -------------------------------------------------------------------------------------------------------------------- --> 
  <div class="row"><!-- ----------------------debut unique ROW------------------------>
  
		  <!-- ----------------------debut grand col 3 ------------------------>
		<div class="col-sm-3 well">
				  <div class="well">
					<p>و كيف أصبحت</p>
					<img src="imagesS/m3.jpg" class="img-circle" height="75" width="65" alt="Avatar">
					<p style=" color: #000;font-family: Brush Script MT;font-size :20px;text-align:center;">Barika Education Culture </p>
				  </div>
			

				  <div class="well">
					<p>
					  <span class="label label-default"style="font-family: Andalus; color: #ff0;font-size :24px;">:قال الله تعالى  </span></br>
					  <span class="label label-primary"style="font-family: Andalus; color: #000;font-size :14px;">:أعوذ بالله من الشيطان الرجيم</span></br>
					  <span class="label label-success"style="font-family:Andalus; color: #000;font-size :14px;">قَدْ جَاءَكُمْ بَصَائِرُ مِنْ رَبِّكُمْ </span></br>
					  <span class="label label-info"style="font-family: Andalus; color: #000;font-size :14px;">فَمَنْ أَبْصَرَ فَلِنَفْسِهِ </span>
					  <span class="label label-warning"style="font-family:Andalus; color: #000;font-size :14px;">وَمَنْ عَمِيَ فَعَلَيْهَا </span>
					  <span class="label label-danger"style="font-family: Andalus; color: #000;font-size :14px;">َمَا أَنَا عَلَيْكُمْ بِحَفِيظٍ</span>
					</p>
				  </div>
				  <div class="alert alert-success fade in">
					<!--   <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>     --->
						<p style="font-family: Diwani Simple Striped; color: #00f;font-size :35px;"><strong>الله أكبر</strong></p>
						<p style="font-family: Andalus; color: #0f0;font-size :25px;"><strong>غص في أعماق المعجزة الخالدة كلام الله.</strong></p>
						
				  </div>
				  
				  <div class="alert alert-success fade in">
					  <h4><u>آيات و أقوال عن رسول الله صلى الله عليه وسلم</u></h4>
							<p style="font-family: Diwani Simple Striped; color: #000;font-size :20px;">قال سبحانه وتعالى مزكيا الحبيب المصطفى – عليه الصلاة والسلام – : </p>
							<p style="font-family: Andalus; color: #000;font-size :18px;"><span style="font-family: tahoma; color: #f00;font-size :12px;" > ( القلم 4 )  </span><strong> ” وإنك لعلى خلق عظيم ” </strong></p>

					<img src="imagesS/fl1.jpg" class="img-circle" height="70" width="100" alt="Avatar">	
				  </div>

                  <div class="alert alert-success fade in">
				  
					<p style=" color: #000;font-size :14px;text-align:right;font-family: tahoma;"><u>قال العالم الأمريكي مايكل هارث </u></p>
					<p  style=" color: #000;font-size :14px;text-align:right;">
                            " إن محمدًا صلى الله عليه وسلم كان الرجل الوحيد في التاريخ الذي نجح بشكل أسمى وأبرز في كلا المستويين الديني والدنيوي .. إن هذا الاتحاد الفريد الذي لا نظير له للتأثير الديني والدنيوي معًا يخوّله أن يعتبر أعظم شخصية ذات تأثير في تاريخ البشرية " .</p>
                   <img src="imagesS/icp2.svg" class="img-circle" height="70" width="100" alt="Avatar">
				  </div>
				  
                  <div class="alert alert-success fade in">
					<p style=" color: #000;font-size :14px;text-align:right;font-family: tahoma;"><u>قال الكاتب المسرحي البريطاني جورج برنارد شو</u></p>
					<p  style=" color: #000;font-size :14px;text-align:right;">
					وهو من رفض أن يكون أداة لتشويه صورة الرسول "صلى الله عليه وسلم" عندما طلب منه البعض أن يمسرح حياة النبي حيث جاء رفضه قاطعاً. ومما قاله عن الإسلام ورسوله : "قرأت حياة رسول الإسلام جيداً، مرات ومرات لم أجد فيها إلا الخلق كما يجب أن يكون، وأصبحت أضع محمداً في مصاف بل على قمم المصاف من الرجال الذين يجب أن يتبعوا"
                    </p>
					<img src="imagesS/fleurs_008.jpg" class="img-circle" height="70" width="100" alt="Avatar">
				   </div>
					                                    
                  <div class="alert alert-success fade in">
					<p style=" color: #000;font-size :14px;text-align:right;font-family: tahoma;"><u> قال توماس كارليل </u></p>
					<p  style=" color: #000;font-size :14px;text-align:right;">
					وهو المصلح الاجتماعي الإنجليزي الذي كان مولعاً بالشخصيات التي غيرت مجرى التاريخ، وأفرد في كتابه "الأبطال" فصلاً كاملاً للحديث عن الرسول الكريم "صلى الله عليه وسلم" واستعرض فيه نواحي العظمة في حياته ورد على افتراءات الكارهين له ولرسالته العظيمة حتى انه اتهم بالتحيز للإسلام
                    </p>
                    <img src="imagesS/icp3.svg" class="img-circle" height="70" width="100" alt="Avatar">
				  </div>
				  
				  <div class="alert alert-success fade in">
					<p style=" color: #000;font-size :14px;text-align:right;font-family: tahoma;"><u>قال الأديب الروسي ليو تولستوي</u></p>
					<p  style=" color: #000;font-size :14px;text-align:right;">
					 " لا يوجد نبي حظي باحترام أعدائه سوى النبي محمد مما جعل الكثرة من الأعداء يدخلون الإسلام "
                    </p>
                    <img src="imagesS/fleurs_036.jpg" class="img-circle" height="70" width="100" alt="Avatar">
				  </div>
				  			
				  <div class="alert alert-success fade in">
					<p style=" color: #000;font-size :14px;text-align:right;font-family: tahoma;"><u>قالت الدكتورة زيجرد هونكة الألمانية </u></p>
					<p  style=" color: #000;font-size :14px;text-align:right;">
					 " أن محمد والإسلام شمس الله على الغرب. كان رسول الإسلام يعرف أن المرأة ستجد طريقها بجوار الرجل ذات يوم. لذا آثر أن تكون المرأة متدينة . لها لباس معين، حتى تقي نفسها شر النظرات وشر كشف العورات. ورجل بهذه العبقرية لا أستطيع أن أقول إلا أنه قدم للمجتمع أسمى آيات المثالية وأرفعها وكان جديرا أن تظل الإنسانية مدينة لهذا الرجل الذي غيَّر مجرى التاريخ برسالته العظيمة "
                    </p>
                    <img src="imagesS/icp.svg" class="img-circle" height="70" width="100" alt="Avatar">
				  </div>
				  				  				  
				  <div class="alert alert-success fade in">
					<p style=" color: #000;font-size :14px;text-align:right;font-family: tahoma;"><u>قال المفكر الفيلسوف لامارتن </u></p>
					<p  style=" color: #000;font-size :14px;text-align:right;">
					 النبي محمد علية الصلاة والسلام هو النبي الفيلسوف المحارب الخطيب المشرع قاهر الأهواء وبالنظر إلى كل مقاييس العظمة البشرية أود أن أتسائل هل هناك من هو أعظم من النبي محمد عليه الصلاة والسلام
                    </p>
                     <img src="imagesS/fleurs_063.jpg" class="img-circle" height="70" width="100" alt="Avatar">
				  </div>
				  
				  <div class="alert alert-success fade in">
					<p style=" color: #000;font-size :14px;text-align:right;font-family: tahoma;"><u>قال المستشرق الكندي الدكتور زويمر الكندي </u></p>
					<p  style=" color: #000;font-size :14px;text-align:right;">
					إن محمداً كان ولا شك من أعظم القواد المسلمين الدينيين، ويصدق عليه القول أيضاً بأنه كان مصلحاً قديراً وبليغاً فصيحاً وجريئاً مغواراً، ومفكراً عظيماً، ولا يجوز أن ننسب إليه ما ينافي هذه الصفات، وهذا قرآنه الذي جاء به وتاريخه يشهدان بصحة هذا الادعاء
                    </p>
                     <img src="imagesS/icp4.svg" class="img-circle" height="70" width="100" alt="Avatar">
				  </div>
				  
				  <div class="alert alert-success fade in">
					<p style=" color: #000;font-size :14px;text-align:right;font-family: tahoma;"><u>قال برناردشو الإنكليزي </u></p>
					<p  style=" color: #000;font-size :14px;text-align:right;">
					: الذي ولد في مدينة كانيا 1817 ـ 1902 له مؤلف أسماه (محمد)، وقد أحرقته السلطة البريطانية.
                    إن العالم أحوج ما يكون إلى رجلٍ في تفكير محمد، هذا النبي الذي وضع دينه دائماً موضع الاحترام والإجلال فإنه أقوى دين على هضم جميع المدنيات، خالداً خلود الأبد، وإني أرى كثيراً من بني قومي قد دخلوا هذا الدين على بينة، وسيجد هذا الدين مجاله الفسيح في هذه القارة (يعني أوروبا).
                    </p>
                    <img src="imagesS/fleurs_074.jpg" class="img-circle" height="70" width="100" alt="Avatar">
				  </div>
				  
				  <div class="alert alert-success fade in">
					<p style=" color: #000;font-size :14px;text-align:right;font-family: tahoma;"><u>قال المستشرق سنرستن الآسوجي </u></p>
					<p  style=" color: #000;font-size :14px;text-align:right;">
					 الذي ولد عام 1866، أستاذ اللغات الساميّة .
" إننا لم ننصف محمداً إذا أنكرنا ما هو عليه من عظيم الصفات وحميد المزايا، فلقد خاض محمد معركة الحياة الصحيحة في وجه الجهل والهمجية، مصراً على مبدئه، وما زال يحارب الطغاة حتى انتهى به المطاف إلى النصر المبين، فأصبحت شريعته أكمل الشرائع، وهو فوق عظماء التاريخ "
                    </p>
                     <img src="imagesS/icp5.svg" class="img-circle" height="70" width="100" alt="Avatar">
				  </div>
				  
				  <div class="alert alert-success fade in">
					<p style=" color: #000;font-size :14px;text-align:right;font-family: tahoma;"><u>قالت : آن بيزينت</u></p>
					<p  style=" color: #000;font-size :14px;text-align:right;">
					 في حياة وتعاليم محمد دار مادرس للنشر 1932.
" من المستحيل لأي شخص يدرس حياة وشخصية نبي العرب العظيم ويعرف كيف عاش هذا النبي وكيف علم الناس، إلا أن يشعر بتبجيل هذا النبي الجليل، أحد رسل الله العظماء، ورغم أنني سوف أعرض فيما أروي لكم أشياء قد تكون مألوفة للعديد من الناس فإنني أشعر في كل مرة أعيد فيها قراءة هذه الأشياء بإعجاب وتبجيل متجددين لهذا المعلم العربي العظيم.
هل تقصد أن تخبرني أن رجلاً في عنفوان شبابه لم يتعد الرابعة والعشرين من عمره بعد أن تزوج من امرأة أكبر منه بكثير وظل وفياً لها طيلة 26 عاماً ثم عندما بلغ الخمسين من عمره - السن التي تخبو فيها شهوات الجسد - تزوج لإشباع رغباته وشهواته؟! ليس هكذا يكون الحكم على حياة الأشخاص.
فلو نظرت إلى النساء اللاتي تزوجهن لوجدت أن كل زيجة من هذه الزيجات كانت سبباً إما في الدخول في تحالف لصالح أتباعه ودينه أو الحصول على شيء يعود بالنفع على أصحابه أو كانت المرأة التي تزوجها في حاجة ماسة للحماية "
                    </p>
                    <img src="imagesS/fleurs_017.jpg" class="img-circle" height="70" width="100" alt="Avatar">
				  </div>
				  
				  <div class="alert alert-success fade in">
					<p style=" color: #000;font-size :14px;text-align:right;font-family: tahoma;"><u>قال مايكل هارت </u></p>
					<p  style=" color: #000;font-size :14px;text-align:right;">
					 في كتابه مائة رجل من التاريخ.
إن اختياري محمداً، ليكون الأول في أهم وأعظم رجال التاريخ، قد يدهش القراء، ولكنه الرجل الوحيد في التاريخ كله الذي نجح أعلى نجاح على المستويين: الديني والدنيوي.
فهناك رُسل وأنبياء وحكماء بدءوا رسالات عظيمة، ولكنهم ماتوا دون إتمامها، كالمسيح في المسيحية، أو شاركهم فيها غيرهم، أو سبقهم إليهم سواهم، كموسى في اليهودية، ولكن محمداً هو الوحيد الذي أتم رسالته الدينية، وتحددت أحكامها، وآمنت بها شعوب بأسرها في حياته.
ولأنه أقام جانب الدين دولة جديدة، فإنه في هذا المجال الدنيوي أيضاً، وحّد القبائل في شعـب، والشعوب في أمة، ووضع لها كل أسس حياتها، ورسم أمور دنياها، ووضعها في موضع الانطلاق إلى العالم. أيضاً في حياته، فهو الذي بدأ الرسالة الدينية والدنيوية، وأتمها
                    </p>
                    <img src="imagesS/icp6.svg" class="img-circle" height="70" width="100" alt="Avatar">
				  </div>
				  
				  <div class="alert alert-success fade in">
					<p style=" color: #000;font-size :14px;text-align:right;font-family: tahoma;"><u>قال القس لوزان </u></p>
					<p  style=" color: #000;font-size :14px;text-align:right;">
					بعد بيان عن أوصاف محمد صلى الله عليه وآله وسلم: " ف محمد صلى الله عليه وآله وسلم بلا التباس ولا نكران من النبيين والصديقين، بل وإنه نبي عظيم جليل القدر والشأن، لقد أمكنه بإرادة الله سبحانه تكوين الملة الإسلامية وإخراجها من العدم إلى الوجود، بما صار أهلها ينيفون (يزيدون) عن الثلاثمائة مليون (يعني على ظنه في زمانه) من النفوس، وراموا بجدهم سلطنة الرومان، وقطعوا برماحهم دابر أهل الضلالة إلى أن صارت ترتعد من ذكرهم فرائض الشرق والغرب " 
                    </p>
                    <img src="imagesS/fleurs_092.jpg" class="img-circle" height="70" width="100" alt="Avatar">
				  </div>
				  
				  <div class="alert alert-success fade in">
					<p style=" color: #000;font-size :14px;text-align:right;font-family: tahoma;"><u>قال كارل ماركس </u></p>
					<p  style=" color: #000;font-size :14px;text-align:right;">
					"هذا النبي افتتح برسالته عصرا للعلم والنور والمعرفة ، حري أن تدون أقواله وأفعاله بطريقة علمية خاصة ، وبما أن هذه التعاليم التي قام بها هي وحي فقد كان عليه أن يمحو ما كان متراكما من الرسالات السابقة من التبديل والتحوير "
                    </p>
                     <img src="imagesS/icp7.svg" class="img-circle" height="70" width="100" alt="Avatar">
				  </div>
				  
				  <div class="alert alert-success fade in">
					<p style=" color: #000;font-size :14px;text-align:right;font-family: tahoma;"><u>قال فارس الخوري </u></p>
					<p  style=" color: #000;font-size :14px;text-align:right;">
					 " إن محمدا أعظم عظماء العالم ، والدين الذي جاء به أكمل الأديان "
                    </p>
                    <img src="imagesS/fl3.jpg" class="img-circle" height="70" width="100" alt="Avatar">
				  </div>
				  
				  <div class="alert alert-success fade in">
					<p style=" color: #000;font-size :14px;text-align:right;font-family: tahoma;"><u>قال الفيلسوف الفرنسي (كارديفو) </u></p>
					<p  style=" color: #000;font-size :14px;text-align:right;">
					 "إن محمداً كان هو النبي الملهم والمؤمن، ولم يستطع أحد أن ينازعه المكانة العالية التي كان عليها ، إن شعور المساواة والإخاء الذي أسسه محمد بين أعضاء الكتلة الإسلامية كان يطبق عمليا حتى على النبي نفسه"
                    </p>
                     <img src="imagesS/icp8.svg" class="img-circle" height="70" width="100" alt="Avatar">
				  </div>
				  
				   <div class="alert alert-success fade in">
					<p style=" color: #000;font-size :14px;text-align:right;font-family: tahoma;"><u>قال العالم الهندوسي ت.ل.فسواني </u></p>
					<p  style=" color: #000;font-size :14px;text-align:right;">
					 بعنوان "إجلال فسواني لمحمد": ( تأملت في أمر محمد صلى الله عليه وسلم فتعجبت من هذا الرجل العظيم الذب نشأ بين أولئك القوم ، المختلى النظام ، الفاسدي الأخلاق ، العابدي الأحجار ، هذا الرجل محمد وقف تقريبا وحده ، شجاعا متحديا غير هياب ، ولا وجل في وجه التوعد بالقتل فمن الذي أعطاه تلك القوة التي قام بها كأنه بطل من أبطال الحرب حتى استمعوا له بعد الإعراض لكلامه ؟ فمن أين جاء سحر بيانه حتى أعتق العبيد وساوى بين النبلاء وبين الصعاليك المنبوذين ، حتى صاروا إخوانا وخلانا ؟. ونحن هنا في الهند إلى الآن لا نزال نقتتل لأجل جواز لمس بعضنا بعضا أو عدمه ، لا نزال عاجزين عن إباحة الدخول في بيوت الآلهة _الأصنام والأوثان_ للمنبوذين من أبناء جلدتنا . من أين استمد الرجل محمد صلى الله عليه وسلم قوة حياته الغالية ؟ والهند إلى الآن مصابة بمصيبة شرب الخمر ، والرجل محمد اقترح كما تقول الكتب القديمة (يشير إلى القرآن) مقاطعة الخمر ومقاطعة كل شرب مسكر ، فقام أصحابه وألقوا دنان الخمور في أزقة المدينة وحطموها تحطيما ، ولقد كان تصرف محمد في قومه كالتنويم المغناطيسي ، فمن أين جاء سر هذه القوة؟ ألم تر أن قومه كانوا أشتاتا قد عمتهم الفوضى فألف بين قلوبهم وجعلهم أمة واحدة ، وكانوا في التوحش فأنقذهم ورفع مقامهم ، وجعلهم عظماء أقوياء في أعين الأمم كلها ، وأصبحت آخذة بيمينها مصباح التهذيب والرقى ، إن التهذيب العربي هو الذي أنشأ في آسيا و أوروبا نشأة جديدة وإنسانية جديدة).

وفى الختام قال فسواني : (إليك يا محمد أنا الخادم الحقير ، أقدم إجلالي وتعظيمي بكل خضوع وتكريم ، إليك أطأطىء رأسي فإنك لنبي حق من عند الله ، و قوتك العظيمة كانت من عالم الأزلي الأبدي).
                    </p>
                    <img src="imagesS/fleurs_022.jpg" class="img-circle" height="70" width="100" alt="Avatar">
				  </div>
				   <p style="text-align:right;font-size:10px; font-family: background-color:#ccc;color:#000; ">
					-المقال من -</br> intelligentsia.tn.over-blog.com 
				  </p>
				
			</div>
			
	<!-- ----------------------fin grand col 3------------------------>
	
    <div class="col-sm-7">
							
   
	            <!-- ----------------------fin ROW 12------------------------>
				   <div class="row">
				    <div class="col-sm-12">
		                   <div class="well">
									

										<p style="font-family: Diwani Simple Striped; color: #00f;font-size :30px;"><u><strong>أجمل أقوال وحكم عن القرآن الكريم</strong></u></p>

										 <p style=" color: #44f;font-size :18px;"><u><strong>قال رسول الله سيدنا محمد  صلى الله عليه و سلم</strong></u></p>
										 <p><strong>«اقرأوا القرآن فإنه يأتي يوم القيامة شفيعا لأصحابه».</strong></p>

										 <p style=" color: #44f;font-size :18px;"><u><strong>قال رسول الله سيدنا محمد  صلى الله عليه و سلم</strong></u></p>
										 <p><strong>«خير من تعلم القرآن وعلمه»</strong></p>
										 
										   <p style=" color: #44f;font-size :18px;"><u><strong>قال رسول الله سيدنا محمد  صلى الله عليه و سلم</strong></u></p>
										 <p><strong>«الصيام والقرآن يشفعان للعبد يوم القيامة. يقول الصيام: أي رب، منعته الطعام والشهوات بالنهار فشفعني فيه، ويقول القرآن: منعته النوم بالليل فشفعني فيه. فقال: فيشفعان».</strong></p>  
										 
										<p style=" color: #44f;font-size :18px;"><u><strong>ابن القيم</strong></u></p>
										<p><strong> اذا أردت أن تعلم ما عندك وعند غيرك من محبة الله فانظر محبة القرآن من قلبك</strong></p>

										<p style=" color: #44f;font-size :18px;"><u><strong>غوته</strong></u></p>
										<p><strong>كلما قرأت القرآن شعرت أن روحي تهتز داخل جسمي</strong></p>

										<p style=" color: #44f;font-size :18px;"><u><strong>علي الطنطاوي</strong></u></p>   
										<p><strong>إن مثل القرآن والعلم كمثل سائق سيارة يمشي بها في السهل الواسع يرى القمر أمامه مُطلًّا عليه من فوق الجبل فيسرع ليدرك القمر والقمر مكانه</strong></p>

										<p style=" color: #44f;font-size :18px;"><u><strong>الحسن البصري</strong></u></p>
										<p>تفـقـَّـد الحلاوة في ثلاثة أشياء : في الصلاة والقرآن والذكر ، فإن وجدت ذلك فأمضي وأبشر ، وإلا فاعلم أن بابك مغلق فعالج فتحه</p>

										<p style=" color: #44f;font-size :18px;"><u><strong>احمد الشقيري</strong></u></p>
										<p><strong>القرآن : هوَ جنّة ، هوَ رِفعة ، هوَ هِدآية ، هوَ سبيل إسعآد وَ دربُ أمآن</strong></p>

										<p style=" color: #44f;font-size :18px;"><u><strong>مصطفى محمود</strong></u></p>
										<p><strong>ومن دلائل عظمة القرآن و إعجازه أنه حينما ذكر الزواج، لم يذكر الحب و إنما ذكر المودة و الرحمة و السكن … سكن النفوس بعضها إلى بعض و راحة النفوس بعضها إلى بعض (( وَمِنْ آيَاتِهِ أَنْ خَلَقَ لَكُم مِّنْ أَنفُسِكُمْ أَزْوَاجًا لِّتَسْكُنُوا إِلَيْهَا وَجَعَلَ بَيْنَكُم مَّوَدَّةً وَرَحْمَةً )) ( الروم – 21 ) إنها الرحمة و المودة.. مفتاح البيوت و الرحمة تحتوي على الحب بالضرورة.. و الحب لا يشتمل على الرحمة، بل يكاد بالشهوة أن ينقلب عدوانا و الرحمة أعمق من الحب و أصفى و أطهر. و الرحمة عاطفة إنسانية راقية مركبة، ففيها الحب، و فيها التضحية، و فيها إنكار الذات، و فيها التسامح، و فيها العطف، و فيها العفو، و فيها الكرم. و كلنا قادرون على الحب بحكم الجبلة البشرية. و قليل منا هم القادرون على الرحمة و بين ألف حبيبة هناك واحدة يمكن أن ترحم، و الباقي طالبات هوى و نشوة و لذة. اللهم إني أسألك رحمة.. اللهم إني أسألك مودة تدوم.. اللهم إني أسألك سكنا عطوفا و قلبا طيبا.. اللهم لا رحمة إلا بك و منك و إليك</strong></p>

										<p style=" color: #44f;font-size :18px;"><u><strong>أحمد الشقيري</strong></u></p>
										<p><strong>كلما قرأت كلمة الجهاد في القرآن فلا يذهب بالك فقط لجهاد الحرب فجهاد النفس أكبر واعظم وهو داخل في معنى آيات الجهاد في سبيل الله فجهاد النفس جهاد في سبيل الله وإياك العناد فإنه مهلك</strong></p>

										<p style=" color: #44f;font-size :18px;"><u><strong>مهاتير محمد</strong></u></p>
										<p><strong>القانون لا يمكن اعتباره إسلامياً لمجرد أننا صغناه على أنه قانون شرعي، بل على العكس من ذلك يمكننا أن نضيف قوانين أخرى تبدو في ظاهرها غير شرعية، لكننا نصفها على أنها شرعية متى كانت لا تخالف أو تناقض روح ومبادئ القوانين والحدود التي ورد ذكرها صراحة في القرآن الكريم</strong></p>

										<p style=" color: #44f;font-size :18px;"><u><strong>محمد الغزالي</strong></u></p>
										<p><strong>والزكاة المفروضة ليست ضريبة تؤخذ من الجيوب بل هى أولا غرس لمشاعر الحنان والرأفة وتوطيد لعلاقات التعارف والألفة بين شتى الطبقات. وقد نص القرآن على الغاية من إخراج الزكاة بقوله: خذ من أموالهم صدقة تطهرهم وتزكيهم بها. فتنظيف النفس من أدران النقص والتسامى بالمجتمع إلى مستوى أنبل هو الحكمة الأولى</strong></p>

										 <p style=" color: #44f;font-size :18px;"><u><strong>عمر المقبل</strong></u></p>
										 <p><strong>إن من يقصر علاقته بالقرآن تلاوة و تدبراً على شهر رمضان ، فهو كمن يعلن عن استغنائه عن هدى الله ، و نوره ، و رحمته ،و شفائه ، و حياة قلبه أحد عشر شهراً</strong></p>
										 
										 <p style=" color: #44f;font-size :18px;"><u><strong>الحسن البصري</strong></u></p>
										 <p><strong>قرأت في تسعين موضعا من القرآن أن الله قدر الأرزاق و ضمنها لخلقه ، و قرأت في موضع واحد : الشيطان يعدكم الفقر … فشككنا في قول الصادق في تسعين موضعاً و صدقنا قول الكاذب في موضع واحد</strong></p>
										 
										 <p style=" color: #44f;font-size :18px;"><u><strong>الليث بن سعد</strong></u></p>
										 <p><strong>ما الرحمة إلى أحد بأسرع منها إلى مستمع القرآن ؛ لقول الله عز وجل : (( و إذا قرئ القرآن فاستمعوا له و أنصتوا لعلكم ترحمون)) ، و (لعل) من الله واجبة</strong></p>
										 
										 <p style=" color: #44f;font-size :18px;"><u><strong>سيد قطب</strong></u></p>
										 <p><strong>القرآن لا يدركه حق ادراكه من يعيش خالي البال من مكابدة الجهد و الجهاد لاستئناف حياة اسلامية حقيقية</strong></p>
										 
										 <p style=" color: #44f;font-size :18px;"><u><strong>محمد متولي الشعراوي</strong></u></p>
										 <p><strong>من حلاوة ما ذقته فى القرآن .. أريد أن أنقل هذه الحلاوة للناس</strong></p>
										 
										 <p style=" color: #44f;font-size :18px;"><u><strong>ويل ديورانت</strong></u></p>
										 <p><strong>لقد شكل القرآن أخلاق المسلمين ، و حضهم على الاعتدال لدرجة لا يوجد لها نظير في أي بقعة يسكنها الرجل الأبيض … و علمهم مواجهة الحياة دون شكوى أو دموع</strong></p>

										 <p style=" color: #44f;font-size :18px;"><u><strong>محمد حسن الوزاني</strong></u></p>
										 <p><strong>الإسلام دين الشورى، والاستبداد مخالف للشريعة الإسلامية وللدستورها الذي هو القرآن الكريم</strong></p>

										 <p style=" color: #44f;font-size :18px;"><u><strong>إبراهيم السكران</strong></u></p>
										 <p><strong>انبعاث صوت القارئ بالقرآن بين أمواج الليل الساكن قصة تنحني لها النفوس.</strong></p>
											
										 <p style=" color: #44f;font-size :18px;"><u><strong>إبراهيم السكران</strong></u></p>
										 <p><strong>القرآن اذا خيم سكون الليل يكون عالماّ آخر</strong></p>

										 <p style=" color: #44f;font-size :18px;"><u><strong>إبراهيم السكران</strong></u></p>
										 <p><strong>إنه الخيط الناظم والحقيقة الكبرى في القرآن وهو استمرار حركة القلب بالإيمان بالله والتعلق به سبحانه</strong></p>

										  <p style=" color: #44f;font-size :18px;"><u><strong>ابن تيمية</strong></u></p>
										 <p><strong>من تدبر القرآن طالبا الهدى منه ؛ تبين له طريق الحق</strong></p>
										 
										  <p style=" color: #44f;font-size :18px;"><u><strong>أحمد إبراهيم أبو غالي</strong></u></p>
										 <p><strong>من أراد أن يحدثه الله فليقرأ القرآن</strong></p>
										 
										  <p style=" color: #44f;font-size :18px;"><u><strong>أحمد شوقي إبراهيم</strong></u></p>
										 <p><strong>الحقائق الكونية دليل على أن الذي خلق الحقائق هو الذي أنزل القرآن</strong></p>
										 
										  <p style=" color: #44f;font-size :18px;"><u><strong>أحمد صبري غباشي</strong></u></p>
										 <p><strong>لا شيء يوطّد علاقتي باللغة مثل قراءة القرآن !</strong></p>
										 
										  <p style=" color: #44f;font-size :18px;"><u><strong>تركي الدخيل</strong></u></p>
										 <p><strong>ما أكده القرآن لم يطبقه المسلمون والعرب بحذافيره ،لهذا لاتزال المرأة تُظلم وتُضطهد</strong></p>
										 
										  <p style=" color: #44f;font-size :18px;"><u><strong>محمد الغزالي</strong></u></p>
										 <p><strong>والزكاة المفروضة ليست ضريبة تؤخذ من الجيوب بل هى أولا غرس لمشاعر الحنان والرأفة وتوطيد لعلاقات التعارف والألفة بين شتى الطبقات. وقد نص القرآن على الغاية من إخراج الزكاة بقوله: خذ من أموالهم صدقة تطهرهم وتزكيهم بها. فتنظيف النفس من أدران النقص والتسامى بالمجتمع إلى مستوى أنبل هو الحكمة الأولى. ومن أجل ذلك وسع النبى صلى الله عليه وسلم فى دلالة كلمة الصدقة التى ينبغى أن يبذلها المسلم فقال: تبسمك فى وجه أخيك صدقة وأمرك بالمعروف ونهيك عن المنكر صدقة وإرشادك الرجل فى أرض الضلال لك صدقة وإماطتك الأذى والشوك والعظم عن الطريق لك صدقة وإفراغك من دلوك فى دلو أخيك لك صدقة وبصرك للرجل الردىء البصر لك صدقة . وهذه التعاليم فى البيئة الصحراوية التى عاشت دهورا على التخاصم والنزق تشير إلى الأهداف التى رسمها الإسلام وقاد العرب فى الجاهلية المظلمة إليها.</strong></p>
										   
										   <p style=" color: #000;font-size :10px;"><u><strong>-بتصرف-هذه الاحاديث و الاقوال من هذا الموقع</strong></br><strong>vb.3dlat.com/</strong></u></p>
											
								 </div> 								
							 </div>
							 <!--<div class="col-sm-3">
									<div class="well">
<img src="imagesS/mozaique3.svg"  height="930" width="100" alt="Avatar">
<img src="imagesS/mozaique3.svg"  height="930" width="100" alt="Avatar">
	<img src="imagesS/mozaique3.svg"  height="925" width="100" alt="Avatar">						
										
									</div>
							</div>-->
	              
					</div>
					
                    <!-- ----------------------2eme partie------------------------>
	<div class="row" id="banne4">
        <div class="col-sm-12">
          <div class="panel panel-default text-left">
            <div class="panel-body">
			
		
							<form action="coran1.php" method="POST">
						                <div style="text-align:center;">
											 
												<p style="font-weight:bold;background-color:#000;color:#fff;font-family: Diwani Simple Striped;font-size :25px;">البحث في السورة</p>               
																						
												 <button type="submit" class="btn btn-success btn-xs"  style="color: #000;margin-bottom: 10px;font-size :14px">البحث </button>
												 <input type="text" name="rech1" placeholder="ادخل الكلمة للبحث " id="search"style="color: #f00;"/>
											
										
											
													<select name="numero"style="color: #000; font-weight:bold;width: 100px;;margin-top: 15px; ">
														 <option value="1">الفاتحة-1</option>
														 <option value="2">البقرة-2</option>
														 <option value="3">آل عمران-3</option>
														 <option value="4">النساء-4</option>
														 <option value="5">المائدة-5</option>
														 <option value="6">الأنعام-6</option>
														 <option value="7">الأعراف-7</option>
														 <option value="8">الأنفال-8</option>
														 <option value="9">التوبة-9</option>
														 <option value="10">يونس-10</option>
														 <option value="11">هود-11</option>
														 <option value="12">يوسف-12</option>
														 <option value="13">الرعد-13</option>
														 <option value="14">إبراهيم-14</option>
														 <option value="15">الحجر-15</option>
														 <option value="16">النحل-16</option>
														 <option value="17">الإسراء-17</option>
														 <option value="18">الكهف-18</option>
														 <option value="19">مريم-19</option>
														 <option value="20">طه-20</option>
														 <option value="21">الأنبياء-21</option>
														 <option value="22">الحج-22</option>
														 <option value="23">المؤمنون-23</option>
														 <option value="24">النور-24</option>
														 <option value="25">الفرقان-25</option>
														 <option value="26">الشعراء-26</option>
														 <option value="27">النمل-27</option>
														 <option value="28">القصص-28</option>
														 <option value="29">العنكبوت-29</option>
														 <option value="30">الروم-30</option>
														 <option value="31">لقمان-31</option>
														 <option value="32">السجدة-32</option>
														 <option value="33">الأحزاب-33</option>
														 <option value="34">سبأ-34</option>
														 <option value="35">فاطر-35</option>
														 <option value="36">يس-36</option>
														 <option value="37">الصافات-37</option>
														 <option value="38">ص-38</option>
														 <option value="39">الزمر-39</option>
														 <option value="40">غافر-40</option>
														 <option value="41">فصلت-41</option>
														 <option value="42">الشورى-42</option>
														 <option value="43">الزخرف-43</option>
														 <option value="44">الدخان-44</option>
														 <option value="45">الجاثية-45</option>
														 <option value="46">الأحقاف-46</option>
														 <option value="47">محمد-47</option>
														 <option value="48">الفتح-48</option>
														 <option value="49">الحجرات-49</option>
														 <option value="50">ق-50</option>
														 <option value="51">الذاريات-51</option>
														 <option value="52">الطور-52</option>
														 <option value="53">النجم-53</option>
														 <option value="54">القمر-54</option>
														 <option value="55">الرحمن-55</option>
														 <option value="56">الواقعة-56</option>
														 <option value="57">الحديد-57</option>
														 <option value="58">المجادلة-58</option>
														 <option value="59">الحشر-59</option>
														 <option value="60">الممتحنة-60</option>
														 <option value="61">الصف-61</option>
														 <option value="62">الجمعة-62</option>
														 <option value="63">المنافقون-63</option>
														 <option value="64">التغابن-64</option>
														 <option value="65">الطلاق-65</option>
														 <option value="66">التحريم-66</option>
														 <option value="67">الملك-67</option>
														 <option value="68">القلم-68</option>
														 <option value="69">الحاقة-69</option>
														 <option value="70">المعارج-70</option>
														 <option value="71">نوح-71</option>
														 <option value="72">الجن-72</option>
														 <option value="73">المزمل-73</option>
														 <option value="74">المدثر-74</option>
														 <option value="75">القيامة-75</option>
														 <option value="76">الإنسان-76</option>
														 <option value="77">المرسلات-77</option>
														 <option value="78">النبأ-78</option>
														 <option value="79">النازعات-79</option>
														 <option value="80">عبس-80</option>
														 <option value="81">التكوير-81</option>
														 <option value="82">الإنفطار-82</option>
														 <option value="83">المطففين-83</option>
														 <option value="84">الإنشقاق-84</option>
														 <option value="85">البروج-85</option>
														 <option value="86">الطارق-86</option>
														 <option value="87">الأعلى-87</option>
														 <option value="88">الغاشية-88</option>
														 <option value="89">الفجر-89</option>
														 <option value="90">البلد-90</option>
														 <option value="91">الشمس-91</option>
														 <option value="92">الليل-92</option>
														 <option value="93">الضحى-93</option>
														 <option value="94">الشرح-94</option>
														 <option value="95">التين-95</option>
														 <option value="96">العلق-96</option>
														 <option value="97">القدر-97</option>
														 <option value="98">البينة-98</option>
														 <option value="99">الزلزلة-99</option>
														 <option value="100">العاديات-100</option>
														 <option value="101">القارعة-101</option>
														 <option value="102">التكاثر-102</option>
														 <option value="103">العصر-103</option>
														 <option value="104">الهمزة-104</option>
														 <option value="105">الفيل-105</option>
														 <option value="106">قريش-106</option>
														 <option value="107">الماعون-107</option>
														 <option value="108">الكوثر-108</option>
														 <option value="109">الكافرون-109</option>
														 <option value="110">النصر-110</option>
														 <option value="111">المسد-111</option>
														 <option value="112">الإخلاص-112</option>
														 <option value="113">الفلق-113</option>
														 <option value="114">الناس-114</option>
													</select>
											</div> 									     
									</form> 			  	   
				               	  
            </div>
          </div>
        </div>
      </div>			
	   <div class="row">
			<div class="col-sm-12">
			  <div class="panel panel-default text-left">
				<div class="panel-body">
								
		                    
									
										  <table class="table table-hover" style="border: 1px solid black;">															
												<thead>
													  <tr>
															<th bgcolor="#6df999"style="text-align:center;"><b><u> نص الآية</u></b></th>										       												
															<th bgcolor="#ffcc88"style="text-align:center;"><b><u> الآية</u></b></th>
															<th bgcolor="#6699fd"style="text-align:center;"><b><u> السورة</u></b></th>
															
													  
															
													  </tr>
												</thead>																
																	 
											   <?php while ($retour3 = $rs4->fetch()): ?>
													<tr class="warning">
														<td><?php echo htmlspecialchars($retour3['TextSora']);?></td>
														<td style="color: #000; font-weight:bold;background-color: #ffcc88"><?php echo htmlspecialchars($retour3['NoAya']);?></td>							   
														<td style="color: #000; font-weight:bold;background-color: #6699fd"><?php echo htmlspecialchars($retour3['NomSora']);?>&nbsp;&nbsp;<?php echo htmlspecialchars($retour3['NoSora']);?></td>											
														
													</tr>	
																																																																			
											  <?php endwhile; ?>					
										 </table>   
						</div>
					  </div>
					</div>
				</div>
				<!-- ----------------------fin 2eme ROW 12------------------------>
				
				  <div class="row">
							<div class="col-sm-3">
								<div class="well">
									<p style=" color: #000;font-family: tahoma;font-size :12px;text-align:center;">صورة مركبة بواسطة</p>
									<p style=" color: #00f;font-family: Diwani Simple Striped;font-weight:bold;font-size :22px;text-align:center;">بريكة للتربية و الثقافة </p>
									<p style=" color: #0f0;font-family: Monotype Corsiva;font-weight:bold;font-size :20px;text-align:center;">Barika Education Culture </p>
<img src="imagesS/mozaique3.svg"  height="670" width="100" alt="Avatar">
<img src="imagesS/mozaique3.svg"  height="670" width="100" alt="Avatar">
<img src="imagesS/mozaique3.svg"  height="675" width="100" alt="Avatar">
								</div>
							</div>
							<div class="col-sm-9">
								   <div class="well">
								    <div style="background :#ff9;">
					  <h4><u>أقوال و أشعار عن الاخلاق</u></h4>
										<p style=" color: #000;font-family: tahoma;font-size :14px;text-align:right;"><u>قال الامام علي -كرم الله وجهه ورضي عنه</u></p>
										<p  style=" color: #000;font-size :14px;text-align:center;">صُنِ النَفسَ وَاِحمِلها عَلى ما يزيِنُها   *  تَعِش سالِما وَالقَولُ فيكَ جَميلُ</p>
										<p  style=" color: #000;font-size :14px;text-align:center;">وَلا تُرِينَّ الناسَ إِلّا تَجَمُّلا  *  نَبا بِكَ دَهرٌ أَو جَفاكَ خَليلُ</p>
										<p  style=" color: #000;font-size :14px;text-align:center;">وَإِن ضاقَ رِزقُ اليَومِ فَاِصبِر إِلى غَد  *  عَسى نَكَباتِ الدَهرِ عَنكَ تَزولُ</p>
										<p  style=" color: #000;font-size :14px;text-align:center;">يَعِزُّ غَنِيُّ النَفسِ إِن قَلَّ مالُهُ  *  ويَغنى غَنِيُّ المالِ وَهوَ ذَليلُ</p>
										<p  style=" color: #000;font-size :14px;text-align:center;">وَلا خَيرَ في وِدِّ اِمرِئٍ مُتَلَّون  *  إِذا الريحُ مالَت مالَ حَيثُ تَميلُ</p>
										<p  style=" color: #000;font-size :14px;text-align:center;">جَوادٌ إِذا اِستَغنَيتَ عَن أَخذِ مالِهِ  *  وَعِندَ اِحتِمالِ الفَقرِ عَنكَ بَخيلُ</p>
										<p  style=" color: #000;font-size :14px;text-align:center;">فَما أَكثَرَ الإِخوان حينَ تَعدّهُم   *  وَلَكِنَهُم في النائِباتِ قَليلُ</p>


										 
										<p style=" color: #000;font-size :14px;text-align:right;font-family: tahoma;"><u>قال أمير الشعراء أحمد شوقي</u></p>
										<p  style=" color: #000;font-size :14px;text-align:center;">وإنما الأمم الأخلاق ما بقيت  *  فإن هم ذهبت أخلاقهم ذهبوا</p>
										
										<p style=" color: #000;font-size :14px;text-align:right;font-family: tahoma;"><u>وقال أيضا </u></p>
										<p  style=" color: #000;font-size :14px;text-align:center;">وإذا أصيب القوم في أخلاقهم  *  فأقم عليهم مأتما وعويلا</p>
										
										<p style=" color: #000;font-size :14px;text-align:right;font-family: tahoma;"><u>وقال أيضا </u></p>
										<p  style=" color: #000;font-size :14px;text-align:center;">صلاح أمرك للأخلاق مرجعه  *  فقوّم النفس بالأخلاق تستقم</p>
										
										<p style=" color: #000;font-size :14px;text-align:right;font-family: tahoma;"><u>قال المتنبي </u></p>
										<p  style=" color: #000;font-size :14px;text-align:center;">وما الحسن في وجه الفتى شرفا له  *  إذا لم يكن في فعله والخلائق</p>
										
										<p style=" color: #000;font-size :14px;text-align:right;font-family: tahoma;"><u>قال معروف الرصافي</u></p>
										<p  style=" color: #000;font-size :14px;text-align:center;">هي الاخلاقُ تنبتُ كالنبات  *  إذا سقيت بماء المكرمات</p>
										<p  style=" color: #000;font-size :14px;text-align:center;">تقوم إذا تعهدها المُربي   *  على ساق الفضيلة مُثمِرات</p>
										<p  style=" color: #000;font-size :14px;text-align:center;">وتسمو للمكارم باتساق  *  كما اتسقت أنابيبُ القناة</p>
										<p  style=" color: #000;font-size :14px;text-align:center;">وتنعش من صميم المجد رُوحا  *  بأزهارٍ لها متضوعات</p>
										<p  style=" color: #000;font-size :14px;text-align:center;">ولم أر للخلائق من محلّ  *   يُهذِّبها كحِضن الأمهات</p>
										<p  style=" color: #000;font-size :14px;text-align:center;">فحضن الأم مدرسة تسامت  *   بتربية البنين أو البنات</p>
										<p  style=" color: #000;font-size :14px;text-align:center;">وأخلاقُ الوليد تقاس حسنا  *   بأخلاق النساءِ الوالدات</p>
										<p  style=" color: #000;font-size :14px;text-align:center;">وليس ربيب عالية  المزايا   *  كمثل ربيب سافلة الصفات</p>
										<p  style=" color: #000;font-size :14px;text-align:center;">وليس النبت ينبت في جنان  *  كمثل النبت ينبت في الفَلاة</p>
										
										<p style=" color: #000;font-size :14px;text-align:right;font-family: tahoma;"><u>قال محمود الأيوبي </u></p>
										<p  style=" color: #000;font-size :14px;text-align:center;">والمرء بالأخلاق يسمو ذكره  *  وبها يُفضل في الورى ويُوقر</p>
										
										<p style=" color: #000;font-size :14px;text-align:right;font-family: tahoma;"><u>قال أبو تمام </u></p>
										<p  style=" color: #000;font-size :14px;text-align:center;">فلم أجد الأخلاق إلا تخلقا  *  ولم أجد الأفضال إلا تفضلا</p>
										
										<p style=" color: #000;font-size :14px;text-align:right;font-family: tahoma;"><u>قال مسعود سماحة </u></p>
										<p  style=" color: #000;font-size :12px;text-align:center;">جمال الخلق أفضل من جمال  *  يغطي قبح خلق في مليح</p>
										<p  style=" color: #000;font-size :12px;text-align:center;">فكم من سوء خلق في جميل  *  وكم من حسن نفس في قبيح</p>
										
										<p style=" color: #000;font-size :14px;text-align:right;font-family: tahoma;"><u>قال شاعر النيل حافظ إبراهيم</u></p>
										<p  style=" color: #000;font-size :14px;text-align:center;">فَإِذا رُزِقتَ خَليقَةً مَحمودَةً  *  فَقَدِ اِصطَفاكَ مُقَسِّمُ الأَرزاقِ</p>
										<p  style=" color: #000;font-size :14px;text-align:center;">فَالناسُ هَذا حَظُّهُ مالٌ وَذا  *  عِلمٌ وَذاكَ مَكارِمُ الأَخلاقِ</p>
										<p  style=" color: #000;font-size :14px;text-align:center;">وَالمالُ إِن لَم تَدَّخِرهُ مُحَصَّنا  *  بِالعِلمِ كانَ نِهايَةَ الإِملاقِ</p>
										<p  style=" color: #000;font-size :14px;text-align:center;">وَالعِلمُ إِن لَم تَكتَنِفهُ شَمائِلٌ  *  تُعليهِ كانَ مَطِيَّةَ الإِخفاقِ</p>
										<p  style=" color: #000;font-size :14px;text-align:center;">لا تَحسَبَنَّ العِلمَ يَنفَعُ وَحدَهُ  *  ما لَم يُتَوَّج رَبُّهُ بِخَلاقِ</p>
										<p  style=" color: #000;font-size :14px;text-align:center;">كَم عالِمٍ مَدَّ العُلومَ حَبائِلاً  *  لِوَقيعَةٍ وَقَطيعَةٍ وَفِراقِ</p>
										<p  style=" color: #000;font-size :14px;text-align:center;">وَفَقيهِ قَومٍ ظَلَّ يَرصُدُ فِقهَهُ  *  لِمَكيدَةٍ أَو مُستَحَلِّ طَلاقِ</p>
										<p  style=" color: #000;font-size :14px;text-align:center;">يَمشي وَقَد نُصِبَت عَلَيهِ عِمامَةٌ  *  كَالبُرجِ لَكِن فَوقَ تَلِّ نِفاقِ</p>
										<p  style=" color: #000;font-size :14px;text-align:center;">يَدعونَهُ عِندَ الشِقاقِ وَما دَرَوا  *  أَنَّ الَّذي يَدعونَ خِدنُ شِقاقِ</p>
										<p  style=" color: #000;font-size :14px;text-align:center;">وَطَبيبِ قَومٍ قَد أَحَلَّ لِطِبِّهِ  *  ما لا تُحِلُّ شَريعَةُ الخَلّاقِ</p>
										<p  style=" color: #000;font-size :14px;text-align:center;">قَتَلَ الأَجِنَّةَ في البُطونِ وَتارَةً  *  جَمَعَ الدَوانِقَ مِن دَمٍ مُهراقِ</p>
										<p  style=" color: #000;font-size :14px;text-align:center;">وَأَديبِ قَومٍ تَستَحِقُّ يَمينُهُ  *  قَطعَ الأَنامِلِ أَو لَظى الإِحراقِ</p>
										<p  style=" color: #000;font-size :14px;text-align:center;">يَلهو وَيَلعَبُ بِالعُقولِ بَيانُهُ  *  فَكَأَنَّهُ في السِحرِ رُقيَةُ راقي</p>
										<p  style=" color: #000;font-size :14px;text-align:center;">في كَفِّهِ قَلَمٌ يَمُجُّ لُعابُهُ  *  سُمّاً وَيَنفِثُهُ عَلى الأَوراقِ</p>
										<p  style=" color: #000;font-size :14px;text-align:center;">لَو كانَ ذا خُلُقٍ لَأَسعَدَ قَومَهُ  *  بِبَيانِهِ وَيَراعِهِ السَبّاقِ</p>
										<p  style=" color: #000;font-size :14px;text-align:center;">مَن لي بِتَربِيَةِ النِساءِ فَإِنَّها  *  في الشَرقِ عِلَّةُ ذَلِكَ الإِخفاقِ</p>
										<p  style=" color: #000;font-size :14px;text-align:center;">الأُمُّ مَدرَسَةٌ إِذا أَعدَدتَها  *  أَعدَدتَ شَعباً طَيِّبَ الأَعراق</p>

										<p style=" color: #000;font-size :14px;text-align:right;font-family: tahoma;"><u>قال أبو الأسود الدؤلي </u></p>
										<p  style=" color: #000;font-size :14px;text-align:center;">لا تَنهَ عَن خُلُقٍ وَتَأتيَ مِثلَهُ   *  عارٌ عَلَيكَ إِذا فَعَلتَ عَظيمُ</p>
										<p  style=" color: #000;font-size :14px;text-align:center;">ابدأ بِنَفسِكَ وَانَها عَن غِيّها  *  فَإِذا انتَهَت عَنهُ فَأَنتَ حَكيمُ</p>
										<p  style=" color: #000;font-size :14px;text-align:center;">فَهُناكَ يُقبَل ما وَعَظتَ وَيُقتَدى  *   بِالعِلمِ مِنكَ وَيَنفَعُ التَعليمُ</p>

										<p style=" color: #000;font-size :14px;text-align:right;font-family: tahoma;"><u>قال صفي الدين الحلي </u></p>
										<p  style=" color: #000;font-size :14px;text-align:center;">إنّا لَقَوْمٌ أبَتْ أخلاقُنا شَرفا  *  أن نبتَدي بالأذى من ليسَ يوذينا</p>
										<p  style=" color: #000;font-size :14px;text-align:center;">بِيضٌ صَنائِعُنا ، سودٌ وقائِعُنا  *   خِضرٌ مَرابعُنا ، حُمرٌ مَواضِينا</p>

										<p style=" color: #000;font-size :14px;text-align:right;font-family: tahoma;"><u>قال السموأل </u></p>
										<p  style=" color: #000;font-size :14px;text-align:center;">إِذا المَرءُ لَم يُدنَس مِنَ اللُؤمِ عِرضُهُ   *  فَكُلُّ رِداءٍ يَرتَديهِ جَميلُ</p>
										<p  style=" color: #000;font-size :14px;text-align:center;">وَإِن هُوَ لَم يَحمِل عَلى النَفسِ ضَيمَها   *  فَلَيسَ إِلى حُسنِ الثَناءِ سَبيلُ</p>

										<p style=" color: #000;font-size :14px;text-align:right;font-family: tahoma;"><u>الإمام الشافعي </u></p>
										<p  style=" color: #000;font-size :14px;text-align:center;">الناس بالناس مادام الحياء بهم  *  والسعد لاشك تارات وهبات</p>
										<p  style=" color: #000;font-size :14px;text-align:center;">وأفضل الناس مابين الورى رجل  *  تقضى علي يده للناس حاجات</p>
										<p  style=" color: #000;font-size :14px;text-align:center;">لاتمنعن يد المعروف عن أحد  *  مادمت مقتدرا فالسعد تارات</p>
										<p  style=" color: #000;font-size :14px;text-align:center;">واشكر فضائل صنع الله إذ جعلت  *  إليك لا لك عند الناس حاجات</p>
										<p  style=" color: #000;font-size :14px;text-align:center;">قد مات قوم وما ماتت مكارمهم  *  وعاش قوم وهم في الناس أموات</p>

										<p style=" color: #000;font-size :14px;text-align:right;font-family: tahoma;"><u>وقال أيضا </u></p>
										<p  style=" color: #000;font-size :14px;text-align:center;">إذا رمتَ أن تحيا سليما منَ الرَّدى  *  وَدِيُنكَ مَوفُورٌ وَعِرْضُكَ صَيِّنُ</p>
										<p  style=" color: #000;font-size :14px;text-align:center;">فَلاَ يَنْطقنْ مِنْكَ اللسَانُ بِسوأة  *  فَكلُّكَ سَوءاتٌ وَلِلنَّاسِ أعْينُ</p>
										<p  style=" color: #000;font-size :14px;text-align:center;">وَعَاشِرْ بمَعْرُوفٍ ، وَسَامِحْ مَنِ اعتَدَى   *  ودافعُ ولكن بالتي هي أحسنُ</p>

										<p style=" color: #000;font-size :14px;text-align:right;font-family: tahoma;"><u>قالت عائشة التيمورية </u></p>
										<p  style=" color: #000;font-size :14px;text-align:center;">ما الحظ إلا امتلاك المرء عفته  *  وما السعادة إلا حسن أخلاق</p>

                    </div>
								   </div>
							 </div>
				  </div>
				  
				  <div class="row">

				    </div> 
					<!-- ---------------------probl----------------------->
		
	</div>		
	<!-- ----------------------fin grand col 7----------------------->
	
				<!-- ----------------------debut grand col 2------------------------>
				<div class="col-sm-2 well">
					   <div class="thumbnail">
							
							 <img src="imagesS/kaaba.jpg" alt="Paris" width="400" height="300">
							 <p><strong>الكعبة المشرفة</strong></p>
							 <p><u><strong>اللهم يسر لنا زيارتها آمين</strong></u></p>
							 <!--<button class="btn btn-primary">Info</button>--->
					   </div>      
					  <div class="well">
					                     <img src="imagesS/Allah.svg" class="img-circle" height="70" width="100" alt="Avatar">
										 <p style="text-align:right;background-color:#aaa;color:#000;font-size:12px; font-family: tahoma;">
											عن الشافعي قال طلب العلم أفضل من صلاة النافلة
										  </p>
										  
										  <p style="text-align:right;background-color:#aaa;color:#555;font-size:12px; font-family: tahoma;">
											 لا حسب كالتواضع ، و لا شرف كالعلم
										  </p>
										  <img src="imagesS/mosq.svg" class="img-circle" height="70" width="100" alt="Avatar">
										  <p style="text-align:right; background-color:#ccc;color:#000;font-size:12px; font-family: tahoma;">
											 ثلاثة أمور تزيد المرأة إجلالاً : الأدب ، والعلم ، والخلق الحسن

										  </p>
										  <p style="font-size:12px; font-family: tahoma; background-color:#ccc;color:#000;text-align:center;">
											 إن الدين ليس بديلاً من العلم والحضارة. ولا عدواً للعلم والحضارة. إنما هو إطار للعلم والحضارة، ومحور للعلم والحضارة، ومنهج للعلم والحضارة في حدود إطاره ومحوره الذي يحكم كل شئون الحياة
										  </p>										  
								    <img src="imagesS/icp9.svg" class="img-circle" height="70" width="100" alt="Avatar">
										  <p style="text-align:right;;font-size:12px; font-family: tahoma;background-color:#ccc;color:#333;">
											 لا تمنحني السمك وإنما علمني كيف أصطاد

										  </p>	
										  <p style="text-align:left;font-size:12px; font-family: tahoma;background-color:#888;color:#000;">
											     كل إناء يضيق بما جعل فيه إلا وعاء العلم فإنه يتسع

									      </p>
										  <p style="text-align:right;font-size:12px; font-family: tahoma;background-color:#ccc;color:#000;">
											 لا يزال المرء عالماَ ما دام في طلب العلم ، فإذا ظن أنه قد علم فقد بدأ جهله

										  </p>
										   <img src="imagesS/fs5.svg" class="img-circle" height="70" width="100" alt="Avatar">
										  <p style="text-align:right; background-color:#ccc;color:#000;font-size:12px; font-family: tahoma;">
											إذا رأيت العلماء على أبواب الملوك فقل بئس الملوك و بئس العلماء ، و إذا رأيت الملوك على أبواب العلماء فقل نعم الملوك و نعم العلماء

										  </p>
									
										  <p style="text-align:right;background-color:#ccc;color:#000;font-size:12px; font-family: tahoma; ">
											العلم هو التطور السامي للمعارف العامة
										  </p>
										  <p style="text-align:right;background-color:#ccc;color:#444;font-size:12px; font-family: tahoma; ">
											<br><br> نصف العلم أخطر من الجهل
											<br><br> رأسمالك علمك ، و عدوك جهلك
                                            <br><br>لا يمكن للمرء أن يحصل على المعرفة إلا بعد أن يتعلم كيف يفكر
										  </p>
										   <img src="imagesS/fs6.svg" class="img-circle" height="70" width="100" alt="Avatar">
										  <p style="text-align:right;color:#555;font-size:12px; font-family: tahoma;background-color:#ffaa00">
											 العلم هو الطريق للحياة السعيدة الفاضلة

										  </p>
										  <p style="text-align:right;font-size:12px; font-family: tahoma;background-color:#ccc;color:#000;">
											العلم هو المعرفة المنظمة والحكمة هي الحياة المنظمة 
										  </p>																				   

										  <p style="text-align:right;background-color:#ccc;color:#000;font-size:12px; font-family: tahoma;">
											 كلما ازدت علما أشعر أنني ازدت جهلاً، فالعالم كلما تعمق يشعر بالحقيقة العميقة للوجود وأن كل علومه ليست أكثر من نقطة في بحره
										  </p>
										  
										  <p style="text-align:right;font-size:12px; font-family: tahoma; font-weight:bold;background-color:#ccc;color:#000;">
											 ما ناقشني عالم إلا غلبته ، وما ناقشني جاهل إلا غلبني

										  </p>
										  <img src="imagesS/fs8.svg" class="img-circle" height="70" width="100" alt="Avatar">
										  <p style="text-align:right;font-size:12px; font-family: tahoma;background-color:#ccc;color:#777;">
                                         العلم يجعلنا نعبر عما في أنفسنا بطريقة سامية ويهذب نفوسنا وينير أعماقنا فنشفى من أمراضنا وهو طريق الهامنا 
										  </p>

										      <p style="text-align:right;font-size:12px;background-color:#ccc;color:#000; font-family: tahoma;">
											    من أراد الدنيا فعليه بالعلم، ومن أراد الأخرة فعليه بالعلم

									          </p>
						   				  <p style="text-align:right;font-size:12px; font-family: tahoma;background-color:#ccc;color:#000;">
											 سعادتنا تعتمد على ما في عقولنا من علم وعلى ما أنجزناه من أعمال لاعلى ما في جيوبنا من مال

										  </p>
										  <p style="text-align:right;font-size:12px; font-family: tahoma;background-color:#ccc;color:#000;">
                                            العلم يجعلنا نعبر عما في أنفسنا بطريقة سامية ويهذب نفوسنا وينير أعماقنا فنشفى من أمراضنا وهو طريق الهامنا 

										  </p>
						                  <img src="imagesS/fs9.svg" class="img-circle" height="70" width="100" alt="Avatar">
										  <p style="text-align:right;font-size:12px; font-family: tahoma; background-color:#999;color:#000;">
											 أطلبوا العلم من المهد إلى اللحد
										  </p>
										  <p style="text-align:right;font-size:12px; font-family: tahoma; background-color:#ccc;color:#000;">
											<br><br> حُسْنُ طلب الحاجة نصف العلم
											<br><br> ليس بعد الفرائض أفضل من طلب العلم
                                            <br><br> حُسْنُ طلب الحاجة نصف العلم
										  </p>
										  <p style="text-align:right;font-size:12px; font-family: tahoma; background-color:#ffaa00;color:#666;">
											إذا تم العقل نقص الكلام
										  </p>
										  <p style="text-align:right;font-size:12px; font-family:tahoma;  background-color:#ccc;color:#000;">
											  تعلموا العلم فإن تعلمه لله خشية، وطلبه عباده ،ومذاكرته تسبيح،والبحث عنه جهاد ،وتعليمه من لا يعلمه صدقة،وبذله لأهله قربة 

										  </p>

                                          										  
										  <p style="text-align:right;font-size:12px; font-family: tahoma; background-color:#ccc;color:#000;">
											 كلما ازدت علما أشعر أنني ازدت جهلاً، فالعالم كلما تعمق يشعر بالحقيقة العميقة للوجود وأن كل علومه ليست أكثر من نقطة في بحره
										  </p>
										  
										  <p style="text-align:right;font-size:12px; font-family: tahoma;background-color:#ccc;color:#000; ">
											 ما ناقشني عالم إلا غلبته ، وما ناقشني جاهل إلا غلبني

										  </p>
										  <p style="text-align:right;font-size:12px; font-family:tahoma;  background-color:#ccc;color:#000;">
                                                 العلم يجعلنا نعبر عما في أنفسنا بطريقة سامية ويهذب نفوسنا وينير أعماقنا فنشفى من أمراضنا وهو طريق الهامنا 	
									     </p>
										 
										  <img src="imagesS/fs10.svg" class="img-circle" height="55" width="55" alt="Avatar">
									      	<p style="text-align:right;font-size:12px; font-family: tahoma;background-color:#ccc;color:#000; ">

                                             العلم مروءة من لا مروءة له
                                          </p>
										    <p style="text-align:right;font-size:12px; font-family: tahoma;background-color:#555;color:#000; ">
											   من أراد الدنيا فعليه بالعلم، ومن أراد الأخرة فعليه بالعلم
									       </p>
										  <p style="text-align:right;font-size:12px; font-family: tahoma;background-color:#ccc;color:#000; ">
											 سعادتنا تعتمد على ما في عقولنا من علم وعلى ما أنجزناه من أعمال لاعلى ما في جيوبنا من مال
										  </p>
										  <p style="text-align:right;font-size:12px; font-family: tahoma;background-color:#777;color:#000; ">
                                              العلم يجعلنا نعبر عما في أنفسنا بطريقة سامية ويهذب نفوسنا وينير أعماقنا فنشفى من أمراضنا وهو طريق الهامنا 											 
										  </p>
									
										  <p style="text-align:right;color:#333;font-size:12px; font-family: tahoma;background-color:#ffaa00">
											 أطلبوا العلم من المهد إلى اللحد
										  </p>
										   <img src="imagesS/fs11.svg" class="img-circle" height="70" width="100" alt="Avatar">
										  <p style="text-align:right;color:#000;font-size:12px; font-family: tahoma;background-color:#888;color:#000;  ">
											<br><br> حُسْنُ طلب الحاجة نصف العلم
											<br><br> ليس بعد الفرائض أفضل من طلب العلم
                                            <br><br> حُسْنُ طلب الحاجة نصف العلم
										  </p>
										  <p style="text-align:right;font-size:12px; font-family: tahoma;background-color:#ccc;color:#000;  ">
											إذا تم العقل نقص الكلام
										  </p>
										  <img src="imagesS/f2.svg" class="img-circle" height="70" width="100" alt="Avatar">
										  <p style="text-align:right;font-size:12px; font-family: tahoma;background-color:#ccc;color:#000; ">
											  تعلموا العلم فإن تعلمه لله خشية، وطلبه عباده ،ومذاكرته تسبيح،والبحث عنه جهاد ،وتعليمه من لا يعلمه صدقة،وبذله لأهله قربة 

										  </p>
										                                         																			  
										  <p style="text-align:right;font-size:12px; font-family: tahoma;background-color:#ccc;color:#000;  ">
                                             العلم من دون ضمير هلاك للروح
										  </p>
										  
										  <p style="text-align:right;font-size:12px; font-family: tahoma;background-color:#ccc;color:#000; ">
											  سعيد من يعرف أسباب الأشياء
										  </p>
										  <img src="imagesS/f3.svg" class="img-circle" height="70" width="100" alt="Avatar">
										  <p style="text-align:right;font-size:12px; font-family: tahoma;background-color:#ccc;color:#000;  ">
                                             إن الإتجاه الذي يبدأ مع التعلم سوف يكون من شأنه أن يحدد حياه المرء في المستقبل  
										  </p>
								   
										      <p style="text-align:right;font-size:12px; font-family: tahoma;background-color:#ccc;color:#000;  ">
                                                  العلم لا وطن له، أما الفن فله وطن، وكل وطن له فن 
                                              </p>
										      <p style="text-align:right;font-size:12px; font-family: tahoma;background-color:#ffaa00;color:#000;  ">
                                                   ما من تقدم علمي كبير إلا وناتج عن جرأة جديدة للخيال 
									          </p>
										      <p style="text-align:right;font-size:12px; font-family: tahoma;background-color:#ccc;color:#000; ">
                                                  العلم تَوَصَّلَ لعلاج معظم الشرور، ولكنه فشل في علاج أسوأ هذه الشرور؛ ألا وهو اللامبالاة تجاه النفس البشرية
										      </p>
										      <p style="text-align:right;font-size:12px; font-family: tahoma;background-color:#ccc;color:#000; ">
                                                  الحقائق ليست علوم ولا المعجم نوع من الأدب! 
										      </p>

										      <p style="text-align:right;font-size:12px; font-family: tahoma;background-color:#ccc;color:#000;  ">
                                                  ليس اليتيم من مات والده ... إن اليتيم يتيم العلم والأدب 
										      </p>
											  <img src="imagesS/f4.svg" class="img-circle" height="70" width="100" alt="Avatar">
										      <p style="text-align:right;font-size:12px; font-family: tahoma;background-color:#ccc;color:#000;  ">
											  <br><br> حُسْنُ طلب الحاجة نصف العلم
											  <br><br> ليس بعد الفرائض أفضل من طلب العلم
                                              <br><br> العلم شيءٌ رائعٌ إذا لم تكن تعتاش منه
										  </p>
										  <p style="text-align:right;font-size:12px; font-family: tahoma;background-color:#888;color:#000; ">
                                             فقلْ لمنْ يدَّعِي في العلمِ فلسفةً ... حَفِظْتَ شَيئاً، وغابَتْ عنك أشياءُ
										  </p>


					  </div>
					  <div class="well">
						<p style="text-align:center;font-size:14px; font-family: tahoma;background-color:#333;color:#fff;  ">أدعية من القران والسنة</p>
							<p style="text-align:right;font-size:12px; font-family: tahoma;background-color:#ccc;color:#000;  ">
								
							 </p>
				             <p style="text-align:right;font-size:12px; font-family: tahoma;background-color:#ccc;color:#000;  ">
								َا إِلَهَ إِلا أَنْتَ سُبْحَانَكَ إِنِّي كُنْتُ مِنَ الظَّالِمِينَ

							 </p>
							 <p style="text-align:right;font-size:12px; font-family: tahoma;background-color:#ccc;color:#000;  ">
								رَبَّنَا ظَلَمْنَا أَنْفُسَنَا وَإِنْ لَمْ تَغْفِرْ لَنَا وَتَرْحَمْنَا لَنَكُونَنَّ مِنَ الْخَاسِرِينَ 

							 </p>
				             <p style="text-align:right;font-size:12px; font-family: tahoma;background-color:#ccc;color:#000;  ">
								رَبَّنَا عَلَيْكَ تَوَكَّلْنَا وَإِلَيْكَ أَنَبْنَا وَإِلَيْكَ الْمَصِيرُ

							 </p>
							 <p style="text-align:right;font-size:12px; font-family: tahoma;background-color:#ccc;color:#000;  ">
								َبَّنَا لَا تَجْعَلْنَا فِتْنَةً لِلَّذِينَ كَفَرُوا وَاغْفِرْ لَنَا رَبَّنَا إِنَّكَ أَنْتَ الْعَزِيزُ الْحَكِيمُ

							 </p>
				             <p style="text-align:right;font-size:12px; font-family: tahoma;background-color:#ccc;color:#000;  ">
								رَبَّنَا آمَنَّا بِمَا أَنْزَلْتَ وَاتَّبَعْنَا الرَّسُولَ فَاكْتُبْنَا مَعَ الشَّاهِدِينَ

							 </p>
							 <p style="text-align:right;font-size:12px; font-family: tahoma;background-color:#ccc;color:#000;  ">
								رَبَّنَا لَا تَجْعَلْنَا فِتْنَةً لِلْقَوْمِ الظَّالِمِينَ * وَنَجِّنَا بِرَحْمَتِكَ مِنَ الْقَوْمِ الْكَافِرِينَ

							 </p>
				             <p style="text-align:right;font-size:12px; font-family: tahoma;background-color:#ccc;color:#000;  ">
								رَبَّنَا اصْرِفْ عَنَّا عَذَابَ جَهَنَّمَ إِنَّ عَذَابَهَا كَانَ غَرَامًا * إِنَّهَا سَاءَتْ مُسْتَقَرًّا وَمُقَامًا

							 </p>
							 <p style="text-align:right;font-size:12px; font-family: tahoma;background-color:#ffaa00;color:#000;  ">
								رَبَّنَا اغْفِرْ لَنَا وَلِإِخْوَانِنَا الَّذِينَ سَبَقُونَا بِالْإِيمَانِ وَلَا تَجْعَلْ فِي قُلُوبِنَا غِلًّا لِلَّذِينَ آمَنُوا رَبَّنَا إِنَّكَ رَءُوفٌ رَحِيمٌ

							 </p>
				             <p style="text-align:right;font-size:12px; font-family: tahoma;background-color:#ccc;color:#000;  ">
								رَبَّنَا آتِنَا فِي الدُّنْيَا حَسَنَةً وَفِي الْآخِرَةِ حَسَنَةً وَقِنَا عَذَابَ النَّارِ

							 </p>
							 <p style="text-align:right;font-size:12px; font-family: tahoma;background-color:#ccc;color:#000;  ">
								رَبَّنَا مَا خَلَقْتَ هَذَا بَاطِلًا سُبْحَانَكَ فَقِنَا عَذَابَ النَّارِ * رَبَّنَا إِنَّكَ مَنْ تُدْخِلِ النَّارَ فَقَدْ أَخْزَيْتَهُ وَمَا لِلظَّالِمِينَ مِنْ أَنْصَارٍ * رَبَّنَا إِنَّنَا سَمِعْنَا مُنَادِيًا يُنَادِي لِلْإِيمَانِ أَنْ آمِنُوا بِرَبِّكُمْ فَآمَنَّا رَبَّنَا فَاغْفِرْ لَنَا ذُنُوبَنَا وَكَفِّرْ عَنَّا سَيِّئَاتِنَا وَتَوَفَّنَا مَعَ الْأَبْرَارِ * رَبَّنَا وَآتِنَا مَا وَعَدْتَنَا عَلَى رُسُلِكَ وَلَا تُخْزِنَا يَوْمَ الْقِيَامَةِ إِنَّكَ لَا تُخْلِفُ الْمِيعَادَ

							 </p>
										   <p style="text-align:right;font-size:10px; font-family: background-color:#ccc;color:#000; ">
                                            -الاقوال و الادعية من -</br>  mawdoo3.com 
										  </p>
					  </div>
				</div>
				<!-- ----------------------fin grand col 2------------------------>
			<div class="footer1">| Design by |Barika Culture Education|</br><span>le Webmaster:-(( chayb.ta3na@gmail.com ))-:صاحب الموقع</span></div>

  </div>

</div>
              <!--<div style="text-align: left;position: fixed;z-index:9999999;bottom: 10px;"><a href="#banne3">القمة</a></div>
				 <a class="scroll-to-top" href="#"  >
					  <i class="fa fa-chevron-up" aria-hidden="true"></i>
				 قمة</a> -->
</body>
</html>
