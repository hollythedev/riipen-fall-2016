<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<button onclick="history.go(-1);" class="back"><  Back</button>
<div id="primary" class="content-area">
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
					<a href="<?php echo the_permalink(); ?>">
						<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail( 'large' ); ?>
						<?php endif; ?>
					</a>
					</div>
					<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
					<p class="educators-category"> 
					
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
