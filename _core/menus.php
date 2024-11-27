<?php

// Add menus
function scs_menus()
{
    register_nav_menus([
        'scs_main_menu'   => 'Main Menu',
        'scs_second_menu' => 'Second Menu',
    ]);
}
add_action('init', 'scs_menus');
