<?php
/**
 * Template part for displaying results in search pages.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" class="each-result <?php post_class(); ?>">
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		
		<?php echo get_the_term_list( $post->ID, 'institution', 'Teaches At: ', ', ' ); ?>
		<?php riipen_entry_footer() ?>

	</header><!-- .entry-header -->

</article><!-- #post-## -->
