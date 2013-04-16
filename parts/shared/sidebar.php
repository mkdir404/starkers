<div class='sidebar'>

<!-- <div class="fb-facepile" data-href="http://shotcode.net" data-max-rows="3" data-width="300"></div>
 -->


    <ul id="sidebar">
<?php //if ( !dynamic_sidebar('Sidebar One') ) : ?>

<?php //    endif; ?>

</ul>
	<div id="contenido_pestanas">
    <ul>
        <li><a href="#opcion1" title="Opción 1">+ Comentados</a></li>
        <li><a href="#opcion2" title="Opción 2">+ Recientes</a></li>
    </ul>
 
    <div id="opcion1">
        <ul>
             <?php descQuery('comment_count'); ?>
        </ul>
    </div>

    <div id="opcion2">
        <ul>
             <?php descQuery('post_date'); ?>
        </ul>
    </div>
   
	</div><!-- Fin contenido_pestanas-->


<!--     <div class="fb-like-box" data-href="https://www.facebook.com/shotcodemx" data-width="300" data-show-faces="true" data-stream="true" data-header="false"></div>
    <a class="twitter-timeline" data-dnt="true" href="https://twitter.com/rikval" data-widget-id="323951428794191873">Tweets by @rikval</a> -->
    
    <div class="advertise"></div>


     <!-- 
        <div class="radomPost"> 
            
            <h3>Random Posts</h3>   

            <ul>    
        
            <?php
            
                $args = array( 'numberposts' => 5, 'orderby' => 'rand' );
                $rand_posts = get_posts( $args );
            
                foreach( $rand_posts as $post ) : ?>
                    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>  
                <?php endforeach; ?>    

            </ul>
            
        </div>   -->    
	
</div>