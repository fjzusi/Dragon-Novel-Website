<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
            <div class="site-info">
                <a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'wp-bootstrap-starter' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'wp-bootstrap-starter' ), 'WordPress' ); ?></a>
                <span class="sep"> | </span>
                <a class="credits" href="http://afterimagedesigns.com/" target="_blank" title="Theme developed by Afterimage Designs" alt="Theme developed by Afterimage Designs"><?php echo esc_html__('Theme developed by Afterimage Designs','wp-bootstrap-starter') ?> </a>
            </div><!-- close .site-info -->
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
