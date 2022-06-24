<?php $terms = get_the_terms(get_post()->ID, 'tags-projects'); ?>

<ul class="skills m-0">
  <?php foreach ($terms as $term) { ?>
    <?php if (0 != $term->parent) : ?>
      <li><small><span class="skills-item"><?php echo $term->name; ?></span></small></li>
    <?php endif; ?>
  <?php } ?>
</ul>