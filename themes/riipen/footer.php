<?php
/**
 * The template for displaying the footer.
 *
 * @package Riipen_Theme
 */

?>
	</div>
	<!-- #content -->
	<footer id="colophon" class="site-footer" role="contentinfo">
	<section class= footer-container>
		<div class="footer-social-media">
			<p>
				<a href="https://www.facebook.com/Riipen/"> <i class="fa fa-facebook" aria-hidden="true"></i></a>
			</p>
			<p>
				<a href="https://twitter.com/riipen?lang=en"> <i class="fa fa-twitter" aria-hidden="true"></i> </a>
			</p>
			<p>
				<a href="https://plus.google.com/+Riipen/posts/feXtWdYVeWJ"> <i class="fa fa-google-plus" aria-hidden="true"></i> </a>
			</p>
			<p>
				<a href="https://www.linkedin.com/in/riipen"> <i class="fa fa-linkedin" aria-hidden="true"></i> </a>
			</p>
		</div>
		<div class= "footer-button">
			<a href="<?php echo esc_url( 'https://riipen.com/' ); ?>">
				<?php printf( esc_html( 'Subscribe' ) ); ?>
			</a>
		</div>
		<div class="footer-information">
			<a href="<?php echo esc_url( 'https://riipen.com/about' ); ?>">
				<?php printf( esc_html( 'about us' ) ); ?>
			</a>
			<a href="<?php echo esc_url( 'https://riipen.com/terms-of-use' ); ?>">
				<?php printf( esc_html( 'legal' ) ); ?>
			</a>
			<a href="<?php echo esc_url( 'https://riipen.com/faq' ); ?>">
				<?php printf( esc_html( 'help' ) ); ?>
			</a>
		</div>
		</section>
		<!-- .site-info -->
	</footer>
	<!-- #colophon -->
	</div>
	
	<!-- #page -->
	<?php wp_footer(); ?>
	</body>

	</html>