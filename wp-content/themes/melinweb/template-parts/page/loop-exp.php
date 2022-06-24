<?php
$experiences_query = new WP_Query(
  array(
    'post_type' => 'experiences',
  ),
);
?>
<h3 class="mb-5 mt-5 pb-2"><i class="fa-solid fa-briefcase formations-skills"></i> Expériences professionnelles</h3>
<?php while ($experiences_query->have_posts()) : $experiences_query->the_post(); ?>
  <div class="card mb-4">
    <div class="card-body px-1">
      <div class="py-0 px-2">
        <h5 class="card-title"><?php echo the_title(); ?> <i class="fa-solid fa-circle-notch"></i> <?php echo get_post_meta($post->ID, 'experience_status', true); ?></h5>
        <div class="date"><?php echo get_post_meta($post->ID, 'experience_date', true); ?></div>
        <div><small><?php echo get_post_meta($post->ID, 'experience_type', true); ?></small></div>
        <div class="form-excerpt mt-3"><?php echo the_excerpt() ?></div>
      </div>
    </div>
  </div>
  <?php
  wp_reset_postdata(); ?>
<?php endwhile; ?>