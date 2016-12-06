<?php /* Template Name: About */ ?>
<?php get_header(); ?>
    <div id="primary" class="content-area">
      <main id="main" class="site-main">
        <section class="about-hero">
          <h1><?php the_title(); ?></h1>
        </section>
        <section class="about-wrap">
          <div class="container">
            <h2>Story about Riipen</h2>
            <?php echo CFS()->get( 'story' ) ?>
          </div>
        </section>
        <section class="founders">
        </section>
      </main><!-- #main -->
    </div><!-- #primary -->
<?php get_footer(); ?>
