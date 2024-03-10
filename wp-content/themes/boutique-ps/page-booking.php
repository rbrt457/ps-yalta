<?php

get_header()

/* Template Name: booking */

?>
<div class="container page">
	<h1 class="page__title"><?php the_title() ?></h1>

    <?php if (get_field('booking_info')) : ?>
	    <div class="card content mb-24">
              <?php the_field('booking_info'); ?>
	    </div>
    <?php endif; ?>

    <?php if (get_field('paid_services')) : ?>
	    <div class="section content">
		    <h2 class="h2 h-sm-28 section__title">Платные услуги</h2>

              <?php the_field('paid_services'); ?>
	    </div>
    <?php endif; ?>


	<div class="section">
          <?php
          get_template_part('components/travelline/booking-form/booking-form') ?>
	</div>
</div>

<?php get_footer() ?>
