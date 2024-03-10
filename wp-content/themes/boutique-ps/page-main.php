<?php

get_header()

/* Template Name: main */


?>

<div class="main-banner">
	<div class="main-banner__background">
		<img src="<?php
            the_field('main-banner'); ?>" alt="">
	</div>
	
	<div class="main-banner__content">
		<div class="main-banner__logo">
			<img src="/wp-content/themes/boutique-ps/assets/images/logo.png" alt="Логотип">
		</div>

          <?php get_template_part('components/travelline/block-search/block-search') ?>


          <?php if (get_field('info_under_module')) : ?>
		    <div class="container content">
			    <div class="main-booking-info">
                          <?php the_field('info_under_module'); ?>
			    </div>
		    </div>
          <?php endif; ?>
	</div>

</div>

<div class="container">

    <?php if (get_field('about_hotel')) : ?>
	    <section class="section content">
              <?php the_field('about_hotel'); ?>
	    </section>
    <?php endif; ?>

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

	<section class="section beach gallery">
		<div class="section__title">
			<h2 class="h2 h-sm-28 ">Пляж</h2>
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

		<div class="js-beach swiper gallery__swiper">
			<div class="swiper-wrapper">
                      <?php foreach (get_field('beach_photo') as $image) { ?>
				    <div class="swiper-slide">
					    <a href="<?php echo $image ?>" class="foobox">
						    <img src="<?php echo $image ?>" alt="Пляж 'Hungry Bird'" class="gallery__image">
					    </a>
				    </div>
                      <?php } ?>
			</div>
		</div>
	</section>

    <?php
    get_template_part('components/yandex-map/yandex-map') ?>
</div>

<?php
get_footer() ?>
