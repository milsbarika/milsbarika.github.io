<?php  
    $fichierSource = 'prairie.jpg';     
    $largeurDestination = 350; 
    $hauteurDestination = 80;
    $im = ImageCreateTrueColor ($largeurDestination, $hauteurDestination)  
            or die ("Erreur lors de la création de l'image");  

    $source = ImageCreateFromJpeg($fichierSource); 
     
    $largeurSource = imagesx($source); 
    $hauteurSource = imagesy($source);
	 $blanc = ImageColorAllocate ($im, 255, 255, 255); 
	/*$noir = ImageColorAllocate ($im, 0, 0, 0); 
    $gris[0] = ImageColorAllocate ($im, 0, 0, 0);  
    $gris[1] = ImageColorAllocate ($im, 255, 0, 0);         
    $gris[2] = ImageColorAllocate ($im, 255, 0, 0);  
    $gris[3] = ImageColorAllocate ($im, 255, 0, 0);  
    $gris[4] = ImageColorAllocate ($im, 0, 255, 0);  
    $gris[5] = ImageColorAllocate ($im, 0, 255, 0);  
    $gris[6] = ImageColorAllocate ($im, 255, 0, 0);  
    $gris[7] = ImageColorAllocate ($im, 255, 0, 0);  
    $gris[8] = ImageColorAllocate ($im, 255, 0, 0);
	$gris[9] = ImageColorAllocate ($im, 0, 0, 0);
    for ($i=0; $i<=9; $i++) { 
        ImageFilledRectangle ($im, $i, $i, $largeurDestination-$i, $hauteurDestination-$i, $gris[$i]);     
    }  */
	
    ImageCopyResampled($im, $source, 0, 0, 0, 0, $largeurDestination, $hauteurDestination, $largeurSource, $hauteurSource);      	
    ImageString($im, 0, 5, $hauteurDestination-10, "M2M-Barika", $blanc);
	
	// Sauvegarde de l'image GD
    // Le format de fichier pour les images GD est .gd, voir http://www.libgd.org/GdFileFormats
    /* imagegd($im, 'simple.gd'); */
   
   $miniature = "CH2-$fichierSource"; 
    ImageJpeg ($im, $miniature);  
    echo "Image miniature générée: $miniature";     
?>