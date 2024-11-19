<?php

/**
 * We use WordPress's init hook to make sure
 * our blocks are registered early in the loading
 * process.
 *
 * @link https://developer.wordpress.org/reference/hooks/init/
 */
add_action( 'init', 'hc_register_acf_blocks' );

function hc_register_acf_blocks() {
    /**
     * We register our block's with WordPress's handy
     * register_block_type();
     *
     * @link https://developer.wordpress.org/reference/functions/register_block_type/
     */
    // register_block_type( __DIR__ . '/block' );
}


// Add a custom blocks category
add_filter('block_categories_all', 'hc_add_block_categories', 10, 2);

function hc_add_block_categories($categories, $post) {
    // Add a custom category
    $heartcount = [
        'slug'  => 'heartcount',
        'title' => __('HeartCount', 'textdomain'),
        'icon'  => 'star', // Optional: you can use a Dashicon or custom SVG
    ];

    array_unshift($categories, $heartcount);

    return $categories;
}
