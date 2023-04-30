<?php
get_header()

/* Template Name: booking */

?>

<div class="container page">
    <h1 class="page__title"><?php the_title()?></h1>

    <div class="card mb-24">
        <span>Для гостей отеля предоставляется скидка в размере 25% на всё <a href="/menu" class="link link--red link--bold">меню</a>  с 9:00 до 12:00, в ресторане "Пряности и Страсти" Апельсин, на территории отеля.</span>
    </div>

    <?php
    get_template_part('components/travelline/booking-form/booking-form') ?>
</div>

<?php
get_footer() ?>
