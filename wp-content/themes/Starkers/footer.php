<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */
?>

</div> <!--container-->

<div id="footer">

			&copy; 2011 Beading Dreams 
			<div id="credit">designed &amp; built by <a href="http://sophiadengo.com">phiden</a></div>

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>

</div>

</body>
</html>