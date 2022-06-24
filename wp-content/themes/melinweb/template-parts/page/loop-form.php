<?php
$formations_query = new WP_Query(
  array(
    'post_type' => 'formations',
  ),
);
?>
<h3 class="mb-5 mt-5 pb-2"><i class="fa-solid fa-graduation-cap formations-skills"></i> Formations</h3>
<?php while ($formations_query->have_posts()) : $formations_query->the_post(); ?>
  <div class="card mb-4">
    <div class="card-body px-1">
      <div class="py-0 px-2">
        <h5 class="card-title"><?php echo the_title(); ?> <i class="fa-solid fa-circle-notch"></i>
          <?php echo get_post_meta($post->ID, 'formation_school', true); ?>
        </h5>
        <?php if (has_excerpt()) : ?>
          <p class="date"><?php echo get_post_meta($post->ID, 'formation_date', true); ?></p>
          <div class="form-excerpt"><?php echo the_excerpt() ?></div>
        <?php else : ?>
          <p class="mb-0"><?php echo get_post_meta($post->ID, 'formation_date', true); ?></p>
        <?php endif; ?>
        <?php if (get_post_meta($post->ID, 'certificate')) : ?>
          <p class="mb-0 mt-3"><span class="mention"><?php echo get_post_meta($post->ID, 'certificate', true); ?></span></p>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <?php
  wp_reset_postdata(); ?>
<?php endwhile; ?>