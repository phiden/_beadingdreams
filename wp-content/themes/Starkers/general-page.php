

<?php
/**
 * Template Name: General
 *
 * BeadingDreams' class layout
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */?>
 

<?php get_header(); ?>
<?php get_sidebar(); ?>


<div id="main_content_narrow">


<?php
wp_reset_query();
?>

<?php if (is_page('parties')): ?>

	<?php query_posts('cat=12&posts_per_page=1') ?>
	
	<?php while ( have_posts() ) : the_post(); ?>
	
		<?php the_content() ?>

	<?php endwhile; ?>
	
<?php elseif(is_page('class-schedule')): ?>

Check out our class schedule below to view upcoming classes &amp; reserve your spot.</br>

<?php echo do_shortcode('[events_calendar full=1]') ?>

</br>
<a href="http://beadingdreams.com/class-policies">View our class policies.</a>

<?php elseif (is_page(35, 'about-us')): ?>

<?php is_page(35, 'about-us') ?>

	<?php query_posts('cat=3&posts_per_page=1') ?>
	
	<?php while ( have_posts() ) : the_post(); ?>
	
		<?php the_content() ?>

	<?php endwhile; ?>
	
<?php elseif (is_page('class-policies')): ?>

	<?php query_posts('cat=24&posts_per_page=1') ?>
	
	<?php while ( have_posts() ) : the_post(); ?>
	
		<h1><?php the_title() ?></h1>
		<?php the_content() ?>

	<?php endwhile; ?>
	
<?php elseif (is_page('custom-jewelry')): ?>

	<?php query_posts('cat=26&posts_per_page=1')  ?>
	
	<?php while ( have_posts() ) : the_post(); ?>
	
		<h1><?php the_title() ?></h1>
		<?php the_content() ?>
	
	<?php endwhile; ?>
	
	<?php query_posts('cat=27') ?>
	
	<?php while ( have_posts() ) : the_post(); ?>
	
		<h1><?php the_title() ?> </h1>
		<?php the_content() ?>
		
	<?php endwhile ?>

<?php endif; ?>

</div><!-- end main_content-->


<?php get_footer(); ?>