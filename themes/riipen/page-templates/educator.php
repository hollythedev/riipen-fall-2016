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
              <img src="<?php echo get_template_directory_uri() . '/images/journeymap.png'; ?>" alt="Journey Map" />
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
            <section class="desktop-circles">

						<div class="form">
							<h2>1</h2>
                             <div class= "circle-text">
							<p>Fill out a form</p>
                            <p>Think about learning outcomes that you want for this project</p>
						</div>
                        </div>

						<div class="upload">
							<h2>2</h2>
                             <div class= "circle-text">
							<p> Upload your assignment</p>
                            <p> Fill in the form on our platform and press submit</p>
						</div>
                        </div>

						<div class="answer">
							<h2>3</h2>
                            <div class= "circle-text">
							<p>Answer your phone</p>
                            <p>Once we have this information, we will call you within 48 hours.</p>
						</div>
                        </div>
            </section>

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
