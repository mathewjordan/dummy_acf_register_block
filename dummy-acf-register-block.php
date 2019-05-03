<?php

/*
Plugin Name: Dummy Plugin (ACF Register Blocks Issue)
Plugin URI:
Description:
Version: 0.1
Author: mat@utk.edu
Author URI: https://lib.utk.edu
*/

function acf_register_blocks_dummy() {

    if( function_exists('acf_register_block') ) {

        acf_register_block(array(
            'name'              => 'dummy',
            'title'             => __('Dummy'),
            'description'       => __('A sample block to demo.'),
            'render_callback'   => 'acf_register_blocks_dummy_callback',
            'category'          => 'formatting',
            'keywords'          => array('dummy'),
            'supports'          => array('align' => false)
        ));

    }

}

function acf_register_blocks_dummy_callback( $block ) {

    // convert name into path friendly slug
    $slug = str_replace('acf/', '', $block['name']);

    // include a template
    if( file_exists( dirname(__FILE__) . "/templates/block-{$slug}.php") ) {
        include( dirname(__FILE__) . "/templates/block-{$slug}.php" );
    }

}


add_action('admin_enqueue_scripts', function () {
    wp_enqueue_style(
        'dummy.css',
        plugin_dir_url(__FILE__) . '/dummy.css',
        false,
        null);
});

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style(
        'dummy.css',
        plugin_dir_url(__FILE__) . '/dummy.css',
        false,
        null);
});

add_action('acf/init', 'acf_register_blocks_dummy');

add_filter('render_block', function ($block_content, $block) {
    if ( 'acf/directory' === $block['blockName'] ) {
        //
    }
    return $block_content;
}, 10, 2);