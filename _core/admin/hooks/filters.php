<?php

/**
 * Populate ACF category list field options
 */
add_filter( 'acf/load_field/name=category_list', 'hc_populate_category_select_field' );

function hc_populate_category_select_field( $field ) {
    // Reset choices
    $field['choices'] = [];

    // Get all categories from all post types using the 'category' taxonomy
    $categories = get_categories_for_post_types( get_field( 'post_type' ) );

    // Populate choices
    if ( ! empty( $categories ) && ! is_wp_error( $categories ) ) {
        foreach ( $categories as $category ) {
            $field['choices'][ $category->term_id ] = $category->name;
        }
    }

    return $field;
}

/**
 * Populate ACF tag list field options
 */
add_filter( 'acf/load_field/name=tag_list', 'hc_populate_tag_select_field' );

function hc_populate_tag_select_field( $field ) {
    // Reset choices
    $field['choices'] = [];

    // Get all tags (terms from the 'post_tag' taxonomy)
    $tags = get_tags_for_post_types( get_field( 'post_type' ) );

    // Populate choices with tag names and IDs
    if ( ! empty( $tags ) && ! is_wp_error( $tags ) ) {
        foreach ( $tags as $tag ) {
            $field['choices'][ $tag->term_id ] = $tag->name;
        }
    }

    return $field;
}
