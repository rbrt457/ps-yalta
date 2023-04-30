<?php

get_header()

/* Template Name: menu */

?>

<div class="container page">
    <h1 class="page__title text-center"><?php
        the_title() ?></h1>

    <div class="card mb-24">
        <span>Для гостей отеля предоставляется скидка в размере 25% на всё меню с 9:00 до 12:00, в ресторане "Пряности и Страсти" Апельсин, на территории отеля.</span>
    </div>

    <div class="menu-list foobox">
        <a href="<?php
        echo get_template_directory_uri() ?>/assets/images/menu/menu1.jpg">
            <img src="<?php
            echo get_template_directory_uri() ?>/assets/images/menu/menu1.jpg"
                 class="menu-list__image" alt='Меню ресторана "Пряности и Страсти" Апельсин'>
        </a>
        <a href="<?php
        echo get_template_directory_uri() ?>/assets/images/menu/menu2.jpg">
            <img src="<?php
            echo get_template_directory_uri() ?>/assets/images/menu/menu2.jpg"
                 class="menu-list__image"
                 alt='Меню ресторана "Пряности и Страсти" Апельсин'>
        </a>
    </div>
</div>

<?php
get_footer() ?>
