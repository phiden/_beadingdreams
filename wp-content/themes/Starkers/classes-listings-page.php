

<?php
/**
 * Template Name: Classes -- Listed
 *
 * BeadingDreams' class layout
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */
 
 get_header(); ?>

<div id="main_content">

<!--inside classes page-->

<?php get_sidebar('classes'); ?>

<?php wp_reset_query(); ?>

query has been reset 

<?php if (is_page('100-level')): ?>

	<div id="">
	
		<?php query_posts('cat=3') ?>
		<?php while ( have_posts() ) : the_post(); ?>
	
		<h1><?php the_title() ?></h1>
		<?php the_content() ?>

		<?php endwhile; ?>
	
	</div>
	
<?php elseif (is_page('200-level') ): ?>

	<div id="">
	
		<?php query_posts('cat=4') ?>
		<?php while ( have_posts() ) : the_post(); ?>
	
		<h1><?php the_title() ?></h1>
		<?php the_content() ?>

		<?php endwhile; ?>
	
	</div>
	
<?php elseif (is_page('300-level') ): ?>

	<div id="">
	
		<?php query_posts('cat=5') ?>
		<?php while ( have_posts() ) : the_post(); ?>
	
		<h1><?php the_title() ?></h1>
		<?php the_content() ?>

		<?php endwhile; ?>
	
	</div>
	
<?php elseif (is_page('600-level') ): ?>

	<div id="">
	
		<?php query_posts('cat=6') ?>
		<?php while ( have_posts() ) : the_post(); ?>
	
		<h1><?php the_title() ?></h1>
		<?php the_content() ?>

		<?php endwhile; ?>
	
	</div>
	
<?php elseif (is_page('stringing-techniques') ): ?>

	<div id="">
	
		<?php query_posts('cat=8') ?>
		<?php while ( have_posts() ) : the_post(); ?>
	
		<h1><?php the_title() ?></h1>
		<?php the_content() ?>

		<?php endwhile; ?>
	
	</div>
	
<?php elseif (is_page('wire-techniques') ): ?>

	<div id="">
	
		<?php query_posts('cat=9') ?>
		<?php while ( have_posts() ) : the_post(); ?>
	
		<h1><?php the_title() ?></h1>
		<?php the_content() ?>

		<?php endwhile; ?>
	
	</div>
	
<?php elseif (is_page('fiber-crafts') ): ?>

	<div id="">
	
		<?php query_posts('cat=13') ?>
		<?php while ( have_posts() ) : the_post(); ?>
	
		<h1><?php the_title() ?></h1>
		<?php the_content() ?>

		<?php endwhile; ?>
	
	</div>
	
<?php elseif (is_page('metalworking-cold-connections') ): ?>

	<div id="">
	
		<?php query_posts('cat=12') ?>
		<?php while ( have_posts() ) : the_post(); ?>
	
		<h1><?php the_title() ?></h1>
		<?php the_content() ?>

		<?php endwhile; ?>
	
	</div>
	
<?php elseif (is_page('precious-metal-clay') ): ?>

	THIS IS STILL EMPTY
	
<?php elseif (is_page('class-policies') ): ?>

	THIS IS STILL EMPTY
	
<?php elseif (is_page('private-lessons') ): ?>

	THIS IS STILL EMPTY

<?php else : ?>
	
		NOT THE CORRECT CAT, link out to bosdates calendar. This should never display.
		
<?php endif; ?>


</div><!-- end main_content-->


<?php get_footer(); ?>