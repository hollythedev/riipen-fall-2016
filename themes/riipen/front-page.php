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
			<div class="headline">
				<div class="headline-wrap animatedParent animateOnce">
					<h2 class="animated bounceInDown">Riipen your life</h2>
					<p class="animated bounceInLeft">Where talent and industry meet</p>
				</div>
			</section>
			<section class="stats">
				<div class="container">
					<ul class="animatedParent animateOnce" data-sequence='500'>
						<li class="animated bounceInLeft" data-id='1'>
							<div>
								<h2>42%</h2>
								<p>of new university graduates are under employed.</p>
							</div>
						</li>
						<li class="animated bounceInLeft" data-id='2'>
							<div>
								<h2>92%</h2>
								<p>of Teachers say their students are ready for the job market after graduation.</p>
							</div>
						</li>
						<li class="animated bounceInLeft" data-id='3'>
							<div>
								<h2>18%</h2>
								<p>Employers say 18% of students are ready for the job market after graduation</p>
							</div>
						</li>
					</ul>
					<div class="animatedParent animateOnce">
						<p class="double-border animated bounceInLeft">"Why aren't students being evaluated on their school work by industry as well?"</p>
					</div>
				</div>
			</section>
			<section class="about">
				<div class="container animatedParent animateOnce" data-sequence='500'>
					<p class="animated bounceInLeft" data-id='1'>Riipen is a web platform that partners with post-secondary schools from around the globe. We enable meaningful in-class project-based experimential learning that mutually benefits all parties involved.</p>
					<ul>
						<li class="animated bounceInLeft" data-id='2'>Talent increases skill</li>
						<li class="animated bounceInLeft" data-id='3'>Educators enrich their curriculim</li>
						<li class="animated bounceInLeft" data-id='4'>Organizations build their talent pool</li>
					</ul>
				</div>
			</section>
			<section class="difference">
				<div class="container animatedParent animateOnce">
					<h2 class="animated growIn">Riipen want's to make a difference</h2>
					<p class="animated fadeInUp">and it's simple</p>
					<ol>
						<li class="animated fadeInLeft">You sign up</li>
						<li class="animated fadeInRight">Create your dashboard</li>
						<li class="animated fadeInLeft">Customize your profile</li>
						<li class="animated fadeInRight">Participate in projects</li>
					</ol>
					<p class="animated fadeInLeft">Take the opportunity to discover what it's like to be a Riipened...</p>
					<ul class="figures animated fadeInRight">
						<li>Organizations</li>
						<li>Talents</li>
						<li>Educators</li>
					</ul>
				</div>
      </section>
			<section class="testimonial">
				<div class="container animatedParent animateOnce">
					<div class="icon animated fadeInLeft">
					</div>
					<div class="text animated fadeInRight">
						<p>We did great volunteers through Riipen for our projects. Caitlyn & Carly from Bites of Vitality heard about the social media project through Riipen, applied and we worked with them. Overall we were really happy with our experience and have been spreading the word</p>
						<h3>Amy Robinson, Founder & Co-Executive Director LOCO BC</h3>
					</div>
				</div>
			</section>
			<?php dynamic_sidebar( 'carousels' ); ?>
		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_footer(); ?>
