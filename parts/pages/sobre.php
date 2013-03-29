<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div class="page-tmpl">

<h2><?php the_title(); ?></h2>
<?php the_content(); ?>

</div>

<div class="page-tmpl">
	<h2>Team Dev</h2>
</div>

<?php endwhile; ?>
