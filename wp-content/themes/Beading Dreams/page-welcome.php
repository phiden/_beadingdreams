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
	
		Announcements here
		<?php query_posts('category_name=home-banner&posts_per_page=1') ?>
		<?php while ( have_posts() ) : the_post(); ?>
		
			<h1><?php the_title() ?></h1>
			<?php the_content() ?>
	
		<?php endwhile; ?>
		
	</section>

	<section id="events">
	
		Events here 
		<?php query_posts('category_name=upcoming-event&posts_per_page=1') ?>
		<?php while ( have_posts() ) : the_post(); ?>
		
			<h1><?php the_title() ?></h1>
			<?php the_content() ?>
	
		<?php endwhile; ?>
		
	</section>
	
	<section id="classes">
	
		classes here
	
		<ul id="home_classes">
			<?php query_posts('category_name=homepage-class&posts_per_page=3') ?>
			<?php while ( have_posts() ) : the_post(); ?>
			
			<li>
				<h1><?php the_title() ?></h1>
				<?php the_content() ?>
			</li>
			<?php endwhile; ?>
			
		</ul>
	</section>
	
	<section id="design-repair">
	
		Design &amp; repair here
		<?php query_posts('category_name=design-repair&posts_per_page=1') ?>
		<?php while ( have_posts() ) : the_post(); ?>
		
			<h1><?php the_title() ?></h1>
			<?php the_content() ?>
	
		<?php endwhile; ?>
		
	</section>
	
	
	<div id="home_banner">
	
		<?php query_posts('cat=home-banner&posts_per_page=1') ?>
		<?php while ( have_posts() ) : the_post(); ?>
		
		<h1><?php the_title() ?></h1>
		<?php the_content() ?>
	
		<?php endwhile; ?>
	
	</div>
	
	<?php wp_reset_query(); ?>
	
</div><!-- end main_content-->

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
