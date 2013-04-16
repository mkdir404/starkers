<div class='sidebar'>
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
	
</div>