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
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<?php get_sidebar(); ?>

<div id="main_content">

	<section id="announcements">
	
		<h1>Shop Announcements</h1>
		<?php query_posts('category_name=home-banner&posts_per_page=1') ?>
		<?php while ( have_posts() ) : the_post(); ?>
		
			<h1><?php the_title() ?></h1>
			<?php the_content() ?>
	
		<?php endwhile; ?>
		
	</section>

	<section id="events">
	
		<h1>Events!</h1>
		<?php query_posts('category_name=upcoming-event&posts_per_page=1') ?>
		<?php while ( have_posts() ) : the_post(); ?>
		
			<h1><?php the_title() ?></h1>
			<?php the_content() ?>
	
		<?php endwhile; ?>
		
	</section>
	
	<section id="classes">
	
		<h1>Classes at Beading Dreams</h1>
	
		<ul id="home_classes">
			<?php query_posts('category_name=homepage-class&posts_per_page=3') ?>
			<?php while ( have_posts() ) : the_post(); ?>
			
			<li>
				<h2><?php the_title() ?></h2>
				<?php the_content() ?>
			</li>
			<?php endwhile; ?>
			
		</ul>
	</section>
	
	<section id="design-repair">
	
		<h1>Design &amp; Repair</h1>
		<?php query_posts('category_name=design-repair&posts_per_page=1') ?>
		<?php while ( have_posts() ) : the_post(); ?>
		
			<h2><?php the_title() ?></h2>
			<?php the_content() ?>
	
		<?php endwhile; ?>
		
	</section>
	
	
	
	<?php wp_reset_query(); ?>
	
</div><!-- end main_content-->

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
