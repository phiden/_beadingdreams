<?php
/**
 * Template name: welcome
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

<div id="main_content">

<div id="home_banner">

	<?php query_posts('cat=22&posts_per_page=1') ?>
	<?php while ( have_posts() ) : the_post(); ?>
	
	<h1><?php the_title() ?></h1>
	<?php the_content() ?>

	<?php endwhile; ?>

</div>

<?php wp_reset_query(); ?>

<div id="home_featured_class">

	<?php query_posts('cat=11&posts_per_page=1') ?>
	<?php while ( have_posts() ) : the_post(); ?>
	<h1><?php the_title() ?></h1>
	<?php the_content() ?>

	<?php endwhile; ?>

</div>

<?php wp_reset_query(); ?>

<div class="home_columns">

<ul id="home_announcements">

	<?php query_posts('cat=7&posts_per_page=3') ?>
	<?php while ( have_posts() ) : the_post(); ?>

	<li>
	<h1><?php the_title() ?></h1>
	<?php the_content() ?>
	</li>

	<?php endwhile; ?>
	
</ul>
<?php wp_reset_query(); ?>

</div>

<div class="home_columns">

<ul id="home_classes">

	<?php query_posts('cat=9&posts_per_page=3') ?>
	<?php while ( have_posts() ) : the_post(); ?>

	<li>
	<h1><?php the_title() ?></h1>
	<?php the_content() ?>
	</li>

	<?php endwhile; ?>
	
</ul>
<?php wp_reset_query(); ?>

</div>
</div><!-- end main_content-->

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
