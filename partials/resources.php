    <?php if (get_field('resource_list', 'option')): ?>
    <div class="resources">
      <span class="resources__title">Related Resources</span>
      <ul class="resources__list">
        <?php while (have_rows('resource_list', 'option')): the_row(); ?>
        <li><a href="<?php the_sub_field('file'); ?>"> <?php the_sub_field('name'); ?></a></li>
        <?php endwhile; ?>
      </ul>
    </div>
    <?php endif; ?>