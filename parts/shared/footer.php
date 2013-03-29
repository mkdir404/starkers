	
	<footer>
	
 

<?php 
		$pages =  get_pages();

		 // print_r($pages);
		foreach ($pages as $page) {
					 $page->ID;
				}		
	
 ?>
		<?php //echo date("Y"); ?> <?php // bloginfo( 'name' ); ?>
	</footer>
