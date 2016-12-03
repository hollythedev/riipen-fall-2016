<?php 
/**
 * The template for displaying the educator page.
 *
 * @package Riipen_Theme
 */
?>
<?php get_header(); ?>
<div id="primary" class="content-area">
    <button onclick="history.go(-1);" class="back"><  Back</button>
    <main id="main" class="site-main" role="main">
        <section class="educator-page">
            <div class="educator-talent-section-1">
                <h1>r<span>ii</span>pen</h1>
                <p>
                    <?php echo CFS()->get( 'motto'); ?> </p>
            </div>
            <div class="educator-talent-section-2">
                <?php echo CFS()->get( 'banner'); ?>
            </div>
            <div class="educator-talent-section-3">
                <p> 4 easy steps to being Riipened </p>
                <a href="<?php the_permalink(); ?>" class='eductor-talent-btn'> riipen up</a>
            </div>
            <div class="educator-talentsection-4">
                <?php echo CFS()->get( 'banner_2'); ?>
            </div>
            <div class="educator-talent-section-5">
                <?php echo CFS()->get( 'testimonial'); ?>
                <?php echo CFS()->get( 'position'); ?>
                <?php echo CFS()->get( 'name'); ?>
            </div>
        </section>
    </main>
</div>
<!-- #primary -->
<?php get_footer(); ?>