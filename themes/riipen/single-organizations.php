<?php
/**
 * The template for displaying all single posts.
 *
 * @package Riipen_Theme
 */

get_header(); ?>

<div id="primary" class="content-areas">
	<button onclick="history.go(-1);" class="back"><i class="fa fa-arrow-left" aria-hidden="true"></i>  Back</button>
	<main id="main" class="site-main" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
				<header class="entry-header">
					<?php if ( has_post_thumbnail() ) : ?>
						<?php the_post_thumbnail( 'large' ); ?>
					<?php endif; ?>

					<?php the_title( '<h1 class="entry-title uppercase">About ', '</h1>' ); ?>

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
			
			<?php 
			$tab_one_name = CFS()->get( 'first_tab_name' );
			$tab_two_name =CFS()->get( 'second_tab_name' );
			$tab_three_name =CFS()->get( 'third_tab_name' );
			$tab_forth_name =CFS()->get( 'fourth_tab_name' );
			?>
			<?php if ($tab_one_name == true || $tab_two_name == true || $tab_three_name == true || $tab_forth_name == true ): ?>
				<div class="tabs">
					<ul class="tab-links">
						<li class="active">
							
								<?php if  ($tab_one_name == true): ?>
									<a href="#tab1">
									<?php echo $tab_one_name ?>	
								</a>
							</li>
							<li>
							<?php endif ?>
							<?php if ($tab_two_name == true): ?>

								<a href="#tab2">
									<?php echo $tab_two_name ?>	
								</a>
							</li>
							<li>
							<?php endif; ?>
							<?php if ($tab_three_name == true):?>

								<a href="#tab3">
									<?php echo $tab_three_name ?>
								</a>
							</li>
							<li>
							<?php endif ?>



							<?php if ($tab_forth_name == true):?>

								<a href="#tab4">
									<?php echo CFS()->get( 'fourth_tab_name' ); ?>
								</a>

							<?php endif ?>
						</li>
					</ul>

					<div class="tab-content">
						<div id="tab1" class="tab active">
							<h3><?php echo CFS()->get( 'first_tab_title' ); ?></h3>
							<p><?php echo CFS()->get( 'first_tab_content' ); ?>
						</div>

						<div id="tab2" class="tab">
							<h3><?php echo CFS()->get( 'second_tab_title' ); ?></h3>
							<p><?php echo CFS()->get( 'second_tab_content' ); ?>
						</div>

						<div id="tab3" class="tab">
							<h3><?php echo CFS()->get( 'third_tab_title' ); ?></h3>
							<p><?php echo CFS()->get( 'third_tab_content' ); ?>
						</div>

						<div id="tab4" class="tab">
							<h3><?php echo CFS()->get( 'fourth_tab_title' ); ?></h3>
							<p><?php echo CFS()->get( 'fourth_tab_content' ); ?>
						</div>
					</div>
				</div>
			<?php endif; ?>
		</main><!-- #main -->
	</div><!-- #primary -->

	<?php get_footer(); ?>
