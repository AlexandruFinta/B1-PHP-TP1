<?php
	define( "PRIX" , 17 ) ;
	
	echo " - Calcule du tarif pour les groupes - \n" ;
	echo " \n " ;
	echo "Saisir le nombre d'adultes faisant partie du groupe : " ;
	
	$NB_A = fgets( STDIN ) ;
	$Q = $NB_A / 7 ;
	$q_entier = intval($Q) ;
	$R = 7 / $q_entier ;
	$r_entier = intval ($R) ;
	$TOTAL = ($q_entier * 7)* 15 + $r_entier * 18 ;
	
	echo " Le Total est de : " , $TOTAL , "€ \n" ;
?>
