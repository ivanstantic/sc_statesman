<?php

// Enqueue admin specific assets
add_action('admin_enqueue_scripts', 'scs_enqueue_admin_editor_assets');

function scs_enqueue_admin_editor_assets($hook_suffix) {
    global $post;

    // Only add styles on post editing pages
    if (in_array($hook_suffix, ['post.php', 'post-new.php'])) {
        // Get the current screen to determine if it's post or page
        $screen = get_current_screen();

        if ( isset( $post ) ) {
            $page_template = get_post_meta( $post->ID, '_wp_page_template', true );
            if ( $screen->post_type === 'page' && !empty( $page_template ) ) {
                scs_enqueue_admin_modules_style();
            } else {
                scs_enqueue_admin_prose_style();
            }
        }
    }

    scs_enqueue_admin_script();
}

// Enqueue admin specific styles and scripts
add_action('enqueue_block_assets', 'scs_enqueue_block_editor_assets');

function scs_enqueue_block_editor_assets($hook_suffix) {
    scs_enqueue_admin_modules_style();
    scs_enqueue_admin_script();
}


// Enqueue assets wrappers
function scs_enqueue_admin_modules_style() {
    wp_enqueue_style(
        'scs-admin-page-css',
        get_template_directory_uri() . '/_assets/public/css/admin/page.css',
        [],
        wp_get_theme()->get( 'Version' ),
        true
    );
}

function scs_enqueue_admin_prose_style() {
    wp_enqueue_style(
        'scs-admin-post-css',
        get_template_directory_uri() . '/_assets/public/css/admin/prose.css',
        [],
        wp_get_theme()->get( 'Version' ),
        true
    );
}

function scs_enqueue_admin_script() {
    wp_enqueue_script(
        'scs-admin-script',
        get_stylesheet_directory_uri() . '/_assets/public/js/admin/script.js',
        ['wp-edit-post', 'wp-data'],
        wp_get_theme()->get( 'Version' ),
        true
    );

    wp_localize_script( 'scs-admin-script', 'acfDynamicData', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'fields' => array(
            'categories' => 'get_categories_for_post_types',
            'tags' => 'get_tags_for_post_types',
        ),
    ));
}
