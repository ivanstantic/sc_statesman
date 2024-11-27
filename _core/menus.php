<?php

// Add menus
function scs_menus()
{
    register_nav_menus([
        'scs_main_menu'   => 'Main Menu',
        'scs_second_menu' => 'Second Menu',
        'scs_footer_menu_1st' => 'Footer Menu 1st',
        'scs_footer_menu_2nd' => 'Footer Menu 2nd',
    ]);
}
add_action('init', 'scs_menus');
