<?php
/**
 * Template part for displaying results in search pages.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class() ?> >
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<div class="featuredimage" style=background-image:url("<?php echo the_post_thumbnail_url()?>") >
			<!-- <?php echo the_post_thumbnail_url() ?>  -->


			</div>
		<?php endif; ?>
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<br>
		
		<?php echo get_the_term_list( $post->ID, 'institution', 'Teaches At: ', ', ' ); ?>
		<br>
		<?php riipen_entry_footer() ?>

	</header><!-- .entry-header -->

</article><!-- #post-## -->
