<div class="d-flex align-items-center fpc-container" style="background-color:#3E213D;">
  <div class="container">
    <div class="d-flex mb-3" data-v-1d55354a="">
      <div class="flex-grow-1 flex-shrink-1 d-flex align-items-center" data-v-1d55354a="">
        <div class="line" data-v-1d55354a=""></div>
      </div>
      <div class="flex-grow-1 text-center title" data-v-1d55354a="">
        <h3 data-v-1d55354a="">
          <p data-v-1d55354a="">The website</p>
        </h3>
      </div>
      <div class="flex-grow-1 flex-shrink-1 d-flex align-items-center" data-v-1d55354a="">
        <div class="line" data-v-1d55354a=""></div>
      </div>
    </div>
    <div class="subtitle">
      <h2 id="articles">Artigos</h2>
      <p>Dicas, opinião e conhecimento</p>
    </div>
    <div class="front-articles">
      <?php $posts = wp_get_recent_posts(['numberposts' => 4, 'post_status' => 'publish'], 'array'); ?>
      <?php foreach ($posts as $post) : ?>
      <div class="card rounded-lg mb-2 bgi-cover"
        style="background-image:linear-gradient(0deg, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url(<?php echo get_the_post_thumbnail_url($post) ?>);"
        data-v-5fb21a18="">
        <a href="<?php echo get_the_permalink($post) ?>" data-v-5fb21a18="">
          <div class="p-0" data-v-5fb21a18="">
            <div class="text-center date" data-v-5fb21a18="">
              <p data-v-5fb21a18=""><?php echo get_the_date(null, $post) ?></p>
            </div>
            <div class="text-center title" data-v-5fb21a18="">
              <p data-v-5fb21a18=""><?php echo get_the_title($post) ?></p>
            </div>
          </div>
        </a>
      </div>
      <?php endforeach; ?>
    </div>
    <div class="subtitle">
      <h2 id="portfolio">Portfolio</h2>
      <p>Projetos que estou trabalhando</p>
    </div>
    <div class="card rounded-lg mb-2 pt-3"
      style="background-image:linear-gradient(0deg, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url(https://bl6pap003files.storage.live.com/y4m9rE5ly-7byhq1aYx7VvgOyQIzKenEo3LucY-kqX13-QNQ68T26yXEps_J9tqvko-ZXfIZ_mIG-94GfnEqyKCp5rnQ4tLE6USDDhf-WVPIdHfH2-cn32PLb2g09toFacNVV7bFb3lx4XrVjq1pjr1mUFGJ1GZeo1RH49-T_yAhy1MBboYKhU8hIKU9D7Ld9um?width=1920&amp;height=2880&amp;cropmode=none);"
      data-v-5fb21a18="">
      <a data-v-5fb21a18="">
        <div class="p-0" data-v-5fb21a18="">
          <div class="text-center date" data-v-5fb21a18=""></div>
          <div class="text-center title" data-v-5fb21a18="">
            <p data-v-5fb21a18=""><span data-v-5fb21a18=""><em data-v-5fb21a18="">Em construção...</em></span></p>
          </div>
        </div>
      </a>
    </div>
  </div>
</div>