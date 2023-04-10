</main>
<footer class="footer">
    <div class="container">
        <div class="footer__main">
            <div class="footer__logo">
                <img class="footer__logo-icon" src="/wp-content/themes/boutique-ps/assets/images/logo.png">
            </div>
            <div class="footer__navigation">
                <?php
                wp_nav_menu(['menu' => 'footer-menu']) ?>
            </div>
            <div class="footer__payment payment">
                <div class="payment__picture">
                    <img class="payment__icon" src="/wp-content/themes/boutique-ps/assets/images/icon-visa.png" alt="">
                </div>
                <div class="payment__picture">
                    <img class="payment__icon" src="/wp-content/themes/boutique-ps/assets/images/icon-mc.png" alt="">
                </div>
                <div class="payment__picture">
                    <img class="payment__icon" src="/wp-content/themes/boutique-ps/assets/images/icon-mir.png" alt="">
                </div>
                <div class="payment__picture">
                    <img class="payment__icon" src="/wp-content/themes/boutique-ps/assets/images/icon-uniteller.png"
                         alt="">
                </div>
            </div>
            <div class="footer__contacts">
                <?php
                if (get_field('address', get_option('page_on_front'))) { ?>
                    <div class="footer__address">
                        <a href="<?php
                        the_field('link-to-map', get_option('page_on_front')); ?>"
                           class="footer__link link"
                           target="_blank"
                           title="Карта">
                            <svg class="icon">
                                <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#location"></use>
                            </svg>
                            <span><?php
                                the_field('address', get_option('page_on_front')); ?></span>
                        </a>
                    </div>
                    <?php
                } ?>
                <?php
                if (get_field('reception-number', get_option('page_on_front'))) { ?>
                    <div class="footer__phone">
                        <a href="tel:<?php
                        the_field('reception-number-clear', get_option('page_on_front')); ?>" class="footer__link link"
                           title="Позвонить на ресепшен">
                            <svg class="icon">
                                <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#phone"></use>
                            </svg>
                            <span><?php
                                the_field('reception-number', get_option('page_on_front')); ?></span>
                            </a>
                    </div>
                    <?php
                } ?>
                <?php
                if (get_field('email', get_option('page_on_front'))) { ?>
                    <div class="footer__phone">
                        <a href="mailto:<?php
                        the_field('email', get_option('page_on_front')); ?>" class="footer__link link"
                           title="Написать письмо">
                            <svg class="icon">
                                <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#email"></use>
                            </svg>
                            <span>
                                <?php
                                the_field('email', get_option('page_on_front')); ?>
                            </span>
                           </a>
                    </div>
                    <?php
                } ?>
            </div>
            <div class="footer__social">
                <div class="footer__social-item">
                    <a href="https://instagram.com/pryanostistrasti_hotel" target="_blank" title="Перейти в Instagram">
                        <img class="footer__social-icon"
                             src="/wp-content/themes/boutique-ps/assets/images/social-icons/icon-instagram.png"
                             alt="Ins">
                    </a>
                </div>
                <div class="footer__social-item">
                    <a href="https://t.me/#" target="_blank" title="Перейти в Telegram">
                        <img class="footer__social-icon"
                             src="/wp-content/themes/boutique-ps/assets/images/social-icons/icon-telegram.png"
                             alt="Телеграм">
                    </a>
                </div>
                <div class="footer__social-item">
                    <a href="https://wa.me/79788739882" target="_blank" title="Перейти в WhatsApp">
                        <img class="footer__social-icon"
                             src="/wp-content/themes/boutique-ps/assets/images/social-icons/icon-whatsapp.png"
                             alt="Иконка инстаграма">
                    </a>
                </div>
                <div class="footer__social-item">
                    <a href="viber://chat?number=%2B79788739882" target="_blank" title="Перейти в Viber">
                        <img class="footer__social-icon"
                             src="/wp-content/themes/boutique-ps/assets/images/social-icons/icon-viber.png"
                             alt="Иконка инстаграма">
                    </a>
                </div>
                <div class="footer__social-item">
                    <a href="https://www.youtube.com/@user-ir2gm9eq1m" target="_blank" title="Перейти в YouTube">
                        <img class="footer__social-icon"
                             src="/wp-content/themes/boutique-ps/assets/images/social-icons/icon-youtube.png"
                             alt="Иконка инстаграма">
                    </a>
                </div>
            </div>
        </div>
        <div class="footer__copyright">
            <span>© <?php
                echo date("Y"); ?> Бутик-отель "Пряности и Страсти".  Официальный сайт. Все права защищены.</span>
        </div>
    </div>
</footer>
<?php
wp_footer(); ?>
</body>
</html>
