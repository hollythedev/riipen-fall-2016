<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	
	<main id="main" class="site-main container" role="main">
	<button onclick="history.go(-1);" class="back"><i class="fa fa-arrow-left" aria-hidden="true"></i>  Back</button>
		<div  class="tabbing-wrapper">
			<div class="tabbingsection">

				<a class="active uppercase" href="<?php echo get_post_type_archive_link( 'institutions' ); ?>" >Institutions</a>

				<a class="inactive uppercase">Educators</a>

			</div>
		</div>
		<div class="riipen-list">
			<?php if ( have_posts() ) : ?>

				<header class="page-header">

				</header><!-- .page-header -->

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="personwrapper">
						
							<a class="picturewrapper" href="<?php the_permalink(); ?>" rel="bookmark"> 
								<?php if ( has_post_thumbnail() ) : ?>
									<?php $url = wp_get_attachment_url( get_post_thumbnail_id() ) ?>
									<div class="image-wrapper">
									<div class="educator-image" style=background-image:url("<?php echo $url ?>");>

									</div>
									</div>
								</a>

							<?php endif ?>
						
						<?php the_title( sprintf( '<h2 class="entry-title uppercase educatorname"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
						<p class="educators-category educatorname uppercase"> 

							 <?php echo get_the_term_list( $post->ID , 'subject', "" , " ") ?> 
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
