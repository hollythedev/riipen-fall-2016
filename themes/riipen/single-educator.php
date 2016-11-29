<?php
/**
 * The template for displaying all single educator posts.
 *
 * @package Riipen_Theme
 */
get_header(); ?>
	<section id="primary" class="content-area-sep">
		<main id="main" class="site-main-sep" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="sep-info">
					<h2 class="single-educator-title">
						<?php the_title();?>
					</h2>
				</div>
				<div class="sep-picture">
					<?php the_post_thumbnail( 'category-thumb'); ?>
				</div>
				<div class="sep-classes">
		 <?php the_content();?>
				</div>
			<?php endwhile; // End of the loop. ?>
		</main>
		<!-- #main -->
	</section>
	<!-- #primary -->
	<?php get_footer(); ?>