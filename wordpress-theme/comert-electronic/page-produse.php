<?php get_header(); ?>
<main class="container"><section class="hero"><h1>Catalog produse</h1><p>Produse demonstrative pentru fluxul de one-time purchase.</p></section>
<section class="grid products">
<article class="card"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/keyboard.svg'); ?>" alt="Tastatură mecanică"/><h3>Keyboard K8</h3><p class="price">329 RON</p><button class="btn" onclick="demoCheckout('One-time purchase','Keyboard K8')">Cumpără acum</button></article>
<article class="card"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/camera.svg'); ?>" alt="Cameră"/><h3>Camera C100</h3><p class="price">1199 RON</p><button class="btn" onclick="demoCheckout('One-time purchase','Camera C100')">Cumpără acum</button></article>
<article class="card"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/headphones.svg'); ?>" alt="Căști"/><h3>Sound Air</h3><p class="price">279 RON</p><button class="btn" onclick="demoCheckout('One-time purchase','Sound Air')">Cumpără acum</button></article>
</section></main>
<?php get_footer(); ?>
