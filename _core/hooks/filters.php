<?php

function hc_excerpt_length($length) {
    return 100; // Set the number of words for the excerpt
}
add_filter('excerpt_length', 'hc_excerpt_length', 999);
