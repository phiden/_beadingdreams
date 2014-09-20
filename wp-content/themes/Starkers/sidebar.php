<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */
?>

<div id="sidebar">

<div class="sidebar_section">
<h1>visit our store</h1>
<p>5629 W. Lovers Ln., Dallas</br>
Mon - Sat, 10a - 6p</br>
Thurs, 10a - 8p</br>
Sun, 1p - 6p</p>
</div>

<div class="sidebar_section">

<h1>Gift Certificates</h1>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="43GR9GYJYCXBJ">
<table>
<tr><td><input type="hidden" name="on0" value="Amounts"></td></tr><tr><td><select name="os0">
	<option value="Gift certificate">Gift certificate $25.00 USD</option>
	<option value="Gift certificate">Gift certificate $50.00 USD</option>
	<option value="Gift certificate">Gift certificate $75.00 USD</option>
	<option value="Gift certificate">Gift certificate $100.00 USD</option>
</select> </td></tr>
</table>
<input type="hidden" name="currency_code" value="USD">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>

</div>

<div class="sidebar_section">
<img src="/images/facebook.jpg" align="left"/><h1><a href="https://www.facebook.com/pages/Beading-Dreams/257101560041">visit us on Facebook</a></h1>
</div>

<div class="sidebar_section" id="mailing">
<h1><a href="http://visitor.constantcontact.com/d.jsp?m=1103500614685&p=oi">join our mailing list &raquo;</a></h1><p>receive all the latest news</p>
</div>

<div class="sidebar_section">
<h1><a href="/class-schedule">view our class calendar &raquo;</a></h1>
</div>

<div class="sidebar_section">
<h1>links we love:</h1>

	<?php query_posts('cat=23&posts_per_page=1') ?>
	
	<?php while ( have_posts() ) : the_post(); ?>
	<?php the_content() ?>

	<?php endwhile; ?>

</div>

<div class="sidebar_section">


<h1>upcoming events:</h1>

<?php query_posts('cat=15&posts_per_page=3') ?>
	
	<?php while ( have_posts() ) : the_post(); ?>
	<?php the_title() ?>
	<?php the_content() ?>
	
	<?php endwhile; ?>
	
</div>

<div class="sidebar_section">
<h1>Bead Bus</h1>
<i>mobile birthday parties</i>
<img src="images/bead_bus_small.jpg"/>
<p>
Let the Bead Bus bring the party to you! Birthday parties for kids ages 6 and up in the convenience of your own home or the venue of your choice! 

Check the <a href="/parties">Parties</a> page for complete information!
</p>
</div>

</div> <!-- end sidebar -->