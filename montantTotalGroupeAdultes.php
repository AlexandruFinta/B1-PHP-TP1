<?php
	define( "PRIX" , 17 ) ;
	
	echo "Saisir le nombre d'adultes faisant partie du groupe : \n" ;
	
	$NB_A = fgets( STDIN ) ;
	
	$TOTAL = PRIX * $NB_A ;
	
	echo " Le Total est de : " , $TOTAL , "€ \n" ;
?>
