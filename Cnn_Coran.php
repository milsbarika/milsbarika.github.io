<?php
// Connexion à la base de données

/*    $hote ="localhost";         
	$dbname="id4221952_coran";
	$dbuser="id4221952_chayb";
	$dbpass="baladiya"; */
    $hote ="localhost";         
	$dbname="coran";
	$dbuser="root";
	$dbpass="";
 
try{
		$dsn="mysql:host=$hote;dbname=$dbname";

		$bdd = new PDO($dsn, $dbuser, $dbpass,array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES UTF8',
				                 PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING ));

	}   catch(Exception $smg)
		{
		die('Erreur : '.$smg->getMessage());
		}

	?>


