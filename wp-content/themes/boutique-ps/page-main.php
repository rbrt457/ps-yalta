<?php

get_header()

/* Template Name: main */


?>

<div class="main-banner">
    <div class="main-banner__background">
        <img src="<?php the_field('main-banner'); ?>" alt="">
    </div>

    <div class="main-banner__logo">
        <img src="/wp-content/themes/boutique-ps/assets/images/logo-stars.png" alt="">
    </div>

    <?php get_template_part('components/travelline/block-search/block-search') ?>

</div>

<div class="container">
    <section class="section">
        <h2 class="h2 h-sm-28 section__title">Популярные номера</h2>
    </section>

    <?php get_template_part('components/yandex-map/yandex-map') ?>
</div>

<?php
get_footer() ?>
