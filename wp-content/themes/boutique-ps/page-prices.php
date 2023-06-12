<?php

get_header()

/* Template Name: prices */


?>


<div class="container">
    <h1 class="page__title"><?php
        the_title() ?></h1>
    <br>
    <?php
    get_template_part('components/yandex-map/yandex-map') ?>
</div>

<?php
get_footer() ?>
