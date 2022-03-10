<?php get_header() ?>

<div class="container mt-5 articles-index">


  <?php
  if (have_posts()) :
    while (have_posts()) : the_post(); ?>

  <div class="card my-4 rounded-lg article p-2 bgi-cover"
    style="background-image: linear-gradient(0deg, rgba(29, 29, 29, 0.8), rgba(29, 29, 29, 0.8)), url(<?php the_post_thumbnail_url() ?>)">
    <a href="<?php the_permalink() ?>">
      <div class="last-updated">
        <?php the_date() ?>
      </div>
      <div class="mt-5 title">
        <?php the_title(); ?>
      </div>
      <div>
        <?php foreach (wp_get_post_tags($post->ID) as $tag) : ?>
        <span class="badge badge-pill badge-light text-primary">#<?php echo $tag->name ?></span>
        <?php endforeach ?>
      </div>
    </a>
  </div>

  <?php endwhile; ?>

  <div class="links">
    <?php the_posts_pagination(); ?>
  </div>

  <?php
  else :
    _e('Sorry, no posts matched your criteria.', 'textdomain');
  endif;
  ?>

</div>

<?php get_footer() ?>