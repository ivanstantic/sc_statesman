<?php

add_action('init', 'assign_featured_meta_to_all_posts');
function assign_featured_meta_to_all_posts() {
    // Prevent this from running on every page load.
    if ( get_option('featured_meta_assigned') ) {
        return;
    }

    $all_posts = get_posts(array(
        'post_type' => 'post',
        'posts_per_page' => -1,
        'post_status' => 'any'
    ));

    foreach ($all_posts as $p) {
        $current_value = get_post_meta($p->ID, 'featured', true);
        if ($current_value === '') {
            update_post_meta($p->ID, 'featured', '0');
        }
    }

    // Save an option so we know it ran
    update_option('featured_meta_assigned', true);
}
