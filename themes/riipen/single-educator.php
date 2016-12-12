<?php
/**
 * The template for displaying all single educator posts.
 *
 * @package Riipen_Theme
 */
get_header(); ?>

	<section id="primary" class="content-area-sep">
	<button onclick="history.go(-1);" class="back"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button>
		<main id="main" class="site-main-sep" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
					<h2 class="sep-title">
						<?php the_title();?>
					</h2>
				<div class="sep-picture-container">
				</div>
				<div class= "sep-picture"><?php the_post_thumbnail( 'category-thumb'); ?></div>
				<div class="sep-course-content">
		  <?php echo CFS()->get( 'course_head' ) ?>
		  <?php echo CFS()->get( 'courses' ) ?>
				</div>
			<?php endwhile; // End of the loop. ?>
		</main>
		<!-- #main -->
	</section>
	<!-- #primary -->
<?php get_footer(); ?>