<?php /* Template Name: Educator */ ?>
<?php get_header(); ?>
<div id="primary" class="content-area">
    <button onclick="history.go(-1);" class="back"><  Back</button>
    <main id="main" class="site-main" role="main">
        <section class="educator-page">
            <div class="educator-talent-section-1">
                <div class="circle">
                    <h2 class="title">
                        <?php the_title();?>
                    </h2>
                </div>
                <div class="text-box">
                    <h1>r<span>ii</span>pen</h1>
                    <?php echo CFS()->get( 'motto'); ?>
                </div>
            </div>
            <div class="educator-talent-section-2">
            </div>
            <div class="educator-talent-section-3">
                <p> 4 easy steps to being Riipened </p>
                <a href="<?php the_permalink(); ?>" class='educator-talent-btn'> riipen up</a>
            </div>
            <div class="educator-talent-section-4">
                
            </div>
            <div class="educator-talent-section-5">
                <p class="testimonial">
                    <?php echo CFS()->get( 'testimonial'); ?>
     
                        <p class="position">
                            <?php echo CFS()->get( 'position'); ?> </p>
                        <p class="name">
                            <?php echo CFS()->get( 'name'); ?> </p>
            </div>
        </section>
        <?php dynamic_sidebar( 'carousels' ); ?>
    </main>
</div>
<!-- #primary -->
<?php get_footer(); ?>