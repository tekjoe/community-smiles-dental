<section>
  <div class="container">
    <div class="blog-grid">
      <?php
      $featured_posts = new WP_Query(array('post_type' => "post"));
      if ($featured_posts->have_posts()):
        while ($featured_posts->have_posts()): $featured_posts->the_post();
        ?>
      <div class="card">
        <div class="card__header">
          <?php if (has_post_thumbnail()): ?>
          <?php the_post_thumbnail('medium_large') ?>
          <?php else: ?>
          <img src="<?php echo get_template_directory_uri() . '/images/';?>blog-post-placeholder.jpg"
            alt="Community Smiles Dental Logo" class="feature__image" />
          <?php endif; ?>
        </div>
        <div class="card__body">
          <p class="title"><?php echo the_title(); ?></p>
          <p class="description"><?php echo the_excerpt(); ?></p>
          <a href="<?php echo the_permalink(); ?>" class="button">Read more</a>
        </div>
      </div>
      <?php endwhile;
      endif;
      wp_reset_postdata();
      ?>
    </div>
</section>