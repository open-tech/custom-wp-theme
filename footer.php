<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>

<div class="empty-footer">
	
</div>
      <footer id="site-footer">

		  	<p class=""><?php bloginfo( 'name' ); ?> // created by <a target="_blank" href="https://open-tech.gr">open tech</a> &copy; <?php echo date_i18n(_x( 'Y', 'copyright date format', 'twentytwenty' )); ?> </p>
		  

      </footer>

    <?php wp_footer(); ?>

  </body>
</html>
