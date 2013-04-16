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

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header','parts/shared/sidebar' ) ); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	<article >
			<h2 class="title-post"><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
				
			<?php if ( has_post_thumbnail() ): ?>
				<div class="imgThum">	
					<?php the_post_thumbnail();?>
				</div>
			<?php endif; ?>

			<div class="content-post ">
					<?php the_content(); ?>
			</div>


			<div class="control-button"> 
				<span style='font-size:10;color:#ddd;font-style:italic;'>Categorias:</span><?php foreach((get_the_category()) as $category) { echo ' <p><a href="'.get_category_link($category->term_id ).'">'.$category->cat_name.'</a></p>' ; } ?> 
				<?php socialNetwork( get_permalink() ) ?>
			</div>
			
		</article>	

			<?php if ( get_the_author_meta( 'description' ) ) : ?>

				<div class="autoinfo">
					<?php echo get_avatar( get_the_author_meta( 'user_email' ) ); ?>
					<h3>Acerca del Autor <span> <?php echo get_the_author() ; ?> </span> </h3>
					<div class="descrip">
						<?php the_author_meta( 'description' ); ?>
					</div>

				</div>

			<?php endif; ?>

	<?php comments_template( '', true ); ?>

<?php endwhile; ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>


</div> <!-- end .pagecontent -->