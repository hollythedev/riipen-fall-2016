<?php
/**
 * The template for displaying archive pages.
 *
 *@package Riipen_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<button onclick="history.go(-1);" class="back"><i class="fa fa-arrow-left" aria-hidden="true"></i>  Back</button>
	<main id="main" class="site-main" role="main">
		<div class="hero-banner">
			<h1 class="uppercase banner-text">Where <span class="highlight-orange">talent</span> and <span class="highlight-orange">industry</span> meet</h1>
		</div>
		

			<section class="riipen-list">

				<?php if ( have_posts() ) : ?>
				<div class="company-wrapper">
			

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<div class="person-wrapper">
							<a href="<?php echo the_permalink(); ?>">
								<?php if ( has_post_thumbnail() ) : ?>
									<?php the_post_thumbnail( 'large' ); ?>
								<?php endif; ?>
							</a>
						</div>
					<?php endwhile; ?>

					<div class="class_nav">
					<?php posts_nav_link( " ", "Previous", "More" ); ?> 
					</div>
				</div>
				<?php else : ?>

					<?php get_template_part( 'template-parts/content', 'none' ); ?>

				<?php endif; ?>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

	<?php get_footer(); ?>
