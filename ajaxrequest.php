<?php 	require_once( 'external/ajax-class.php' ); ?>

<?php 
	
	$strClass = new Ajax_Class();
	$x = $strClass->getSome();
	echo json_encode( array_map(utf8_encode,$x) );

 ?>