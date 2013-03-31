<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file 
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header','parts/shared/sidebar' ) ); ?>

<?php if ( have_posts() ): ?>

<ol>	
<?php while ( have_posts() ) : the_post(); ?>

	<li class="post" >
		<article class='loop-post' >
			<h2 class="title-post"><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			<div class="infoPost <?php the_ID(); ?>">
				 <?php 
   					echo get_avatar( get_the_author_meta('user_email'), 70); 
   				 ?>
				<p class='auto' >
				<span> <?php echo get_the_author_meta('nickname'); ?> </span>
				</p> 
				
				<p class='dateInfo'>

					<span class='dDate'><?php echo get_the_date('d'); ?></span> 
					<span class='myDate'><?php echo get_the_date('M / Y'); ?></span>
				</p>

			</div>
			<div class="imgThum">	
				<?php 
					if ( has_post_thumbnail() ) {
						the_post_thumbnail();
					} 
				
				 ?>
			</div>	
			<div class="content-post ">
					<?php the_content(''); ?>
			</div>
			<!-- <div class="commentNum ">
				<?php //comments_popup_link('++ Comentar', '1 Comentario', '% Comments'); ?>
			</div>	 -->

			<div class="control-button"> 
				<p class='siguele' id='<?php the_ID(); ?>'>Seguir Leyendo... </p> 
				<p>++ Comentar</p> 
				<p>Git Fork</p>
				<a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo get_permalink(); ?>" data-lang="es">Twittear</a>
				<div class="fb-like" data-href="<?php echo get_permalink(); ?>" data-send="true" data-layout="button_count" data-width="450" data-show-faces="false" data-font="arial" data-action="like"></div>
			 </div>

		</article>
	</li>
<?php endwhile; ?>
</ol>
<?php else: ?>
<h2>No posts to display</h2>
<?php endif; ?>

</div> <!-- end .pagecontent -->

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>