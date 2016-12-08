<?php /* Template Name: Organiazation */ ?>
<?php get_header(); ?>
<div id="primary" class="content-area">
    <button onclick="history.go(-1);" class="back">&lt; Back</button>
    <main id="main" class="site-main" role="main">
        <section class="organization-page">
            <div class="organization-section-1">
                <h1>r<span>ii</span>pen</h1>
                <p>
                    <?php echo CFS()->get( 'motto'); ?> </p>
            </div>
            <div class="description">
             <h3>r<span>ii</span>pen</h3> <p> your assignments </p>
                <?php echo CFS()->get( 'description'); ?>
            </div>
            <div class="organization-section-2">
                <?php echo CFS()->get( 'banner'); ?>
            </div>
            <div class="organization-section-3">
                <p> 4 easy steps to being Riipened </p>
                <a href="<?php the_permalink(); ?>" class='eductor-talent-btn'> riipen up</a>
            </div>
            <div class="organizationsection-4">
                <?php echo CFS()->get( 'banner_2'); ?>
            </div>
            <div class="organization-section-5">
                <?php echo CFS()->get( 'testimonial'); ?>
                <?php echo CFS()->get( 'position'); ?>
                <?php echo CFS()->get( 'name'); ?>
            </div>
        </section>
    </main>
</div>
<!-- #primary -->
<?php get_footer(); ?>