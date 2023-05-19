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
            <a class="rooms__item" href="<?php
            the_permalink($roomId) ?>">

                <div class="room">

                    <div class="room__image-link">
                        <img class="room__image" src="<?php the_field('roomImage', $roomId); ?>" alt="Фото номера">
                    </div>

                    <div class="room__info">
                        <div>
                            <h2 class="room__title h2 h-sm-28"><?php the_field('roomTitle', $roomId); ?> | <?php the_field('roomCategory', $roomId); ?></h2>
                            <span class="room__category p5"><?php
                                the_field('roomCategoryNumber', $roomId); ?></span>
                        </div>
                        <div class="room__description">
                            <?php
                            the_field('roomDescription', $roomId);

                            ?>

                        </div>

                    </div>
                </div>
            </a>
            <?php
        }
        wp_reset_postdata(); ?>
    </div>
    <?php
    get_template_part('components/yandex-map/yandex-map') ?>
</div>

<?php
get_footer() ?>
