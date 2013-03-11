<?php
/**
 * The template for displaying Category Archive pages
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<?php get_template_part('parts/shared/sidebar') ?>

<?php if ( have_posts() ): ?>


	<h2 class='titleCategory'> <span>Ultimas Noticas:</span> <?php echo single_cat_title( '', false ); ?></h2>

<ol>	
<?php while ( have_posts() ) : the_post(); ?>

	<li class="post" id="<?php the_ID(); ?>">
		<article class='efecto2'>
			<h2 class="title-post"><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			<div class="infoPost">
				 <?php 
   					echo get_avatar( get_the_author_meta('user_email'), 65); 
   				 ?>
				<p class='auto'>Autor de la nota : <span> <?php echo get_the_author_meta('nickname'); ?> </span></p> 
				<p class='dateInfo'> Fecha  : <span><?php echo get_the_date('d - M - Y'); ?></span></p>
			</div>
			<div class="imgThum">	
				<?php 
					if ( has_post_thumbnail() ) {
						the_post_thumbnail();
					} 
				
				 ?>
			</div>	
			<div class="content-post">
					<?php the_content("<div class='readmore'><span>Seguir Leyendo : </span> " . the_title('', '', false).' </div>' ); ?>
			</div>
			<div class="commentNum">
				<?php comments_popup_link('++ Comentar', '1 Comentario', '% Comments'); ?>
			</div>	
		</article>
	</li>
<?php endwhile; ?>
</ol>
<?php else: ?>
<h2>Categoria sin contenido</h2>
<?php endif; ?>

</div> <!-- end .pagecontent -->



<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>