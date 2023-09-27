<?php
	define( "CONV_KMH_ND" , 1.852 ) ;
	
	echo "Saisir la vitesse en km/h : " ;
	
	$vitesseKm = fgets( STDIN ) ;
	
	$vitesseNoeuds = $vitesseKm / CONV_KMH_ND ;
	
	echo "Résultat de la conversion : " , $vitesseNoeuds , " noeuds \n" ;
?>
