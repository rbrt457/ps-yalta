<?php

get_header()

/* Template Name: rooms */


?>

<div class="page container">
    <h1 class="page__title">Номера</h1>
    <div class="rooms">
        <?php

        $rooms = get_posts([
            'numberposts' => -1,
            'order'=> 'ASC',
            'category_name' => 'rooms'
        ]);

        foreach ($rooms as $room) {
            setup_postdata($room);
            ?>
            <div class="rooms__item">
                <div class="room">
                    <div class="room__wrapper">
                        <div class="js-room-slider room__slider swiper" >
                            <div class="swiper-wrapper">
                                <?php
                                $imagesId = get_post_meta($room->ID, 'images', false);

                                foreach ($imagesId as $img) { ?>
                                    <div class="swiper-slide">
                                        <img src="<?php
                                        echo wp_get_attachment_image_url($img, 'full'); ?>" alt="">
                                    </div>
                                    <?php
                                } ?>
                            </div>
                        </div>
                    </div>
                    <div class="room__info">
                        <h3 class="room__title h3"><?php
                            echo get_post_meta($room->ID, 'room-title', true) ?></h3>
                        <div class="room__description"><?php
                            echo get_post_meta($room->ID, 'description', true) ?></div>
                    </div>
                </div>
            </div>
            <?php
        }
        wp_reset_postdata(); ?>
    </div>
</div>

<?php
get_footer() ?>

<!--object(WP_Post)#6546 (24) {-->
<!--["ID"]=> int(52)-->
<!--["post_author"]=> string(1) "1"-->
<!--["post_date"]=> string(19) "2023-04-09 18:40:14"-->
<!--["post_date_gmt"]=> string(19) "2023-04-09 15:40:14"-->
<!--["post_content"]=> string(2039) "-->
<!--Описание номера Описание номера Описание номера Описание номера Описание номера Описание номера " ["post_title"]=> string(36) "Номер 1: Стандартный" ["post_excerpt"]=> string(0) "" ["post_status"]=> string(7) "publish" ["comment_status"]=> string(4) "open" ["ping_status"]=> string(4) "open" ["post_password"]=> string(0) "" ["post_name"]=> string(99) "%d0%bd%d0%be%d0%bc%d0%b5%d1%80-1-%d1%81%d1%82%d0%b0%d0%bd%d0%b4%d0%b0%d1%80%d1%82%d0%bd%d1%8b%d0%b9" ["to_ping"]=> string(0) "" ["pinged"]=> string(0) "" ["post_modified"]=> string(19) "2023-04-09 19:26:13" ["post_modified_gmt"]=> string(19) "2023-04-09 16:26:13" ["post_content_filtered"]=> string(0) "" ["post_parent"]=> int(0) ["guid"]=> string(32) "http://robsteds.beget.tech/?p=52" ["menu_order"]=> int(0) ["post_type"]=> string(4) "post" ["post_mime_type"]=> string(0) "" ["comment_count"]=> string(1) "0" ["filter"]=> string(3) "raw" }-->
