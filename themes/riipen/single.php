<?php
/**
 * The template for displaying all single posts.
 *
 * @package Riipen_Theme
 */

get_header(); ?>
<button onclick="history.go(-1);" class="back"><  Back</button>

	<div id="primary" class="content-areas">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>


		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
