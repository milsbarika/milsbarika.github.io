<?php  
    $fichierSource = 'barika22.jpg';     
    $largeurDestination = 300; 
    $hauteurDestination = 407;
    $im = ImageCreateTrueColor ($largeurDestination, $hauteurDestination)  
            or die ("Erreur lors de la création de l'image");  

    $source = ImageCreateFromJpeg($fichierSource); 
     
    $largeurSource = imagesx($source); 
    $hauteurSource = imagesy($source);
	$blanc = ImageColorAllocate ($im, 255, 255, 255); 
	$noir = ImageColorAllocate ($im, 0, 0, 0); 
    $gris[0] = ImageColorAllocate ($im, 90, 90, 90);  
    $gris[1] = ImageColorAllocate ($im, 110, 110, 110);         
    $gris[2] = ImageColorAllocate ($im, 130, 130, 130);  
    $gris[3] = ImageColorAllocate ($im, 150, 150, 150);  
    $gris[4] = ImageColorAllocate ($im, 170, 170, 170);  
    $gris[5] = ImageColorAllocate ($im, 190, 190, 190);  
    $gris[6] = ImageColorAllocate ($im, 210, 210, 210);  
    $gris[7] = ImageColorAllocate ($im, 230, 230, 230);  
    $gris[8] = ImageColorAllocate ($im, 240, 240, 240);
	$gris[9] = ImageColorAllocate ($im, 255, 255, 255);
    for ($i=0; $i<=9; $i++) { 
        ImageFilledRectangle ($im, $i, $i, $largeurDestination-$i, $hauteurDestination-$i, $gris[$i]);     
    } 
	
    ImageCopyResampled($im, $source, 8, 8, 0, 0, $largeurDestination-(2*8), $hauteurDestination-(2*8), $largeurSource, $hauteurSource);      	
    ImageString($im, 0, 12, $hauteurDestination-18, "http://wbarika.000webhostapp.com", $blanc);

   
   $miniature = "B.E.C_$fichierSource"; 
    ImageJpeg ($im, $miniature);  
    echo "Image miniature générée: $miniature";     
?>