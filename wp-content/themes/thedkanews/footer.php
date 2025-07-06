<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package thedkanews
 */

?>

		<footer id="site-footer" class="site-footer">
			<div class="container-footer container">
				<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
					<div class="footer-column">
						<?php dynamic_sidebar( 'footer-1' ); ?>
					</div>
				<?php endif; ?>
			</div>
		</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
