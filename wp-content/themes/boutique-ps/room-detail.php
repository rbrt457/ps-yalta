<?php

get_header()

/*
Template Name: room-detail
Template post type: rooms
 */

?>
<div class="page room-detail">
    <section class="room-detail__banner">

        <div class="room-detail__banner-swiper swiper js-room-detail-swiper">
            <div class="swiper-wrapper">
                <?php
                foreach (get_field('banner-detail', get_the_ID()) as $bannerDetail) { ?>
                    <div class="room-detail__banner-slide swiper-slide">
                        <img src="<?php echo $bannerDetail['url'] ?>"
                             class="room-detail__banner-image" alt="">
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="container room-detail__banner-content">
            <h1 class="page__title"><?php the_field('roomTitle'); ?></h1>
        </div>
        <?php get_template_part('components/travelline/block-search/block-search') ?>
    </section>

    <div class="container">
        <div class="room-detail__two-columns">
            <section class="section">
                <h2 class="h2 h-sm-28 section__title">Описание</h2>
                <div class="room-detail__description">
                    <?php echo get_field('roomDescription', get_the_ID()) ?>
                </div>
            </section>
            <section class="section">
                <h2 class="h2 h-sm-28 section__title">Оснащение номера</h2>
                <div class="room-detail__equipment">
                    <?php echo get_field('room-equipment', get_the_ID()); ?>
                </div>
            </section>
        </div>

        <?php if (get_field('gallery-detail', get_the_ID())) { ?>
            <section class="section room-detail__gallery">

                <h2 class="h2 h-sm-28 section__title">Фото номера</h2>
                <div class="gallery">
                    <div class="js-gallery-swiper gallery__swiper swiper">
                        <div class="swiper-wrapper">
                            <?php
                            foreach (get_field('gallery-detail', get_the_ID()) as $galleryDetail) { ?>
                                <div class="gallery__slide swiper-slide">
                                    <a href="<?php echo $galleryDetail['url'] ?>">
                                        <img src="<?php echo $galleryDetail['url'] ?>" class="gallery__image" alt="">
                                    </a>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php } ?>
        <?php get_template_part('components/yandex-map/yandex-map') ?>
    </div>


</div>

<?php
get_footer() ?>
