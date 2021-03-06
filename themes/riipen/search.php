<?php
/**
 * The template for displaying search results pages.
 *
 *@package Riipen_Theme
 */

get_header(); ?>

<section id="primary" class="content-area">
	<button onclick="history.go(-1);" class="back">&lt;  Back</button>
	<main id="main" class="site-main" role="main">
		<div class="search-result-wrapper container">
			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<h1 class="page-title"><?php printf( esc_html( 'Search Results for: %s' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				</header><!-- .page-header -->
					<div class=" results-wrapper">
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'template-parts/content', 'search' ); ?>

				<?php endwhile; ?>
				</div>
				<?php riipen_numbered_pagination(); ?>

			<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>
		</div>
	</main><!-- #main -->
</section><!-- #primary -->


<?php get_footer(); ?>
