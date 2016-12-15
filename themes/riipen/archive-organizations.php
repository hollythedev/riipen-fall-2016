<?php
/**
 * The template for displaying archive pages.
 *
 *@package Riipen_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<button onclick="history.go(-1);" class="back"><i class="fa fa-arrow-left" aria-hidden="true"></i>  Back</button>
	<main id="main" class="site-main animatedParent" role="main">
		<div class="hero-banner">
			<h1 class="uppercase banner-text">Where <span class="highlight-orange">talent</span> and <span class="highlight-orange">industry</span> meet</h1>
		</div>
		<h2 class="uppercase org-header desktop-only"> Companies we are working with </h2>
		<div class="view-type-buttons">
			<a class="list-view psudeo-button" > 
				<div class="psudeo-button"> 
					<img src=" <?php echo get_template_directory_uri() ?>/images/btsMobileListgallery.png" alt="<?php echo get_the_title() ?>"> 
				</div>
			</a>
			<a class="grid-view psudeo-button"> 
				<div class="grey-boxes"></div>
				<div class="grey-boxes"></div>
				<div class="grey-boxes"></div>
				<div class="grey-boxes"></div> 
			</a>
		</div>
		<div class="riipen-list organizationgrid animated fadeInUp">
			<?php if ( have_posts() ) : ?>
				<div class="company-wrapper">
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="person-wrapper ">
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
				</div>
				<div class="class_nav">
				<?php posts_nav_link( " ", "Previous", "More" ); ?> 
			</div>
		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
	</div>
</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
