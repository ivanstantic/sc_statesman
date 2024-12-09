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
    register_block_type( __DIR__ . '/prose-wide' );

}


// Add a custom blocks category
add_filter('block_categories_all', 'scs_add_block_categories', 10, 2);

/**
 * Conditionally add a custom block category for posts only.
 *
 * @param array                $categories Existing block categories.
 * @param WP_Block_Editor_Context $context    Editor context.
 * @return array Modified block categories.
 */
function scs_add_block_categories( $categories, $context ) {

    if ( ! isset( $context->post ) || ! is_a( $context->post, 'WP_Post' ) ) {
        return $categories;
    }

    if ( $context->post->post_type === 'post' ) {
        // Add a custom category
        $scstatesman_prose = [
            'slug'  => 'scs-prose',
            'title' => __('SC Statesman Post', 'scs'),
            'icon'  => 'star', // Optional: you can use a Dashicon or custom SVG
        ];

        array_unshift($categories, $scstatesman_prose);
    }

    if ( $context->post->post_type === 'page' ) {
        // Add a custom category
        $scstatesman_page = [
            'slug'  => 'scs-page',
            'title' => __('SC Statesman Page', 'scs'),
            'icon'  => 'star', // Optional: you can use a Dashicon or custom SVG
        ];

        array_unshift($categories, $scstatesman_page);
    }

    return $categories;
}
