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
		<div class="container">
			<div class="riipen-list">
				<?php if ( have_posts() ) : ?>
					<header class="page-header">
					</header>
					<!-- .page-header -->
					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<div class= "sep-picture-container1"> </div>
						<div class="person-wrapper">
							<a href="<?php echo the_permalink(); ?>">
								<?php if ( has_post_thumbnail() ) : ?>
									<?php the_post_thumbnail( 'large' ); ?>
								<?php endif; ?>
							</a>
						</div>
					<?php endwhile; ?>
					<p class="riipen-since"> Riipen Since
						<?php echo CFS()->get('riipen_since') ?>
					<?php else : ?>
						<?php get_template_part( 'template-parts/content', 'none' ); ?>
					<?php endif; ?>
				</div>
			</div>
		</main>
		<!-- #main -->
	</div>
	<!-- #primary -->
	<div class="carousel-section">
		<div class="container">
			<?php dynamic_sidebar( 'carousels2' ); ?>
			<?php $gallery_images = CFS()->get('course_pictures');?>
			<?php if( !empty( $gallery_images) ): ?>
				<h2 class="course-header"> Past Course </h2>
				<div class="main-carousel" data-flickity='{ "cellAlign": "left", "contain": true }'>
					<?php foreach ($gallery_images as $image): ?>
						<?php if (!empty($image)): ?>

							<div class="carousel-cell">
								<div class="cell-wrapper" style="background-image:url(<?php echo $image["image"]; ?>) ">
									<a href="<?php echo $image["link_to_course"]; ?>">
										<?php if ($image['text_inside_carousel'] == true): ?>
											<div class="overley">
												<p>
													<?php echo $image['text_inside_carousel'] ?> </p>
												</div>
											<? endif; ?>
										</a>
									</div>
								</div>
							<?php endif; ?>
						<?php endforeach; ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
		<?php comments_template(); ?>
		<?php get_footer(); ?>
