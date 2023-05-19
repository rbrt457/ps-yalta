<?php

get_header()

/* Template Name: contacts */

?>

<div class="container page">
    <h1 class="page__title"><?php
        the_title() ?></h1>

    <section class="section mb-24">
        <div class="contacts">
            <div class="contacts__item">
                <h4 class="h4">Наш адрес:</h4>
                <a href="<?php the_field('link-to-map', get_option('page_on_front')); ?>" class="link link--red" target="_blank" title="Карта">
                    <span><?php the_field('address', get_option('page_on_front')); ?></span>
                </a>
            </div>
            <div class="contacts__item">
                <h4 class="h4">Наш ресепшен:</h4>
                <a href="tel:<?php the_field('reception-number-clear', get_option('page_on_front')); ?>" class="link link--red" title="Позвонить на ресепшен">
                    <span><?php the_field('reception-number', get_option('page_on_front')); ?></span>
                </a>
            </div>
            <div class="contacts__item">
                <h4 class="h4">Наша почта:</h4>
                <a href="mailto:<?php the_field('email', get_option('page_on_front')); ?>" class="link link--red" title="Написать письмо">
                    <span><?php the_field('email', get_option('page_on_front')); ?></span>
                </a>
            </div>
        </div>

    </section>

    <section class="section">
        <h2 class="h2 h-sm-28 section__title">Близлежащие места</h2>
        <div class="js-yandex-map"><iframe
                src="https://yandex.ru/map-widget/v1/?um=constructor%3Aed5d9b88e486ce1fa45d8d176bb0fb109eb61220784033f8761ecf17a90f2d25&amp;source=constructor"
                width="100%" height="450" frameborder="0"></iframe></div>

    </section>



    <?php
    get_template_part('components/yandex-map/yandex-map') ?>
</div>

<?php
get_footer() ?>

