<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="profile" href="https://gmpg.org/xfn/11" />

  <?php wp_enqueue_style('main-styles', get_template_directory_uri() . '/assets/css/index.css') ?>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <nav class="navbar bg-transparent navbar-dark navbar-expand-md" data-v-5ffa900c="">
    <a href="/" target="_self" class="navbar-brand">
      @alberttocastro
    </a>
    <button type="button" aria-label="Toggle navigation" class="navbar-toggler collapsed" aria-expanded="false"
      aria-controls="nav-collapse" style="overflow-anchor: none;">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- <div id="nav-collapse" class="navbar-collapse collapse" style="display:none;"> -->

    <!-- <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a href="/" target="_self" class="nav-link">Home</a>
        </li>
        <li class="nav-item">
          <a href="/curriculum" target="_self" class="nav-link">About me (CV)</a>
        </li>
        <li class="nav-item">
          <a href="/blog/" target="_self" class="nav-link">Articles</a>
        </li>
        <li class="nav-item b-nav-dropdown dropdown" data-v-45d574f1="" id="__BVID__18">
          <a role="button" aria-haspopup="true" aria-expanded="false" href="#" target="_self"
            class="nav-link dropdown-toggle" id="__BVID__18__BV_toggle_">
            <span>Languages</span>
          </a>
          <ul tabindex="-1" class="dropdown-menu" aria-labelledby="__BVID__18__BV_toggle_">
            <li role="presentation" data-v-45d574f1="">
              <a role="menuitem" href="#" target="_self" class="dropdown-item">
                Português
              </a>
            </li>
            <li role="presentation" data-v-45d574f1="">
              <a role="menuitem" href="#" target="_self" class="dropdown-item">
                English
              </a>
            </li>
          </ul>
        </li>
      </ul> -->
    <!-- </div> -->
    <?php /* 
    wp_nav_menu(array(
      'container_class' => 'navbar-collapse collapse',
      'items_wrap' => '<ul id="%1$s" class="%2$s navbar-nav ml-auto">%3$s</ul>'
    )); */ ?>

    <?php

    wp_nav_menu([
      'theme_location' => 'header-menu',
      'container_class' => 'navbar-collapse collapse',
      'items_wrap' => '<ul id="%1$s" class="%2$s navbar-nav ml-auto">%3$s</ul>'
    ]);

    ?>
  </nav>