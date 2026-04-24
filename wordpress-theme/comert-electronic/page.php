<?php get_header(); ?>
<main class="container">
  <?php
  if (have_posts()) {
      while (have_posts()) {
          the_post();
          ?>
          <section class="hero"><h1><?php the_title(); ?></h1></section>
          <section class="card"><?php the_content(); ?></section>
          <?php
      }
  }
  ?>
</main>
<?php get_footer(); ?>
