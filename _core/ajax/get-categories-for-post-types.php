<?php

add_action( 'wp_ajax_get_categories_for_post_types', 'ajax_get_categories_for_post_types' );
add_action( 'wp_ajax_nopriv_get_categories_for_post_types', 'ajax_get_categories_for_post_types' );

function ajax_get_categories_for_post_types() {
    // Check if post types are provided
    if (empty($_POST['post_types'])) {
        wp_send_json_error('No post types provided.');
        return;
    }

    // Decode and sanitize the post_types array
    $post_types = json_decode(stripslashes($_POST['post_types']), true);

    // Validate that post_types is an array
    if (!is_array($post_types) || empty($post_types)) {
        wp_send_json_error('Invalid format for post types.');
        return;
    }

    // Sanitize and process the post types array
    $post_types = array_map('sanitize_text_field', $post_types);

    // Get categories for post types
    $categories_list = get_categories_for_post_types($post_types);

    wp_send_json_success( array('categories' => $categories_list) ); // Return categories if found
}
