<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package underscorebams
 */

?>


</div><!-- #page -->
	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<?php dynamic_sidebar( 'widget-footer-1' ); ?>
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'underscorebams' ) ); ?>"><?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'underscorebams' ), 'WordPress' );
			?></a>
			<span class="sep"> | </span>
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'underscorebams' ), 'underscorebams', '<a href="http://bambangsetyawan.com/">bambangsetyawan.com</a>' );
			?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->


<?php wp_footer(); ?>

</body>
</html>
