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
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<?php get_sidebar(); ?>

<div id="main_content_narrow">


	<?php wp_reset_query(); ?>
	
	<!-- CLASS SCHEDULE -->
	<?php if(is_page('class-schedule')): ?>
	
		<a href="http://beadingdreams.com/class-policies">View our class policies.</a>
		Check out our class schedule below to view upcoming classes &amp; reserve your spot.</br>
	
		<?php echo do_shortcode('[events_calendar full=1]') ?>
	
		</br>
		
	
	<?php else: ?>
	
		<?php while ( have_posts() ) : the_post(); ?>
		
			<?php the_content() ?>
		<?php endwhile; // end of the loop. ?>
		
	<?php endif; ?>

</div><!-- end main_content-->

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>