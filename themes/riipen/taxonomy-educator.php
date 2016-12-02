<?php
/**
 * The template for displaying archive type pages.
 *
 * @package Riipen_Theme
 */
get_header(); ?>
<button onclick="history.go(-1);"><  Back</button>
	<div id="primary" class="content-area-sep-archive">
		<main id="main" class="site-main-sep-archive" role="main">
			<?php if ( have_posts() ) : ?>
			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header>

			<!-- .page-header -->
			<div class="boxes" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php while ( have_posts() ) : the_post(); ?>
				<div class="product-post">
					<div class="product-thumbnail">
						<a href="<?php the_permalink() ; ?> ">
							<?php the_post_thumbnail( 'large' ); ?>
						</a>

				<?php endwhile ?>
			</div>
	</div>
	</div>
	<?php else : ?>
	<?php get_template_part( 'template-parts/content', 'none' ); ?>
	<?php endif; ?>
	</main>
	<!-- #main -->
	</div>
	<!-- #primary -->
	<?php get_footer(); ?>