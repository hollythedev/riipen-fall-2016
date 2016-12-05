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
		<div class="tabbingsection">

			<a class="active uppercase" href="<?php echo get_post_type_archive_link( 'institutions' ); ?>" >Institutions</a>

			<a class="inactive uppercase">Educators</a>

		</div>
		<div class="riipen-list">
			<?php if ( have_posts() ) : ?>

				<header class="page-header">

				</header><!-- .page-header -->

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="personwrapper">
						<div>
							<a href="<?php the_permalink(); ?>" rel="bookmark"> 
								<?php if ( has_post_thumbnail() ) : ?>
									<?php $url = wp_get_attachment_url( get_post_thumbnail_id() ) ?>
									
									<div class="educator-image" style=background-image:url("<?php echo $url ?>") no repeat ;>
								
									</div>
								</a>
							<?php endif ?>
						</div>
						<?php the_title( sprintf( '<h2 class="entry-title uppercase educatorname"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
						<p class="educators-category educatorname uppercase"> 

							<?php the_tags("" ); ?> 
						</div>
					<?php endwhile; ?>

					<?php the_posts_navigation(); ?>

				<?php else : ?>

					<?php get_template_part( 'template-parts/content', 'none' ); ?>

				<?php endif; ?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

	<?php get_footer(); ?>
