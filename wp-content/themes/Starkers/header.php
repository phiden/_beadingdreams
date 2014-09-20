<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 * We filter the output of wp_title() a bit -- see
	 * twentyten_filter_wp_title() in functions.php.
	 */
	wp_title( '|', true, 'right' );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>

<!--ANALYTICS-->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-3384895-3']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</head>

<body <?php body_class(); ?>>

<div id="container">

<div id="header">

	<div id="logo"><a href="http://www.beadingdreams.com"><img src="/images/logo.jpg"></a></div>
	<div id="project350"><a href="http://www.the350project.net/"><img src="/images/350_project.jpg"></a></div>

	<div id="nav">
	
 
	<?php if (is_front_page()) : ?>
	
	<ul>
	
		<li><a class="active" href="http://beadingdreams.com">welcome</a></li>
		<li><a href="/class-schedule">classes</a></li>
		<li><a href="/parties">parties</a></li>
		<li><a href="/custom-jewelry">custom design</a></li>
		<li><a href="/about-us">about &amp; contact</a></li>
		
	</ul>
	
	<? elseif (is_page('classes') || is_page('100 Level') || is_page('200 Level') || is_page('300 Level') || is_page('600 Level') || is_page('Class Policies') || is_page('Basic Bead Stringing') || is_page('Fiber Crafts') || is_page('Metalworking & cold connections') || is_page('Precious Metal Clay') || is_page('Private Lessons') || is_page('Stringing Techniques') || is_page('Wire Techniques')): ?>
	
	<ul>
	
		<li><a href="http://beadingdreams.com">welcome</a></li>
		<li><a class="active" href="/class-schedule">classes</a></li>
		<li><a href="/parties">parties</a></li>
		<li><a href="/custom-jewelry">custom design</a></li>
		<li><a href="/about-us">about &amp; contact</a></li>
		
	</ul>
		
	<? elseif (is_page('parties')) : ?>
	
	<ul>
	
		<li><a href="http://beadingdreams.com">welcome</a></li>
		<li><a href="/class-schedule">classes</a></li>
		<li><a class="active" href="/parties">parties</a></li>
		<li><a href="/custom-jewelry">custom design</a></li>
		<li><a href="/about-us">about &amp; contact</a></li>
		
	</ul>

	
	<? elseif (is_page('about-us')) : ?>
	
	<ul>
	
		<li><a href="http://beadingdreams.com">welcome</a></li>
		<li><a href="/class-schedule">classes</a></li>
		<li><a href="/parties">parties</a></li>
		<li><a href="/custom-jewelry">custom design</a></li>
		<li><a class="active" href="/about-us">about &amp; contact</a></li>
		
	</ul>
	
	<? elseif (is_page('custom-jewelry')) : ?>
	
	<ul>
	
		<li><a href="http://beadingdreams.com">welcome</a></li>
		<li><a href="/class-schedule">classes</a></li>
		<li><a href="/parties">parties</a></li>
		<li><a class="active" href="/custom-jewelry">custom design</a></li>
		<li><a href="/about-us">about &amp; contact</a></li>
		
	</ul>
	
	<? else : ?>
	
	<ul>
	
		<li><a href="http://beadingdreams.com">welcome</a></li>
		<li><a class="active" href="/class-schedule">classes</a></li>
		<li><a href="/parties">parties</a></li>
		<li><a href="/custom-jewelry">custom design</a></li>
		<li><a href="/about-us">about &amp; contact</a></li>
		
	</ul>		
	
	
	<? endif; ?>
	
	</div>
	</div> <!-- end header -->