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
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header','parts/shared/sidebar' ) ); ?>

<?php if ( have_posts() ): ?>


	<h2 class='titleCategory'> <span>Ultimas Noticas:</span> <?php echo single_cat_title( '', false ); ?></h2>
<ol>	
<?php while ( have_posts() ) : the_post(); ?>

	<li class="post" >
		<article class='loop-post' >
			<h2 class="title-post"><a  href="<?php echo get_permalink(); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
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
			
			<?php if ( has_post_thumbnail() ): ?>
			<div class="imgThum">	
				<?php the_post_thumbnail();?>
			</div>
			<?php endif; ?>

			<div class="content-post ">
					<?php the_content(''); ?>
			</div>
			
			<div class="control-button"> 
				<p> <a href="<?php echo get_permalink(); ?>"> Seguir Leyendo... </a></p> 
				<p><?php comments_popup_link('++ Comentar', '1 Comentario', '% Comments'); ?></p> 	
				<?php socialNetwork( get_permalink() ) ?>
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