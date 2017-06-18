<?php
/**
 * Displays footer site info
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="site-info">
	 <?php $lang=get_bloginfo("language"); 
	 if($lang == 'fr-CA'){ ?>
	 	<p> &copy;  <?php echo date("Y"); ?> Programmes Coyote</p>
	 	<p class="dim">Logo par <a href="https://hymnets.carbonmade.com" target="_blank">Anastasia Sylenko</a></p>
		<p class="dim">Site installé par <a href="https://sammypotato.com" target="_blank">Sam</a></p>
	 <?php }
	 if($lang == 'en-CA'){ ?>
	 	<p> &copy;  <?php echo date("Y"); ?> Coyote Programs</p>
	 	<p class="dim">Logo by <a href="https://hymnets.carbonmade.com" target="_blank">Anastasia Sylenko</a></p>
		<p class="dim">Site setup by <a href="https://sammypotato.com" target="_blank">Sam</a></p>
	 <?php } ?>
	 
</div><!-- .site-info -->
