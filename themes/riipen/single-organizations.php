<?php
/**
 * The template for displaying all single posts.
 *
 * @package Riipen_Theme
 */

get_header(); ?>

<div id="primary" class="content-areas">
	<main id="main" class="site-main" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
				<header class="entry-header">
					<?php if ( has_post_thumbnail() ) : ?>
						<?php the_post_thumbnail( 'large' ); ?>
					<?php endif; ?>

					<?php the_title( '<h1 class="entry-title">About ', '</h1>' ); ?>

				</header><!-- .entry-header -->

				<div class="entry-content">
					<?php the_content(); ?>
					<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
						'after'  => '</div>',
						) );
						?>
					</div><!-- .entry-content -->


				</article>
			<?php endwhile; // End of the loop. ?>
			<div class="tabs">
				<ul class="tab-links">
					<li class="active"><a href="#tab1">Tab #1</a></li>
					<li><a href="#tab2">Tab #2</a></li>
					<li><a href="#tab3">Tab #3</a></li>
					<li><a href="#tab4">Tab #4</a></li>
				</ul>
				
				<div class="tab-content">
					<div id="tab1" class="tab active">
						<p>Tab #1 content goes here!</p>
						<p>Donec pulvinar neque sed semper lacinia. Curabitur lacinia ullamcorper nibh; quis imperdiet velit eleifend ac. Donec blandit mauris eget aliquet lacinia! Donec pulvinar massa interdum risus ornare mollis.</p>
					</div>
					
					<div id="tab2" class="tab">
						<p>Tab #2 content goes here!</p>
						<p>Donec pulvinar neque sed semper lacinia. Curabitur lacinia ullamcorper nibh; quis imperdiet velit eleifend ac. Donec blandit mauris eget aliquet lacinia! Donec pulvinar massa interdum risus ornare mollis. In hac habitasse platea dictumst. Ut euismod tempus hendrerit. Morbi ut adipiscing nisi. Etiam rutrum sodales gravida! Aliquam tellus orci, iaculis vel.</p>
					</div>
					
					<div id="tab3" class="tab">
						<p>Tab #3 content goes here!</p>
						<p>Donec pulvinar neque sed semper lacinia. Curabitur lacinia ullamcorper nibh; quis imperdiet velit eleifend ac. Donec blandit mauris eget aliquet lacinia! Donec pulvinar massa interdum ri.</p>
					</div>
					
					<div id="tab4" class="tab">
						<p>Tab #4 content goes here!</p>
						<p>Donec pulvinar neque sed semper lacinia. Curabitur lacinia ullamcorper nibh; quis imperdiet velit eleifend ac. Donec blandit mauris eget aliquet lacinia! Donec pulvinar massa interdum risus ornare mollis. In hac habitasse platea dictumst. Ut euismod tempus hendrerit. Morbi ut adipiscing nisi. Etiam rutrum sodales gravida! Aliquam tellus orci, iaculis vel.</p>
					</div>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php get_footer(); ?>
