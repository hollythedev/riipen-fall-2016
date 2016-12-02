<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<button onclick="history.go(-1);"><  Back</button>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="view-type-buttons">
			<a class="list-view psudeo-button" > <div class="psudeo-button"></div></a>
			<a class="grid-view psudeo-button"> 
				<div class="grey-boxes"></div>
				<div class="grey-boxes"></div>
				<div class="grey-boxes"></div>
				<div class="grey-boxes"></div> 
			</a>
		</div>
		<div class="riipen-list organizationgrid">
			<?php if ( have_posts() ) : ?>

				<header class="page-header">

				</header><!-- .page-header -->
				
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="personwrapper ">
						<a href="<?php echo the_permalink(); ?>">
							<?php if ( has_post_thumbnail() ) : ?>
								<?php the_post_thumbnail( 'large' ); ?>
							<?php endif; ?>
						</a>
						<div class="organization-content">
							<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

							<?php if ( 'post' === get_post_type() ) : ?>
								<div class="entry-meta">
									<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
								</div><!-- .entry-meta -->
							<?php endif; ?>
							<!-- <div class="entry-summary">
								<?php the_excerpt(); ?>
							</div> -->
						</div>
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
