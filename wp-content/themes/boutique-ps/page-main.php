<?php

get_header()

/* Template Name: main */


?>

<div class="main-banner">
    <div class="main-banner__background">
        <img src="<?php
        the_field('main-banner'); ?>" alt="">
    </div>

    <div class="main-banner__logo">
        <img src="/wp-content/themes/boutique-ps/assets/images/logo-stars.png" alt="">
    </div>

    <?php
    get_template_part('components/travelline/block-search/block-search') ?>

</div>

<div class="container">

    <section class="section p2">
        <span class="h4">Бутик-отель "Пряности и страсти" </span>- это уникальный отель, расположенный на набережной города Ялта. Он предлагает
        своим гостям уникальный опыт, сочетающий в себе уют и комфорт.<br><br>

        Отель находится в самом сердце города, на набережной, откуда открывается потрясающий вид на море и горы. Каждая
        комната в отеле оформлена в уникальном стиле. Здесь вы найдете все,
        что нужно для комфортного отдыха: мягкие кровати, мягкие подушки и одеяла, а также бесплатный Wi-Fi и
        отличное обслуживание.<br><br>

        Но самое главное, что делает отель "Пряности и страсти" особенным, — это его атмосфера. Здесь вы почувствуете
        себя как в уютном доме, где каждый уголок наполнен теплом и уютом. В отеле работает ресторан, где вы можете
        насладиться изысканными блюдами местной и европейской кухни, а также выпить бокал вина или коктейль.
    </section>

    <section class="section">
        <h2 class="h2 h-sm-28 section__title">Популярные номера</h2>

        <div class="popular-rooms mb-24">

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
                    <a class="popular-rooms__item" href="<?php
                    the_permalink($roomId); ?>" title="<?php
                    the_field('roomTitle', $roomId); ?> | <?php
                    the_field('roomCategory', $roomId); ?>">
                        <div class="popular-rooms__background">
                            <img class="popular-rooms__image" src="<?php
                            the_field('roomImage', $roomId); ?>" alt="Фото номера">
                        </div>
                        <div class="popular-rooms__info">
                            <h4 class="h4"><?php
                                the_field('roomCategory', $roomId); ?></h4>
                        </div>
                    </a>

                    <?php
                }
            }
            wp_reset_postdata(); ?>
        </div>

        <a href="/rooms" class="button button--outline-red button--md button--max-content">Все номера</a>
    </section>

    <?php
    get_template_part('components/yandex-map/yandex-map') ?>
</div>

<?php
get_footer() ?>
