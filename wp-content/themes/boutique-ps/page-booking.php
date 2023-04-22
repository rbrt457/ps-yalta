<?php
get_header()

/* Template Name: booking */

?>

<div class="container page">
    <h1 class="page__title"><?php the_title()?></h1>

    <?php get_template_part('components/travelline/booking-form/booking-form') ?>
</div>

<?php
get_footer() ?>
