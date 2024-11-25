<?php

/**
 * We use WordPress's init hook to make sure
 * our blocks are registered early in the loading
 * process.
 *
 * @link https://developer.wordpress.org/reference/hooks/init/
 */
add_action( 'init', 'scs_register_acf_blocks' );

function scs_register_acf_blocks() {
    /**
     * We register our block's with WordPress's handy
     * register_block_type();
     *
     * @link https://developer.wordpress.org/reference/functions/register_block_type/
     */
    register_block_type( __DIR__ . '/posts' );
}


// Add a custom blocks category
add_filter('block_categories_all', 'scs_add_block_categories', 10, 2);

function scs_add_block_categories($categories, $post) {
    // Add a custom category
    $scstatesman = [
        'slug'  => 'scs',
        'title' => __('SC Statesman', 'scs'),
        'icon'  => 'star', // Optional: you can use a Dashicon or custom SVG
    ];

    array_unshift($categories, $scstatesman);

    return $categories;
}
