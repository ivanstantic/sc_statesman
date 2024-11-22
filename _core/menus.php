<?php

// Add menus
function scs_menus()
{
    register_nav_menus([
        'scs_main_menu' => 'Main Menu',
    ]);
}
add_action('init', 'scs_menus');
