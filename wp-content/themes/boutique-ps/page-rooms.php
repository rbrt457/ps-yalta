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

                    <div class="room__image-link">
                        <img class="room__image" src="<?php
                        the_field('roomImage', $roomId); ?>" alt="Фото номера">
                    </div>

                    <div class="room__info">
                        <div>
                            <h2 class="room__title h2 h-sm-28"><?php
                                the_field('roomTitle', $roomId); ?> | <?php
                                the_field('roomCategory', $roomId); ?></h2>
                            <span class="room__category p5"><?php
                                the_field('roomCategoryNumber', $roomId); ?></span>
                        </div>
                        <div class="room__description">
                            <?php
                            the_field('roomDescription', $roomId);

                            ?>

                        </div>
                        <div class="room__buttons">
                            <a href="<?php
                            the_permalink($roomId) ?>" class="button button--sm button--outline-red" title="О номере">О номере</a>
                            <a href="<?php echo get_site_url(null,'/booking/'); ?><?php  the_field('booking-link', $roomId); ?>"
                               class="button button--sm button--red" title="Забронировать">Забронировать номер</a>
                        </div>
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
