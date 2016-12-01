<?php /* Template Name: Educator Page */ ?>
<?php get_header(); ?>
<div class="educator-section-1">
    <h1>r<span>ii</span>pen</h1>
    <p> <?php echo CFS()->get( 'motto'); ?> </p>
</div>

<div class="educator-section-2"> </div>
<div class="educator-section-3">
    <p> 4 easy steps to being Riipened </p>
    <a href="<?php the_permalink(); ?>" class='eductor-btn'> riipen up</a>
</div>

<div class="educator-section-4"> </div>

<div class="educator-section-5">
    <?php echo CFS()->get( 'testimonial'); ?>
</div>

<aside id="wp_posts_carousel-2"></aside>
<aside id="wp_posts_carousel-3"></aside>
<!-- #primary -->
<?php get_footer(); ?>

