<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php echo do_shortcode('[tpmfcarouselpost items="3" img_height="190"]'); ?>
      <section class="hero">
				<div class="headline">
					<div class="headline-wrap">
						<h2>Riipen your life</h2>
						<p>Where talent and industry meet</p>
					</div>
				</div>
      </section>
      <section class="stats">
				<ul>
					<li>
						<h2>42%</h2>
						<p>of new university graduates are under employed.</p>
					</li>
					<li>
						<h2>92%</h2>
						<p>of Teachers say their students are ready for the job market after graduation.</p>
					</li>
					<li>
						<h2>18%</h2>
						<p>Employers say 18% of students are ready for the job market after graduation</p>
					</li>
				</ul>
				<p class="double-border">"Why aren't students being evaluated on their school work by industry as well?"</p>
      </section>
      <section class="about">
				<p>Riipen is a web platform that partners with post-secondary schools from around the globe. We enable meaningful in-class project-based experimential learning that mutually benefits all parties involved.</p>
				<ul>
					<li>Talent increases skill</li>
					<li>Educators enrich their curriculim</li>
					<li>Organizations build their talent pool</li>
				</ul>
      </section>
      <section class="difference">
				<h2>Riipen want's to make a difference</h2>
				<p>and it's simple</p>
				<ol>
					<li>You sign up</li>
					<li>Create your dashboard</li>
					<li>Customize your profile</li>
					<li>Participate in projects</li>
				</ol>
				<p>Take the opportunity to discover what it's like to be a Riipened...</p>
      </section>
      <section class="testimonial">
      </section>
      <section class="school-carousel">
      </section>
      <section class="companies-carousel">
      </section>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
