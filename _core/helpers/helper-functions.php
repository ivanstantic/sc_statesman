<?php

/**
 * Dump and die
 * @param $var
 */
if (!function_exists('dd')) {
    function dd($var)
    {
        echo highlight_string("<?php \n\n" . var_export($var, true) . ";\n\n?>", true);
        die;
    }
}

/**
 * Generate dynamic css
 * Function parses theme options and generates css code dynamically
 * @return string Generated css code
 * @since  1.0
 */
if (!function_exists('deploy_generate_dynamic_css')) {
    function deploy_generate_dynamic_css()
    {
        ob_start();
        get_template_part('_assets/css/dynamic-css');
        $output = ob_get_contents();
        ob_end_clean();
        return deploy_compress_css_code($output);
    }
}

/**
 * Compress CSS Code
 * @param string  $code Uncompressed css code
 * @return string Compressed css code
 * @since  1.0
 */
if (!function_exists('deploy_compress_css_code')) {
    function deploy_compress_css_code($code)
    {
        // Remove Comments
        $code = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $code);

        // Remove tabs, spaces, newlines, etc.
        $code = str_replace(["\r\n", "\r", "\n", "\t", '  ', '    ', '    '], '', $code);

        return $code;
    }
}

/**
 * Get categories fro post types
 * @param string[] $post_types
 */
if (!function_exists('get_categories_for_post_types')) {
    function get_categories_for_post_types($post_types = []) {
        $categories_list = [];

        if ( is_array($post_types) ) {
            // Loop through each post type and get categories
            foreach ($post_types as $post_type) {
                // Ensure the post type is valid
                if (!post_type_exists($post_type)) {
                    continue; // Skip invalid post types
                }

                // Check if the post type supports the 'category' taxonomy
                $taxonomies = get_object_taxonomies($post_type, 'names');
                
                if (in_array('category', $taxonomies)) {
                    // Get all categories, including those without posts
                    $categories = get_terms(array(
                        'taxonomy'   => 'category',
                        'hide_empty' => false, // Include categories without posts
                    ));

                    if (!empty($categories) && !is_wp_error($categories)) {
                        $categories_list = $categories;
                    }
                }
            }
        }

        return $categories_list;
    }
}

/**
 * Get tags fro post types
 * @param string[] $post_types
 */
if (!function_exists('get_tags_for_post_types')) {
    function get_tags_for_post_types($post_types = []) {
        $tags_list = [];

        if ( is_array($post_types) ) {
            // Loop through each post type and get tags
            foreach ($post_types as $post_type) {
                // Ensure the post type is valid
                if (!post_type_exists($post_type)) {
                    continue; // Skip invalid post types
                }

                // Check if the post type supports the 'post_tag' taxonomy
                $taxonomies = get_object_taxonomies($post_type, 'names');
                
                if (in_array('post_tag', $taxonomies)) {
                    // Get all tags, including those without posts
                    $tags = get_terms(array(
                        'taxonomy'   => 'post_tag',
                        'hide_empty' => false, // Include tags without posts
                    ));

                    if (!empty($tags) && !is_wp_error($tags)) {
                        $tags_list = $tags;
                    }
                }
            }
        }

        return $tags_list;
    }
}
