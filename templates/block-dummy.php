<?php
/*
 *  template for dummy component
 */
?>
<div class="dummy-block">
    <div class="dummy-header">
        <h2><?php the_field('dummy_title'); ?></h2>
    </div>
    <div class="dummy-meta">
        <span><?php the_field('dummy_meta_1'); ?></span>
        <span><?php the_field('dummy_meta_2'); ?></span>
        <span><?php the_field('dummy_meta_3'); ?></span>
    </div>
</div>
<div class="dummy-block">
    <div class="dummy-header">
        <h2><?php the_field('dummy_title'); ?></h2>
    </div>
    <ul class="dummy-meta">
        <li><?php the_field('dummy_meta_1'); ?></li>
        <li><?php the_field('dummy_meta_2'); ?></li>
        <li><?php the_field('dummy_meta_3'); ?></li>
    </ul>
</div>
<?php

echo '<div class="dummy-block">';
    echo '<div class="dummy-header">';
        echo '<h2>' . get_field('dummy_title') . '</h2>';
    echo '</div>';
    echo '<div class="dummy-meta">';
        echo '<span>' . get_field('dummy_meta_1') . '</span>';
        echo '<span>' . get_field('dummy_meta_2') . '</span>';
        echo '<span>' . get_field('dummy_meta_3') . '</span>';
    echo '</div>';
echo '</div>';

?>
