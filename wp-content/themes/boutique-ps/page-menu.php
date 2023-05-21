<?php

get_header()

/* Template Name: menu */

?>

<div class="container page">
    <h1 class="page__title"><?php
        the_title() ?></h1>

    <section class="section section--mb-40">
        <p>На территории отеля расположен ресторан
            <a href="https://apelsincafe.com/restaurant/pryanosti-i-strasti/"
               class="link link--bold link--red" target="_blank"
               title="Апельсин 'Пряности и Страсти'">
                Апельсин "Пряности и Страсти"</a>.
            Меню сочетает в себе локальную Крымскую кухню, Кавказскую и Европейскую.
            Работает ежедневно с 10:00 утра до 23:00.</p>
    </section>

    <section class="section">
        <h2 class="h2 h-sm-28 section__title">Меню ресторана</h2>
        <div class="card mb-24">
            <span><b>Завтраки:</b> Для гостей отеля предоставляется скидка в размере 25% на всё меню с 10:00 до 12:00, в ресторане "Пряности и Страсти" Апельсин, на территории отеля.</span>
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
    </section>
</div>

<?php
get_footer() ?>
