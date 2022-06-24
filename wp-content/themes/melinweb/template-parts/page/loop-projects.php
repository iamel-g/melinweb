<?php
$projects_query = new WP_Query(
  array(
    'post_type' => 'projects',
  ),
);
?>
<?php while ($projects_query->have_posts()) : $projects_query->the_post(); ?>
  <div class="card col-md-4 col-lg-3 col-xl-2 m-4 py-2">
    <h5 class="card-title"><?php echo the_title(); ?></h5>
    <div>
      <div class="img-proj mb-2">
        <?php the_post_thumbnail() ?>
      </div>
      <div class="card-body p-0">
        <div class="row mx-0 py-0 px-2">
          <div class="p-0">
            <div class="text-end">
              <div class="row m-0 meta-formation">
                <small>
                  <h5 class="m-0">Formation</h5>
                </small>
                <small><?php echo get_post_meta($post->ID, 'projets-formation', true); ?></small>
              </div>
            </div>
          </div>
        </div>
        <div class="row mx-0 align-items-center">
          <div class="col-lg-6 p-1">
            <div class="m-0">
              <p class="m-0"><?php echo the_excerpt(); ?></p>
            </div>
          </div>
          <div class="p-1">
            <div class="proj-links text-center mt-2">
              <?php
              $tags = get_the_terms(get_post(), 'tags-projects');
              $tag;
              foreach ($tags as $key => $item) {
                // var_dump($item->slug);
                $tag = $item;
              ?>
              <?php  } ?>

              <?php if ($tag->slug == 'wordpress') : ?>
                <a href="<?php echo get_post_meta($post->ID, 'projets-lien', true); ?>" target="_blank"><i class="fa-solid fa-link link-icon"></i></a>
              <?php else : ?>
                <a href="<?php echo get_post_meta($post->ID, 'projets-lien-gitlab', true); ?>" target="_blank"><i class="fa-brands fa-gitlab link-icon"></i></a>
              <?php endif; ?>
            </div>
          </div>
          <div class="tags p-0 mt-3">
            <div class="d-flex justify-content-center">
              <?php get_template_part('template-parts/page/loop-projects', 'tags'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
  wp_reset_postdata(); ?>
<?php endwhile; ?>