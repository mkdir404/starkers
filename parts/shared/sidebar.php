<div class='sidebar'>
	
	<div id="contenido_pestanas">
    <ul>
        <li><a href="#opcion1" title="Opción 1">+ Comentados</a></li>
        <li><a href="#opcion2" title="Opción 2">+ Recientes</a></li>
    </ul>
 

     <?php 
        
        $queryComment = $wpdb->get_results('SELECT post_title , guid 
                                            FROM wp_posts WHERE post_type = "post" 
                                            AND post_status = "publish"  
                                            ORDER BY  comment_count DESC limit 10'
                                           );
        $i=1;                                    
     ?> 


    <div id="opcion1" >
        <ul>
            <?php 
                foreach ($queryComment as  $value) {
                 echo '<li><span>'.$i.'</span><a href ="'.$value->guid.'" >'.$value->post_title.'</a></li>';
                 $i+=1;   
                }
            ?>
        </ul>
    </div>

    <div id="opcion2"  >
        <ul>
        	<li>WhatsApp tambien pondra cuota en iOS</li>
        	<li>WhatsApp tambien pondra cuota en iOS</li>
        	<li>WhatsApp tambien pondra cuota en iOS</li>
        	<li>WhatsApp tambien pondra cuota en iOS</li>
        	<li>WhatsApp tambien pondra cuota en iOS</li>
        </ul>
    </div>
   
	</div><!-- Fin contenido_pestanas-->
	
</div>