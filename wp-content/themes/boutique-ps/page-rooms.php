<?php

get_header()

/* Template Name: rooms */


?>

<div class="page container">
    <h1 class="page__title">Номера</h1>
    <div class="rooms">
        <?php
        global $roomId;
        global $roomImages;
        $rooms = get_posts([
            'numberposts' => -1,
            'order' => 'ASC',
            'post_type' => 'rooms'
        ]);

        foreach ($rooms as $room) {
            $roomId = $room->ID;
            $roomImages = get_field('roomImages', $roomId);
            setup_postdata($room);

            ?>
            <div class="rooms__item">

                <div class="room">
                    <div class="room__wrapper">
                        <div class="js-room-slider room__slider swiper">
                            <div class="swiper-wrapper">
                                <?php
                                foreach ($roomImages as $roomImage) { ?>
                                    <div class="room__slide swiper-slide">
                                        <a class="room__image-link foobox" href="<?php
                                        echo $roomImage['url'] ?>">
                                            <img class="room__image" src="<?php
                                            echo $roomImage['url'] ?>" alt="<?php
                                            echo $roomImage['alt'] ?>">
                                        </a>
                                    </div>
                                    <?php
                                } ?>
                            </div>
                        </div>
                    </div>
                    <div class="room__info">
                        <div>
                            <h2 class="room__title h2 h-sm-28"><?php
                                the_field('roomTitle', $roomId); ?></h2>
                            <span class="room__category p5"><?php
                                the_field('roomCategory', $roomId); ?></span>
                        </div>
                        <div class="room__description">
                            <?php
                            the_field('roomDescription', $roomId);

                            ?>

                        </div>
                        <a href="<?php
                        the_permalink($roomId) ?>" class="p2 room__about button button--outline-red button--md"
                           title="Подробнее о номере">О номере</a>
                    </div>
                </div>
            </div>
            <?php
        }
        wp_reset_postdata(); ?>
    </div>
    <?php
    get_template_part('components/yandex-map/yandex-map') ?>
</div>

<?php
get_footer() ?>
