<?php
/*
 *  template for dummy component
 */
?>
<!-- 1. initial example: <br> tags will be added after spans -->
<div class="dummy-block">
    <div class="dummy-header">
        <h2><?php the_field('dummy_title'); ?></h2>
    </div>
    <p><?php the_field('dummy_body'); ?></p>
    <div class="dummy-meta">
        <span><?php the_field('dummy_meta_1'); ?></span>
        <span><?php the_field('dummy_meta_2'); ?></span>
        <span><?php the_field('dummy_meta_3'); ?></span>
    </div>
</div>
<!-- 2. workaround example: use unordered list in lieu of spans -->
<div class="dummy-block">
    <div class="dummy-header">git st
        <h2><?php the_field('dummy_title'); ?></h2>
    </div>
    <p><?php the_field('dummy_body'); ?></p>
    <ul class="dummy-meta">
        <li><?php the_field('dummy_meta_1'); ?></li>
        <li><?php the_field('dummy_meta_2'); ?></li>
        <li><?php the_field('dummy_meta_3'); ?></li>
    </ul>
</div>
<!-- 3. workaround example: wrap everything with echo/print lines -->
<?php

echo '<div class="dummy-block">';
    echo '<div class="dummy-header">';
        echo '<h2>' . get_field('dummy_title') . '</h2>';
    echo '</div>';
    echo get_field('dummy_body');
    echo '<div class="dummy-meta">';
        echo '<span>' . get_field('dummy_meta_1') . '</span>';
        echo '<span>' . get_field('dummy_meta_2') . '</span>';
        echo '<span>' . get_field('dummy_meta_3') . '</span>';
    echo '</div>';
echo '</div>';

?>
