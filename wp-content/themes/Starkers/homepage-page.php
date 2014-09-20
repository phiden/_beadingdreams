<?php
/**
 * Template Name: Homepage
 *
 * BeadingDreams' homepage layout
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */

get_header(); ?>

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


<?php get_footer(); ?>