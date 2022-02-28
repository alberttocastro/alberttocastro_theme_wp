<?php get_header(); ?>

<div id="post-header" class="vw-100 py-1 bgi-cover"
  style="background-image:linear-gradient(0deg, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url(<?php the_post_thumbnail_url() ?>);"
  data-v-b650d318="">
  <div class="container" data-v-b650d318="">
    <div class="post-header my-5" data-v-b650d318="">
      <div class="d-flex justify-content-between mt-3 ml-1" data-v-b650d318="">
        <span id="post-date" data-v-b650d318="">
          <?php echo get_the_date(); ?>
        </span>
      </div>
      <h1 class="mt-2" data-v-b650d318=""><?php the_title(); ?></h1>
      <div>
        <?php foreach (wp_get_post_tags($post->ID) as $tag) : ?>
        <span class="badge badge-pill badge-light text-primary">#<?php echo $tag->name ?></span>
        <?php endforeach ?>
      </div>
      <!-- <a href="/tags/Blog" target="_self"
        class="badge text-primary mr-2 px-2 py-1 badge-white badge-pill" data-v-b650d318="">
        #Blog
      </a><a href="/tags/Portfolio" target="_self" class="badge text-primary mr-2 px-2 py-1 badge-white badge-pill"
        data-v-b650d318="">
        #Portfolio
      </a><a href="/tags/Beginning" target="_self" class="badge text-primary mr-2 px-2 py-1 badge-white badge-pill"
        data-v-b650d318="">
        #Beginning
      </a> -->
    </div>
  </div>
</div>

<div class="shadow-lg pt-5 container" data-v-b650d318="">
  <div class="mb-5 content__default" data-v-b650d318="">
    <?php the_content(); ?>
  </div>
  <hr data-v-b650d318="">

  <?php comments_template() ?>
</div>


<?php get_footer(); ?>