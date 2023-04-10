<?php

get_header()

/*
Template Name: room-detail
Template post type: rooms
 */

?>
<div class="page ">
    <div class="container">
        <h1 class="page__title"><?php
            the_field('roomTitle'); ?></h1>
    </div>
</div>

<?php
get_footer() ?>
