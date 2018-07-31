<?php

function balance( $r, $l ) {

	$patterns        = array();
	$patterns[0]     = '!';
	$patterns[1]     = '?';
	$replacements    = array();
	$replacements[1] = '2';
	$replacements[0] = '3';
	$substitutionr   = str_replace( $patterns, $replacements, $r );
	$substitutionl   = str_replace( $patterns, $replacements, $l );

	$countr = array_sum( str_split( $substitutionr ) );
	$countl = array_sum( str_split( $substitutionl ) );

	return $balance = ( $countr === $countl ) ? 'Balance' : ( ( $countr > $countl ) ? 'Left' : 'Right' );

}


?>