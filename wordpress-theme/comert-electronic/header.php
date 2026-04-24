<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="site-header">
  <div class="container nav-wrap">
    <a class="logo" href="<?php echo esc_url(home_url('/')); ?>">Comert Electronic</a>
    <nav>
      <?php
      wp_nav_menu(
          array(
              'theme_location' => 'primary',
              'container'      => false,
              'items_wrap'     => '<ul>%3$s</ul>',
              'fallback_cb'    => 'comert_electronic_fallback_menu',
          )
      );
      ?>
    </nav>
  </div>
</header>
