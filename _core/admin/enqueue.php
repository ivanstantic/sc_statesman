<?php

// Enqueue admin specific assets
add_action('admin_enqueue_scripts', 'hc_enqueue_admin_editor_assets');

function hc_enqueue_admin_editor_assets($hook_suffix) {
    global $post;

    // Only add styles on post editing pages
    if (in_array($hook_suffix, ['post.php', 'post-new.php'])) {
        // Get the current screen to determine if it's post or page
        $screen = get_current_screen();

        if ( isset( $post ) ) {
            $page_template = get_post_meta( $post->ID, '_wp_page_template', true );
            if ( $screen->post_type === 'page' && !empty( $page_template ) ) {
                hc_enqueue_admin_modules_style();
            } else {
                hc_enqueue_admin_prose_style();
            }
        }
    }

    hc_enqueue_admin_script();
}

// Enqueue admin specific styles and scripts
add_action('enqueue_block_assets', 'hc_enqueue_block_editor_assets');

function hc_enqueue_block_editor_assets($hook_suffix) {
    hc_enqueue_admin_modules_style();
    hc_enqueue_admin_script();
}


// Enqueue assets wrappers
function hc_enqueue_admin_modules_style() {
    wp_enqueue_style(
        'hc-admin-page-css',
        get_template_directory_uri() . '/_assets/public/css/admin/page.css',
        [],
        wp_get_theme()->get( 'Version' ),
        true
    );
}

function hc_enqueue_admin_prose_style() {
    wp_enqueue_style(
        'hc-admin-post-css',
        get_template_directory_uri() . '/_assets/public/css/admin/prose.css',
        [],
        wp_get_theme()->get( 'Version' ),
        true
    );
}

function hc_enqueue_admin_script() {
    wp_enqueue_script(
        'hc-admin-script',
        get_stylesheet_directory_uri() . '/_assets/public/js/admin/script.js',
        ['wp-edit-post', 'wp-data'],
        wp_get_theme()->get( 'Version' ),
        true
    );

    wp_localize_script( 'hc-admin-script', 'acfDynamicData', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'fields' => array(
            'categories' => 'get_categories_for_post_types',
            'tags' => 'get_tags_for_post_types',
        ),
    ));
}
