<?php

function hc_excerpt_length($length) {
    return 100; // Set the number of words for the excerpt
}
add_filter('excerpt_length', 'hc_excerpt_length', 999);




/**
 * Adds a custom class to the admin body tag based on post type.
 *
 * @param string $classes Existing body classes.
 * @return string Modified body classes.
 */
function add_editor_post_type_class( $classes ) {
    // Get the current screen object
    $screen = get_current_screen();

    if ( ! $screen ) {
        return $classes; // Exit if not in an admin screen
    }

    // Check if we're in the block editor (Gutenberg)
    if ( 'post' !== $screen->base ) {
        return $classes; // Exit if not in post editing screen
    }

    // Determine the post type
    $post_type = $screen->post_type;

    if ( 'post' === $post_type ) {
        $classes .= ' editing-post';
    } elseif ( 'page' === $post_type ) {
        $classes .= ' editing-page';
    } else {
        $classes .= ' editing-' . esc_attr( $post_type );
    }

    return $classes;
}
add_filter( 'admin_body_class', 'add_editor_post_type_class' );

