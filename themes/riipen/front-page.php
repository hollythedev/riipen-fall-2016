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
			<video playsinline autoplay muted loop poster="<?php echo get_template_directory_uri();?>/images/new-york-stock-photo.jpg" id="bgvid">
				<source src="<?php echo get_template_directory_uri();?>/images/city-1080.mp4" type="video/mp4">
				</video>
				<div class="headline">
					<div class="headline-wrap animatedParent">

						<h2 class="animated bounceInDown">Riipen your life</h2>
						<p class="animated bounceInLeft">Where talent and industry meet</p>
					</div>
				</section>
				<section class="stats">
					<div class="container">
						<ul>
							<li>
								<div>
									<h2>42%</h2>
									<p>of new university graduates are under employed.</p>
								</div>
							</li>
							<li>
								<div>
									<h2>92%</h2>
									<p>of Teachers say their students are ready for the job market after graduation.</p>
								</div>
							</li>
							<li>
								<div>
									<h2>18%</h2>
									<p>Employers say 18% of students are ready for the job market after graduation</p>
								</div>
							</li>
						</ul>
						<p class="double-border">"Why aren't students being evaluated on their school work by industry as well?"</p>
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
					<div class="container">
						<h2>Riipen want's to make a difference</h2>
						<p>and it's simple</p>
						<ol class="flex">
							<li>You sign up</li>
							<li>Create your dashboard</li>
							<li>Customize your profile</li>
							<li>Participate in projects</li>
						</ol>
						<p>Take the opportunity to discover what it's like to be a Riipened...</p>
						<ul class="figures">
							<li>Organizations</li>
							<li>Talents</li>
							<li>Educators</li>
						</ul>
					</div>
				</section>
				<section class="testimonial">
					<div class="container">
						<div class="icon">
					</li>
					<li>
						<div>
							<h2>18%</h2>
							<p>Employers say 18% of students are ready for the job market after graduation</p>
						</div>
					</li>
				</ul>
				<p class="double-border">"Why aren't students being evaluated on their school work by industry as well?"</p>
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
			<div class="container">
				<h2>Riipen want's to make a difference</h2>
				<p>and it's simple</p>
				<ol>
					<li>You sign up</li>
					<li>Create your dashboard</li>
					<li>Customize your profile</li>
					<li>Participate in projects</li>
				</ol>
				<p>Take the opportunity to discover what it's like to be a Riipened...</p>
				<ul class="figures">
					<li>Organizations</li>
					<li>Talents</li>
					<li>Educators</li>
				</ul>
			</div>
		</section>
		<section class="testimonial">
			<div class="container">
				<div class="icon">
				</div>
				<div class="text">
					<p>We did great volunteers through Riipen for our projects. Caitlyn & Carly from Bites of Vitality heard about the social media project through Riipen, applied and we worked with them. Overall we were really happy with our experience and have been spreading the word</p>
					<h3>Amy Robinson, Founder & Co-Executive Director LOCO BC</h3>
				</div>
			</div>
		</section>
		<?php dynamic_sidebar( 'carousels' ); ?>
	</main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>
