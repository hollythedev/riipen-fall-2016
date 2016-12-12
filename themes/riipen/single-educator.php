<?php
/**
 * The template for displaying all single educator posts.
 *
 * @package Riipen_Theme
 */
get_header(); ?>
	<section id="primary" class="content-area-sep">
		<button onclick="history.go(-1);" class="back"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button>
		<main id="main" class="site-main-sep" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
			<h2 class="sep-title">
				<?php the_title();?>
			</h2>
			<div class="sep-picture-container">
			</div>
			<div class="sep-picture">
				<?php the_post_thumbnail( 'category-thumb'); ?>
			</div>
			<div class="sep-course-content1">
				<?php
					$upload_path = content_url() . '/uploads/';
					$logo_image_ID = CFS()->get('school_logo');
					$logo_image_ALT = get_post_meta($logo_image_ID, '_wp_attachment_image_alt', true);
					$logo_image_TITLE = get_the_title($logo_image_ID);
					$logo_image_URL_data = wp_get_attachment_metadata($logo_image_ID, true);
					$logo_image_URL = $logo_image_URL_data["file"];
					echo '<img src="';
					echo $upload_path . $logo_image_URL;
					echo '" title="'.$logo_image_TITLE.'" alt="';
					echo $logo_image_ALT;
					echo '">';
				?>
			</div>
			<div class="sep-course-content2">
				<h2>
					<?php echo CFS()->get( 'course_head' ) ?> </h2>
				<?php echo CFS()->get( 'courses' ) ?>
			</div>
			<?php endwhile; // End of the loop. ?>
		</main>
		<!-- #main -->
	</section>
	<!-- #primary -->
	<?php get_footer(); ?>
