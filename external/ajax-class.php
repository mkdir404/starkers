<?php 
	
	$db_connect = mysql_connect('localhost:8889','root','root')
		or die ("Fallo en el establecimiento de la conexión");

	$db_select = mysql_select_db('otroBlog')
		or die("Error en la selección de la base de datos");

// include '/Applications/MAMP/htdocs/wordpress/wp-includes/wp-db.php';

// $db = new wpdb('root','root','otroBlog','localhost:8889');

/**
* 
*/
class Ajax_Class 
{
	
	// function __construct(argument)
	// {
	// 	# code...
	// }

	public function getSome()
	{
		$x = mysql_query('select * from wp_posts where id=89');
		$result['post_title'] =  mysql_result($x,0,'post_title');
		$result['post_content'] =  mysql_result($x,0,'post_content'); 
		return $result;
	}
}



 ?>