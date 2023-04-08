<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <?php
    wp_head(); ?>

    <script type='text/javascript'>
        (function(w) {
            var q = [
                ['setContext', 'TL-INT-ps-yalta', 'ru']
            ];
            var h=["ru-ibe.tlintegration.ru","ibe.tlintegration.ru","ibe.tlintegration.com"];
            var t = w.travelline = (w.travelline || {}),
                ti = t.integration = (t.integration || {});
            ti.__cq = ti.__cq? ti.__cq.concat(q) : q;
            if (!ti.__loader) {
                ti.__loader = true;
                var d=w.document,c=d.getElementsByTagName("head")[0]||d.getElementsByTagName("body")[0];
                function e(s,f) {return function() {w.TL||(c.removeChild(s),f())}}
                (function l(h) {
                    if (0===h.length) return; var s=d.createElement("script");
                    s.type="text/javascript";s.async=!0;s.src="https://"+h[0]+"/integration/loader.js";
                    s.onerror=s.onload=e(s,function(){l(h.slice(1,h.length))});c.appendChild(s)
                })(h);
            }
        })(window);
    </script>
</head>
<body>

<header class="header <?php echo is_front_page() ? '' : 'header--border-shadow'; ?>">
    <div class="header__container container">
        <div class="header__logo">
            <a href="/">
                <img class="header__logo-icon" src="/wp-content/themes/boutique-ps/assets/images/logo.png" alt="">
            </a>
        </div>
        <nav class="header__navigation">
            <?php
            wp_nav_menu() ?>
        </nav>
    </div>
</header>
<main>

