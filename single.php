<?php
/**
 * The Template for displaying all single posts
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>



	<!-- <h2><?php the_title(); ?></h2>
	<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time> <?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?>
	<?php the_content(); ?>	 -->	

	<article >
			<h2 class="title-post"><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			<div class="infoPost">
				 <?php 
   					//echo get_avatar( get_the_author_meta('user_email'), 65); 
   				 ?>
				<!-- <p class='auto'>Autor de la nota : <span> <?php echo get_the_author_meta('nickname'); ?> </span></p> 
				<p class='dateInfo'> Fecha  : <span><?php echo get_the_date('d - M - Y'); ?></span></p> -->
			</div>
			<div class="imgThum">	
				<?php 
					if ( has_post_thumbnail() ) {
						the_post_thumbnail();
					} 
				
				 ?>
			</div>	
			<div class="content-post ">
					<?php the_content(); ?>
			</div>
			
		</article>	

	<?php if ( get_the_author_meta( 'description' ) ) : ?>
	<?php echo get_avatar( get_the_author_meta( 'user_email' ) ); ?>
	<h3>About <?php echo get_the_author() ; ?></h3>
	<?php the_author_meta( 'description' ); ?>
	<?php endif; ?>

	<?php //comments_template( '', true ); ?>

<?php endwhile; ?>


</div> <!-- end .pagecontent -->


<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>