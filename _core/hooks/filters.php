<?php

function hc_excerpt_length($length) {
    return 100; // Set the number of words for the excerpt
}
add_filter('excerpt_length', 'hc_excerpt_length', 999);

function replace_br_with_div($content) {
    // Use regular expression to find <br> tags and replace them with <div class="spacer"></div>
    $content = preg_replace('/<br\s*\/?>/i', '<div class="spacer"></div>', $content);
    return $content;
}
add_filter('the_content', 'replace_br_with_div');
