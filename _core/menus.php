<?php

// Add menus
function hc_menus()
{
    register_nav_menus([
        'hc_main_menu'      => 'Main Menu',
        'hc_resources_menu' => 'Resources Menu',
        'hc_footer_menu_1'  => '1st Footer Menu',
        'hc_footer_menu_2'  => '2nd Footer Menu',
    ]);
}
add_action('init', 'hc_menus');


// Allow colons in menu item classes when saving them
function allow_colons_in_menu_classes($menu_id, $menu_item_db_id, $args) {
    // Check if a custom class is provided
    if (isset($_POST['menu-item-classes'][$menu_item_db_id])) {
        // Get the custom class from the form
        $custom_class = $_POST['menu-item-classes'][$menu_item_db_id];
        
        // Allow colons in class names by removing slashes and saving it directly
        $custom_class = stripslashes($custom_class);
        
        // Update the menu item with the unfiltered class name
        update_post_meta($menu_item_db_id, '_menu_item_classes', (array) $custom_class);
    }
}
add_action('wp_update_nav_menu_item', 'allow_colons_in_menu_classes', 10, 3);


// Allow colons in menu item classes when rendering them
function allow_colons_when_rendering_menu_classes($classes, $item, $args, $depth) {
    foreach ($classes as &$class) {
        $class = wp_strip_all_tags($class); // Remove dangerous tags but allow colons
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'allow_colons_when_rendering_menu_classes', 10, 4);
