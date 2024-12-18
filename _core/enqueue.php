<?php

add_action('wp_enqueue_scripts', 'scs_scripts');
add_action('enqueue_block_assets', 'scs_scripts');

function scs_scripts()
{
    // if (!is_admin()) {
    //     wp_deregister_script('jquery');
    //     wp_register_script('jquery', false);
    // }

    // Main Stylesheet
    wp_enqueue_style(
        'scs-style',
        trailingslashit(get_stylesheet_directory_uri()) . '_assets/public/css/frontend/style.css',
        [],
        wp_get_theme()->get( 'Version' )
    );

    // Append dynamic css
    wp_add_inline_style('scs-style', deploy_generate_dynamic_css());

    // Scripts

    // Main Script
    wp_enqueue_script(
        'scs-script',
        trailingslashit(get_stylesheet_directory_uri()) . '_assets/public/js/frontend/script.js',
        [],
        wp_get_theme()->get( 'Version' ),
        true
    );

    wp_localize_script('scs-script', 'wpAjax', [
        'ajaxurl' => admin_url('admin-ajax.php'),
    ]);
}
