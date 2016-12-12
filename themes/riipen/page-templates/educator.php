<?php /* Template Name: Educator */ ?>
<?php get_header(); ?>
<div id="primary" class="content-area">
    <button onclick="history.go(-1);" class="back"> <i class="fa fa-arrow-left" aria-hidden="true"></i>  Back</button>
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
                   <p class= "motto"> <?php echo CFS()->get( 'motto'); ?> </p>
                </div>
            </div>
            <section class="desktop-green">
                <div class="desktop-green-container1">
                    <h2>R<span>ii</span>pen</h2>
                    <p> your assignments</p>
                </div>
                <div class="desktop-green-container2">
                    <div class="left">
                        <p>Leverage your students work and add industry value to the academic curriculum</p>
                    </div>
                    <div class="middle">
                        <p>Riipen matches your projects desired learning outcomes to industry partners that share an interest
                            in those skills, who in turn validate students success</p>
                    </div>
                    <div class="right">
                        <p>It starts with developing an assignment that meets industry standards</p>
                    </div>
                </div>
            </section>
            <section class="journey-map">
              <img src="<?php echo get_template_directory_uri() . '/images/journeymap.png'; ?>" class="normal" alt="Journey Map" />
              <img src="<?php echo get_template_directory_uri() . '/images/sidewaysjourneymap.png'; ?>" class= "sideways" alt="Journey Map" />
            </section>
            <section class="educator-talent-section-3">
                <p> 4 easy steps to being Riipened </p>
                <a href="https://riipen.com/" class="educator-talent-btn"> riipen up</a>
            </section>
            <section class="educator-talent-section-4">
                 <img src="<?php echo get_template_directory_uri() . '/images/educatoripad.jpg'; ?>" alt="Photo of iPad" />
            </section>
            <section class="educator-talent-section-5">
                <div class= "text-container">
                <p class="testimonial">
                    <?php echo CFS()->get( 'testimonial'); ?> </p>
                    <p class="position">
                       - <?php echo CFS()->get( 'position'); ?> </p>
                    <p class="name">
                        <?php echo CFS()->get( 'name'); ?> </p>
           </div>
            </section>
        </section>
        <?php dynamic_sidebar( 'carousels' ); ?>
    </main>
</div>
<!-- #primary -->
<?php get_footer(); ?>
