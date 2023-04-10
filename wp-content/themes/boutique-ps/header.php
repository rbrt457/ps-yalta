<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="/wp-content/themes/boutique-ps/favicon.png" type="image/x-icon">
    <title><?php
        the_title() ?></title>

    <?php
    wp_head(); ?>

    <script type='text/javascript'>
        (function (w) {
            var q = [
                ['setContext', 'TL-INT-ps-yalta', 'ru']
            ];
            var h = ["ru-ibe.tlintegration.ru", "ibe.tlintegration.ru", "ibe.tlintegration.com"];
            var t = w.travelline = (w.travelline || {}),
                ti = t.integration = (t.integration || {});
            ti.__cq = ti.__cq ? ti.__cq.concat(q) : q;
            if (!ti.__loader) {
                ti.__loader = true;
                var d = w.document, c = d.getElementsByTagName("head")[0] || d.getElementsByTagName("body")[0];

                function e(s, f) {
                    return function () {
                        w.TL || (c.removeChild(s), f())
                    }
                }

                (function l(h) {
                    if (0 === h.length) return;
                    var s = d.createElement("script");
                    s.type = "text/javascript";
                    s.async = !0;
                    s.src = "https://" + h[0] + "/integration/loader.js";
                    s.onerror = s.onload = e(s, function () {
                        l(h.slice(1, h.length))
                    });
                    c.appendChild(s)
                })(h);
            }
        })(window);
    </script>
</head>
<body>

<header class="header <?php
echo is_front_page() ? '' : 'header--border-shadow'; ?>">
    <div class="header__container container">
        <div class="header__logo">
            <a href="/" title="Главная страница">
                <picture>
                    <source media="(max-width: 767px)" srcset="<?php
                    echo get_template_directory_uri() ?>/assets/images/logo.png">
                    <source media="(min-width: 768px)" srcset="<?php
                    echo get_template_directory_uri() ?>/assets/images/logo-1.png">
                    <img class="header__logo-icon" src="<?php
                    echo get_template_directory_uri() ?>/assets/images/logo-1.png" alt="Логотип">
                </picture>

            </a>
        </div>
        <nav class="header__navigation">
            <?php
            wp_nav_menu(['menu' => 'main-menu']) ?>
        </nav>
        <div class="header__phone">
            <a href="tel:<?php
            the_field('reception-number-clear'); ?>" class="header__phone-link link" title="Позвонить на ресепшен">
                <svg class="icon">
                    <use xlink:href="<?php
                    echo get_template_directory_uri() ?>/assets/images/sprite.svg#phone"></use>
                </svg>
                <span class="header__phone-number"><?php
                    the_field('reception-number', get_option('page_on_front')); ?></span>
            </a>
            <span class="header__phone-text">Ресепшен</span>
        </div>
        <a class="header__booking button button--red button--md" href="/booking">Забронировать</a>
    </div>
</header>
<main>

