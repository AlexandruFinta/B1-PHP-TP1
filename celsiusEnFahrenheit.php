<?php
	define( "CONV_C_F" , 1.8 ) ;
	
	echo "Saisir la température en °C : \n" ;
	
	$C = fgets( STDIN ) ;
	
	$F = CONV_C_F * $C + 32  ;
	
	echo "Température en °F : " , $F , "\n" ;
?>
