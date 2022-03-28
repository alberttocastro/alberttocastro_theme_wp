<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="profile" href="https://gmpg.org/xfn/11" />

  <?php wp_enqueue_style('main-styles', get_template_directory_uri() . '/assets/css/index.css') ?>

  <?php wp_head(); ?>

  <?php get_template_part('template-parts/gsitetag'); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <nav class="navbar bg-transparent navbar-dark navbar-expand-md" data-v-5ffa900c="">
    <a href="/" target="_self" class="navbar-brand">
      @alberttocastro
    </a>
    <button type="button" aria-label="Toggle navigation" class="navbar-toggler" aria-expanded="false"
      aria-controls="nav-collapse" data-toggle="collapse" data-target="#nav-collapse" style="overflow-anchor: none;">
      <span class="navbar-toggler-icon"></span>
    </button>
    <?php

    wp_nav_menu([
      'theme_location' => 'header-menu',
      'container_class' => 'navbar-collapse collapse',
      'container_id' => 'nav-collapse',
      'items_wrap' => '<ul id="%1$s" class="%2$s navbar-nav ml-auto">%3$s</ul>'
    ]);

    ?>
  </nav>