<?php

// Setup Autoload
// Namespace prefix
namespace Theme;

// Autoloader function
function theme_autoload_classes($class_name) {
    // Define the base directory for classes
    $base_dir = get_template_directory() . '/_core/classes/';

    // Remove the namespace prefix and convert namespace separators to directory separators
    $relative_class = str_replace('Theme\\', '', $class_name);
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    // If the file exists, require it
    if (file_exists($file)) {
        require $file;
    }
}

// Register the autoloader
spl_autoload_register('Theme\theme_autoload_classes');

// Helper Functions
require_once ( '_core/helpers/helper-functions.php' );

// Template Functions
require_once ( '_core/helpers/template-functions.php' );

// Admin
require_once ( '_core/admin/_init.php' );

// Setup
require_once ( '_core/setup.php' );

// The Loop
require_once ( '_core/the_loop.php' );

// Enqueue
require_once ( '_core/enqueue.php' );

// Actions
require_once ( '_core/hooks/actions.php' );

// Filters
require_once ( '_core/hooks/filters.php' );

// Menus
require_once ( '_core/menus.php' );

// Sidebars
require_once ( '_core/sidebars.php' );

// Image Sizes
require_once ( '_core/image-sizes.php' );

// Widgets
require_once ( '_core/widgets/_init.php' );

// Shortcodes
require_once ( '_core/shortcodes/_init.php' );

// Blocks
require_once ( '_core/blocks/_init.php' );

// Plugins
require_once ( '_core/plugins/_init.php' );

// AJAX
require_once ( '_core/ajax/_init.php' );

// Custom Post Types
require_once ( '_core/cpt/_init.php' );
