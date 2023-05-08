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
                        <img src="<?php
                        echo $bannerDetail['url'] ?>"
                             class="room-detail__banner-image" alt="">
                    </div>
                    <?php
                } ?>
            </div>
        </div>
        <div class="container room-detail__banner-content">
            <h1 class="page__title"><?php
                the_field('roomTitle'); ?></h1>
        </div>
        <?php
        get_template_part('components/travelline/block-search/block-search') ?>
    </section>

    <div class="container">
        <div class="room-detail__grid  <?php
        if (get_field('room-equipment', get_the_ID())) { ?>room-detail__grid--two-col<?php
        } ?>">
            <section class="section">
                <h2 class="h2 h-sm-28 section__title">Описание</h2>
                <div class="room-detail__description">
                    <?php
                    echo get_field('roomDescription', get_the_ID()) ?>
                </div>
            </section>
            <?php
            if (get_field('room-equipment', get_the_ID())) { ?>
                <section class="section">
                    <h2 class="h2 h-sm-28 section__title">Оснащение номера</h2>
                    <div class="room-detail__equipment">
                        <?php
                        echo get_field('room-equipment', get_the_ID()); ?>
                    </div>
                </section>
                <?php
            } ?>
        </div>

        <?php
        if (get_field('gallery-detail', get_the_ID())) { ?>
            <section class="section room-detail__gallery">
                <div class="section__title">
                    <h2 class="h2 h-sm-28 ">Фото номера</h2>
                    <div class="slider-control">
                        <button class="slider-control__button slider-control__prev button button--outline-red">
                            <svg class="icon">
                                <use
                                    xlink:href="/wp-content/themes/boutique-ps/assets/images/sprite.svg#collapse-arrow"></use>
                            </svg>
                        </button>
                        <button class="slider-control__button slider-control__next button button--outline-red">
                            <svg class="icon">
                                <use
                                    xlink:href="/wp-content/themes/boutique-ps/assets/images/sprite.svg#collapse-arrow"></use>
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="gallery">
                    <div class="js-gallery-swiper gallery__swiper swiper">
                        <div class="swiper-wrapper">
                            <?php
                            foreach (get_field('gallery-detail', get_the_ID()) as $galleryDetail) { ?>
                                <div class="gallery__slide swiper-slide">
                                    <a href="<?php
                                    echo $galleryDetail['url'] ?>">
                                        <img src="<?php
                                        echo $galleryDetail['url'] ?>" class="gallery__image" alt="">
                                    </a>
                                </div>
                                <?php
                            } ?>
                        </div>
                    </div>
                </div>
            </section>
            <?php
        } ?>
        <?php
        get_template_part('components/yandex-map/yandex-map') ?>
    </div>


</div>

<?php
get_footer() ?>
