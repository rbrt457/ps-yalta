<?php

get_header()

/* Template Name: contacts */

?>

<div class="container page">
    <h1 class="page__title"><?php the_title() ?></h1>

    <div class="contacts">

    </div>
    <iframe class="mb-24"
            src="https://yandex.ru/map-widget/v1/?um=constructor%3Aed5d9b88e486ce1fa45d8d176bb0fb109eb61220784033f8761ecf17a90f2d25&amp;source=constructor"
            width="100%" height="450" frameborder="0"></iframe>
    <?php
    get_template_part('components/yandex-map/yandex-map') ?>
</div>

<?php
get_footer() ?>
