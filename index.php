<?php


// названия переменных не сокращай. Кроме того, у тебя r слева
function balance( $r, $l ) {
// начало лабуды
	$patterns        = array();
	$patterns[0]     = '!';
	$patterns[1]     = '?';
	$replacements    = array();
	$replacements[1] = '2';
	$replacements[0] = '3';
	$substitutionr   = str_replace( $patterns, $replacements, $r );
	$substitutionl   = str_replace( $patterns, $replacements, $l );

	
	
//конец лабуды. Это не нужно. Ты делаешь одну работу несколько раз. Нужен один проход по строке с подсчётом веса.
	
	
	
	$countr = array_sum( str_split( $substitutionr ) );
	$countl = array_sum( str_split( $substitutionl ) );

	return $balance = ( $countr === $countl ) ? 'Balance' : ( ( $countr > $countl ) ? 'Left' : 'Right' );

}


?>
