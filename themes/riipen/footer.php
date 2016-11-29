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
		<div class="site-info">
			<p>
				<a href="#"> <i class="fa fa-facebook" aria-hidden="true"></i></a>
			</p>
			<p>
				<a href="#"> <i class="fa fa-twitter" aria-hidden="true"></i> </a>
			</p>
			<p>
				<a href="#"> <i class="fa fa-google-plus" aria-hidden="true"></i> </a>
			</p>
			<p>
				<a href="#"> <i class="fa fa-linkedin" aria-hidden="true"></i> </a>
			</p>
		</div>
		<div class= "footer-buttons">
			<a href="<?php echo esc_url( '#' ); ?>">
				<?php printf( esc_html( 'Riipen up' ) ); ?>
			</a>
			<a href="<?php echo esc_url( '#' ); ?>">
				<?php printf( esc_html( 'Get pricing' ) ); ?>
			</a>
		</div>
		<div class="footer-information">
			<a href="<?php echo esc_url( '#' ); ?>">
				<?php printf( esc_html( 'about us' ) ); ?>
			</a>
			<a href="<?php echo esc_url( '#' ); ?>">
				<?php printf( esc_html( 'legal' ) ); ?>
			</a>
			<a href="<?php echo esc_url( '#' ); ?>">
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