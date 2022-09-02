<article id="post-<?php the_ID(); ?>">
	<div class="entry-content">
		<div class="container">
			<div class="mb-5 mt-5 pb-5 text-center">
				<div class="avatar-img mb-2">
					<img src="<?php bloginfo('url'); ?>/wp-content/themes/melinweb/assets/images/avatar_twitter.png" alt="Avatar" class="img-fluid">
				</div>
				<div>
					<h1 class="m-0 first-last-name"><span class="firstname">Melissa</span> GALVAN</h1>
				</div>
				<div>
					<p class="intro">
						Développeuse Web Jr.
					</p>
					<p class="m-0">Après une formation de 7 mois au développement web, j'obtiens mon titre professionnel de développeur web et web mobile via une alternance de 11 mois avec le centre <a href="https://simplon.co" target="_blank">Simplon.co</a>.</p>
				</div>
			</div>
		</div>

		<div class="pb-5 mt-0 mb-5">
			<hr id="mon-cv" class="anchor mt-0 p-0">
			<div class="mx-4">
				<h2 class="mb-5 mt-0 p-0">Mon CV</h2>
				<div class="row m-0 pb-5 justify-content-around">
					<div class="col-md-5 col-lg-5 col-xl-5">
						<?php get_template_part('template-parts/page/loop', 'form'); ?>
					</div>
					<div class="col-md-5 col-lg-5 col-xl-5">
						<?php get_template_part('template-parts/page/loop', 'exp'); ?>
					</div>
				</div>
			</div>
			<div class="container-fluid bg-dark px-3 py-5 col-md-7 col-lg-6 col-xl-5 mt-5">
				<div class="text-center">
					<h3><i class="fa-solid fa-rocket formations-skills"></i> <span class="text-light">Compétences</span></h3>
				</div>
				<div class="text-center">
					<?php get_template_part('template-parts/page/loop', 'tags'); ?>
				</div>
			</div>
		</div>
		<div class="py-3 mb-5 mx-4">
			<hr id="projets" class="anchor m-0 p-0">
			<h2 class="mb-5 sm-mt-4 mt-0 p-0">Projets</h2>
			<div class="row m-0 justify-content-evenly">
				<?php get_template_part('template-parts/page/loop', 'projects'); ?>
			</div>
		</div>

		<div class="py-3 mb-5">
			<hr id="contact" class="anchor m-0 p-0">
			<div class="mx-4">
				<h2 class="mb-5 sm-mt-4 p-0">Contact</h2>
				<div class="row justify-content-center m-0">
					<div class="col-md-6 col-lg-6">
						<h3 class="mb-5">Laissez-moi un message !</h3>
						<div>
							<?php echo do_shortcode('[contact-form-7 id="553" title="Contact form 1"]'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->