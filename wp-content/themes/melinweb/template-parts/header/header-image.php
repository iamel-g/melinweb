<div class="custom-header <?php if(is_front_page()) : ?>banner-front-page<? endif; ?>">

	<div class="custom-header-media">
		<?php the_custom_header_markup(); ?>
	</div>

	<?php get_template_part('template-parts/header/site', 'branding'); ?>

</div><!-- .custom-header -->