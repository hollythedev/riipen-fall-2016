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
			<section class="sep-container">
				<div class="sep-thumbnail">
					<?php the_post_thumbnail( 'category-thumb'); ?>
				</div>
				<div class="sep-info">
					<h2 class="single-educator-title">
						<?php the_title();?>
					</h2>
					<p class="sp-price">
						<?php echo CFS()->get( 'product_price' ); ?> </p>
					<p class="sp-description" <?php the_content();?> </>

				</div>
			</section>

				<?php endwhile; // End of the loop. ?>
		</main>
		<!-- #main -->
	</section>
	<!-- #primary -->
	<?php get_footer(); ?>