<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<button onclick="history.go(-1);" class="back"><  Back</button>
	<main id="main" class="site-main" role="main">
		
		<div class="riipen-list">
			<?php if ( have_posts() ) : ?>

				<header class="page-header">

				</header><!-- .page-header -->
				
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="personwrapper">
						<a href="<?php echo the_permalink(); ?>">
							<?php if ( has_post_thumbnail() ) : ?>
								<?php the_post_thumbnail( 'large' ); ?>
							<?php endif; ?>
						</a>
					</div>
				<?php endwhile; ?>

				<?php the_posts_navigation(); ?>

			<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>
		</div>

	</main><!-- #main -->
</div><!-- #primary -->


<?php dynamic_sidebar( 'carousels2' ); ?>
<div class="main-carousel" data-flickity='{ "cellAlign": "left", "contain": true }'>
	<?php $gallery_images = CFS()->get('course_pictures');?>
	<?php foreach ($gallery_images as $image): ?>
	<div class="carousel-cell">
		<?php echo '<img src="'.$image["image"].'"/>'; ?>
	</div>
<?php endforeach; ?>
</div>
<?php get_footer(); ?>
