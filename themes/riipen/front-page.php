<?php
/**
* The main template file.
*
* @package RED_Starter_Theme
*/

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<section class="hero">
			<video playsinline autoplay muted loop id="bgvid">
				<source src="<?php echo get_template_directory_uri();?>/images/city-1080.mp4" type="video/mp4">
			</video>
			<div class="headline">
				<div class="headline-wrap animatedParent animateOnce">
					<h2 class="animated bounceIn">Riipen your life</h2>
					<p class="animated bounceIn">Where talent and industry meet</p>
				</div>
			</div>
		</section>
		<section class="stats">
			<div class="container">
				<ul class="animatedParent animateOnce" data-sequence="500" data-appear-top-offset='-200'>
				  <li class="animated fadeInUp" data-id="1">
				    <div>
				      <p class="percent">42%</p>
				      <p>of new university graduates are under employed.</p>
				    </div>
				  </li>
				  <li class="animated fadeInUp" data-id="2">
				    <div>
				      <p class="percent">92%</p>
				      <p>of Teachers say their students are ready for the job market after graduation.</p>
				    </div>
				  </li>
				  <li class="animated fadeInUp" data-id="3">
				    <div>
				      <p class="percent">18%</p>
				      <p>Employers say 18% of students are ready for the job market after graduation</p>
				    </div>
				  </li>
				</ul>
				<div class="animatedParent animateOnce" data-appear-top-offset='-100'>
				<p class="double-border animated flipInX">"Why aren't students being evaluated on their school work by industry as well?"</p>
				</div>
			</div>
		</section>
		<section class="about">
			<div class="container">
				<p>Riipen is a web platform that partners with post-secondary schools from around the globe. We enable meaningful in-class project-based experimential learning that mutually benefits all parties involved.</p>
				<ul>
					<li>Talent increases skill</li>
					<li>Educators enrich their curriculim</li>
					<li>Organizations build their talent pool</li>
				</ul>
			</div>
		</section>
		<section class="difference">
			<div class="container animatedParent animateOnce">
				<h2>Riipen wants to make a difference</h2>
				<p>and it's simple</p>
				<ol>
					<li>You sign up</li>
					<li>Create your dashboard</li>
					<li>Customize your profile</li>
					<li>Participate in projects</li>
				</ol>
				<p>Take the opportunity to discover what it's like to be a Riipened...</p>
				<div class="animated fadeIn">
					<?php wp_nav_menu( array( 'theme_location' => 'journey-menu', 'container_class' => 'figures' ) ); ?>
				</div>
			</div>
		</section>
		<section class="testimonial">
			<div class="container">
				<div class="icon">
					<i class="fa fa-line-chart" aria-hidden="true"></i>
				</div>
				<div class="text">
					<p>We did great volunteers through Riipen for our projects. Caitlyn &amp; Carly from Bites of Vitality heard about the social media project through Riipen, applied and we worked with them. Overall we were really happy with our experience and have been spreading the word</p>
					<h3>Amy Robinson, Founder &amp; Co-Executive Director LOCO BC</h3>
				</div>
			</div>
		</section>
		<?php dynamic_sidebar( 'carousels' ); ?>
	</main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>
