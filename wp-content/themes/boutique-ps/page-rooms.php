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
                                        <a class="room__image-link foobox" href="<?php echo $roomImage['url'] ?>">
                                            <img class="room__image" src="<?php echo $roomImage['url'] ?>" alt="<?php
                                            echo $roomImage['alt'] ?>">
                                        </a>
                                    </div>
                                    <?php
                                } ?>
                            </div>
                        </div>
                    </div>
                    <div class="room__info">
                        <h3 class="room__title h3"><?php
                            the_field('roomTitle', $roomId); ?></h3>
                        <div class="room__description">
                            <?php
                            the_field('roomDescription', $roomId);

                            ?>

                        </div>
                        <a href="<?php the_permalink($roomId) ?>">Подробнее</a>
                    </div>
                </div>
            </div>
            <?php
        }
        wp_reset_postdata(); ?>
    </div>
    <?php get_template_part('components/yandex-map/yandex-map') ?>
</div>

<?php
get_footer() ?>
