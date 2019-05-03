<?php
/*
 *  template for dummy component
 */
?>
<div class="dummy-block">
    <div class="dummy-header">
        <h2><?php the_field('dummy_title'); ?></h2>
    </div>
    <p class="dummy-body"><?php the_field('dummy_body'); ?></p>
    <div class="dummy-meta">
        <span><?php the_field('dummy_meta_1'); ?></span>
        <span><?php the_field('dummy_meta_2'); ?></span>
        <span><?php the_field('dummy_meta_3'); ?></span>
    </div>
</div>