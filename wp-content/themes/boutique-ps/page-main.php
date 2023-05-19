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

        <div class="popular-rooms">

            <?php
            global $roomId;

            $rooms = get_posts([
                'numberposts' => -1,
                'order' => 'ASC',
                'post_type' => 'rooms'
            ]);

            foreach ($rooms as $room) {
                $roomId = $room->ID;
                setup_postdata($room);

                if (get_field('popularRoom', $roomId)) {
                    ?>
                    <a class="popular-rooms__item" href="<?php the_permalink($roomId); ?>" title="<?php the_field('roomTitle', $roomId); ?> | <?php the_field('roomCategory', $roomId); ?>">
                        <div class="popular-rooms__background">
                            <img class="popular-rooms__image" src="<?php the_field('roomImage', $roomId); ?>" alt="Фото номера">
                        </div>
                        <div class="popular-rooms__info">
                            <h4 class="h4"><?php the_field('roomCategory', $roomId); ?></h4>
                        </div>
                    </a>

                    <?php
                }
            }
            wp_reset_postdata(); ?>
        </div>
    </section>

    <?php get_template_part('components/yandex-map/yandex-map') ?>
</div>

<?php
get_footer() ?>
