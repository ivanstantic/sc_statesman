<?php

/**
 * Get post date in time ago format
 * @param $post_id
 * @param $size
 * @param $attr
 */
if (!function_exists('hc_the_post_thumbnail')) {
    function hc_the_post_thumbnail($post_id, $size, $attr)
    {
        $thumbnail_id = get_post_meta( $post_id, '_thumbnail_id', true );
        if ( $thumbnail_id ) {
            // Get the image HTML or URL
            $thumbnail = wp_get_attachment_image( $thumbnail_id, $size, false, $attr );
            echo $thumbnail;
        } else {
            echo 'No thumbnail found';
        }
    }
}

/**
 * Get post date in time ago format
 */
if (!function_exists('hc_the_time_ago')) {
    function hc_the_time_ago()
    {
        echo human_time_diff(get_the_time('U'), current_time('timestamp'));
    }
}

/**
 * Get the author url within the loop
 */
if (!function_exists('hc_get_author_url')) {
    function hc_get_author_url() {
        // Get the author's display name
        $author_name = get_the_author();

        // Get the author's ID
        $author_id = get_the_author_meta('ID');

        // Get the URL of the author's archive page
        return get_author_posts_url($author_id);
    }
}

/**
 * Get the excerpt with character limit
 * @param $post
 * @param $length
 */
if (!function_exists('hc_get_excerpt_with_char_limit')) {
    function hc_get_excerpt_with_char_limit($post, $length = 150) {
        // Get the post content or excerpt
        $excerpt = $post->post_excerpt ? $post->post_excerpt : $post->post_content;
        
        // Strip HTML tags and shortcodes
        $excerpt = wp_strip_all_tags( strip_shortcodes( $excerpt ) );
        
        // Trim to the specified length and add ellipsis if necessary
        if ( strlen( $excerpt ) > $length ) {
            $excerpt = substr( $excerpt, 0, $length ) . '...';
        }
        
        return $excerpt;
    }
}

/**
 * Print the excerpt with character limit
 * @param $length
 */
if (!function_exists('hc_the_excerpt_with_char_limit')) {
    function hc_the_excerpt_with_char_limit($length = 150) {
        global $post;
        echo hc_get_excerpt_with_char_limit($post, $length);
    }
}

/**
 * Get the excerpt with word limit
 * @param $post
 * @param $limit
 */
if (!function_exists('hc_get_excerpt_with_word_limit')) {
    function hc_get_excerpt_with_word_limit($post , $limit)
    {
        // Get the post content or excerpt
        $excerpt = $post->post_excerpt ? $post->post_excerpt : $post->post_content;
        
        // Strip HTML tags and shortcodes
        $excerpt = wp_strip_all_tags( strip_shortcodes( $excerpt ) );

        $words = explode(' ', $excerpt, $limit + 1);
        if (count($words) > $limit) {
            array_pop($words);
            array_push($words, '');
            $excerpt = trim(implode(' ', $words)) . '...';
        }

        return $excerpt;
    }
}

/**
 * Print the excerpt with word limit
 * @param $limit
 */
if (!function_exists('hc_the_excerpt_with_word_limit')) {
    function hc_the_excerpt_with_word_limit($limit)
    {
        global $post;
        echo hc_get_excerpt_with_word_limit($post, $limit);
    }
}

/**
 * Get the reading time from post content
 * @param $content
 */
if (!function_exists('hc_get_reading_time')) {
    function hc_get_reading_time($content) {
        // Calculate the word count
        $word_count = str_word_count(strip_tags($content));

        // Calculate the reading time (e.g., 200 words per minute)
        return ceil($word_count / 200);
    }
}

/**
 * Print the reading time within the loop
 */
if (!function_exists('hc_the_reading_time')) {
    function hc_the_reading_time() {
        // Get the post content directly within the loop
        $content = get_the_content();

        // Echo reading time
        echo hc_get_reading_time($content);
    }
}
