<section id="post-<?php the_ID(); ?>">
	<div class="entry-content mt-5">
		<div id="mon-cv" class="mx-3 mt-4">
			<h2 class="mt-0 p-0 text-center">Mon CV</h2>
			<div class="container-fluid">
				<div class="row justify-content-center">
					<div class="col-md-5 col-lg-5 col-xl-5">
						<?php get_template_part('template-parts/page/loop', 'form'); ?>
					</div>
					<div class="col-md-5 col-lg-5 col-xl-5">
						<?php get_template_part('template-parts/page/loop', 'exp'); ?>
					</div>
					<div class="skills-card my-5 py-4 px-0 col-xl-8 col-lg-8">
						<div class="text-center">
							<h3><i class="fa-solid fa-rocket formations-skills"></i> <span class="text-light">Compétences</span></h3>
						</div>
						<div class="text-center">
							<?php get_template_part('template-parts/page/loop', 'tags'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="up" class="d-flex justify-content-end mx-5">
			<a id="button"><i class="fa-solid fa-angles-up fa-2x"></i></a>
		</div>
	</div><!-- .entry-content -->
</section><!-- #post-<?php the_ID(); ?> -->