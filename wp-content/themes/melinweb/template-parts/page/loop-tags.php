<?php

// Get parents terms
$tags = get_terms(array(
  'taxonomy' => 'tags-projects',
  'parent' => 0,
  'orderby' => 'slug',
  'hide_empty' => false
));
?>
<div class="row justify-content-center">
  <?php foreach ($tags as $key => $item) { ?>
    <div class="col-md-6 col-xl-4 col-lg-4 mb-4">
      <h4 class="text-light"><?php echo $item->name; ?></h4>
      <ul class="row skills m-0">
        <?php // Get childrens per term
        $terms = get_terms(array('taxonomy' => 'tags-projects', 'parent' => $item->term_id, 'orderby' => 'slug', 'hide_empty' => false));
        ?>
        <li>
          <ul class="m-0">
            <?php foreach ($terms as $key => $term) { ?>
              <li><span class="skills-item"><?php echo $term->name; ?></span></li>
            <?php } ?>
          </ul>
        </li>

      </ul>
    </div>
  <?php } ?>
</div>