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

         $queryCurrent = $wpdb->get_results('SELECT post_title , guid 
                                            FROM wp_posts WHERE post_type = "post" 
                                            AND post_status = "publish"  
                                            ORDER BY  post_date DESC limit 10'
                                           );
        $i=1;
        $x=1;                                    
     ?> 


    <div id="opcion1" >
        <ul>
            <?php 
                if(count($queryComment) > 0){

                foreach ($queryComment as  $value) {
                 echo '<li><span>'.$i.'</span><a href ="'.$value->guid.'" >'.$value->post_title.'</a></li>';
                 $i+=1;   
                }

                }else{
                    echo '<li>No Contiene Post`s </li>';
                }
            ?>
        </ul>
    </div>

    <div id="opcion2"  >
        <ul>
            <?php 
               if(count($queryCurrent) > 0){

                foreach ($queryCurrent as  $value) {
                 echo '<li><span>'.$x.'</span><a href ="'.$value->guid.'" >'.$value->post_title.'</a></li>';
                 $x+=1;   
                }

                }else{
                    echo '<li>No Contiene Post`s </li>';
                }
            ?>
        </ul>
    </div>
   
	</div><!-- Fin contenido_pestanas-->

    <div class="advertise"></div>
	
</div>