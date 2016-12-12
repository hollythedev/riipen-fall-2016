<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<button onclick="history.go(-1);" class="back"><i class="fa fa-arrow-left" aria-hidden="true"></i>  Back</button>
	<main id="main" class="site-main" role="main">
		<div class="hero-banner">
			<h1 class="uppercase banner-text">Where <span class="highlight-orange">talent</span> and <span class="highlight-orange">industry</span> meet</h1>
		</div>
			<section  class="tabbing-wrapper">
				<div class="tabbingsection">

					<a class="inactive uppercase">Institutions</a>

					<a class="active uppercase" href="<?php echo get_post_type_archive_link( 'educator' ); ?>">Educators</a>

				</div>
			</section>
			
			<section class="riipen-list">
				<?php if ( have_posts() ) : ?>

					<header class="page-header">

					</header><!-- .page-header -->
					
					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<div class="personwrapper container">
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

				<?php else : ?>

					<?php get_template_part( 'template-parts/content', 'none' ); ?>

				<?php endif; ?>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

	<?php get_footer(); ?>
