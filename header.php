<?php

$locations = get_nav_menu_locations();
$menu_location = 'scs_main_menu';
$menu = array();
if ( isset( $locations[ $menu_location ] ) ) :
    global $wp;
    $permalink = home_url( $wp->request );
    $menu_id = $locations[ $menu_location ];
    $menu_items = wp_get_nav_menu_items( $menu_id );

    foreach ( $menu_items as $menu_item ) :
        $id = $menu_item->ID;
        $title = $menu_item->title;
        $link = $menu_item->url;
        $menu_item_parent = $menu_item->menu_item_parent;

        // if menu item has no parent, means this is the top-menu.
        if ( ! $menu_item_parent ) {
            $menu[ $id ]['active'] = false;
            $menu[ $id ]['children'] = array();
            $menu[ $id ]['id'] = $id;
            $menu[ $id ]['title'] = $title;
            $menu[ $id ]['link'] = $link;

            // add active field if current link and open url is same.
            if ( trailingslashit( $permalink ) === trailingslashit( $link ) ) {
                $menu[ $id ]['active'] = true;
            }
        } else {
            // if parent menu is set, means this is 2nd level menu
            if ( isset( $menu[ $menu_item_parent ] ) ) {
                $menu[ $menu_item_parent ]['children'][ $id ]['active'] = false;
                $menu[ $menu_item_parent ]['children'][ $id ]['id'] = $id;
                $menu[ $menu_item_parent ]['children'][ $id ]['title'] = $title;
                $menu[ $menu_item_parent ]['children'][ $id ]['link'] = $link;

                // add active field to current menu item and its parent menu item if current link and open url is same.
                if ( trailingslashit( $permalink ) === trailingslashit( $link ) ) {
                    $menu[ $menu_item_parent ]['active'] = true;
                    $menu[ $menu_item_parent ]['children'][ $id ]['active'] = true;
                }
            }
        }
    endforeach;
endif;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SC Statesman</title>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Roboto+Serif:wght@400;500;700&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet" />

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    fontFamily: {
                        roboto: ["Roboto", "sans-serif"], // For Roboto
                        "roboto-serif": ["Roboto Serif", "serif"], // For Roboto Serif
                    },
                },
            },
        };
    </script>
    <style>
        body {
            font-family: "Public Sans", sans-serif;
        }
    </style>
</head>

<body class="bg-gray-100 text-gray-900 w-full">
    <!-- Header -->
    <header class="flex items-center justify-center bg-[#1B3664] text-white">
        <div class="container w-[90%] max-w-[1344px] flex flex-wrap items-center justify-between py-4 md:py-8">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="/">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/logo.svg" alt="SC Statesman Logo" class="w-36 md:w-54 h-auto" />
                </a>
            </div>

            <!-- Navigation Links -->
            <!-- <nav class="hidden md:flex items-center space-x-4 lg:space-x-12 text-sm mt-4 md:mt-0">
                <?php
                    if ( isset( $locations[ $menu_location ] ) ) :
                        if ( ! empty( $menu ) ) :
                            foreach ( $menu as $item ) :
                                if ( $item['active'] ) :
                                    echo '<span class="uppercase font-bold">' . esc_html( $item['title'] ) . '</span>';
                                else :
                                    echo '<a href="' . esc_url( $item['link'] ) . '" class="hover:text-gray-300 uppercase">';
                                    echo  esc_html( $item['title'] );
                                    echo '</a>';
                                endif;
                            endforeach;
                        else :
                            echo 'No menu items found for the assigned menu.';
                        endif;
                    else :
                        echo 'No menu assigned to this theme location.';
                    endif;
                ?>
            </nav> -->

            <!-- Actions: Subscribe, Search, Theme Toggle -->
            <div class="flex items-center space-x-4 md:mt-0">
                <a href="#" class="text-gray-300 hover:text-white text-sm">Subscribe</a>
                <a href="#">
                    <img
                    src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/icons/search-icon.svg"
                    alt="Search Icon"
                    class="w-5 h-auto"
                    />
                </a>
                <div id="theme-toggle" class="relative flex items-center w-10 h-6 bg-[#4864C0] dark:bg-black rounded-full cursor-pointer">
                    <div id="toggle-thumb" class="absolute w-5 h-5 dark:bg-[#1B3664] bg-white rounded-full  flex items-center justify-center transform transition-transform duration-300">
                        <img id="toggle-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/icons/day-icon.svg" alt="Day Icon" class="w-10 h-6" />
                    </div>
                </div>
            </div>

            <!-- <div class="md:hidden flex items-center"> -->
                <!-- <button id="mobile-menu-toggle" class="text-white focus:outline-none"> -->
                    <!-- Hamburger Icon -->
                    <!-- <svg
                        id="hamburger-icon"
                        class="w-6 h-6"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7"
                        ></path>
                    </svg> -->
                    <!-- Close Icon -->
                    <!-- <svg
                        id="close-icon"
                        class="hidden w-6 h-6"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M6 18L18 6M6 6l12 12"
                        ></path>
                    </svg> -->
                <!-- </button> -->
            <!-- </div> -->

            <!-- Mobile Navigation -->
            <!-- <nav id="mobile-menu" class="hidden w-full mt-4 md:hidden flex flex-col items-center space-y-2 text-sm bg-[#1B3664] px-4 py-2 rounded-md">
                <?php
                    if ( isset( $locations[ $menu_location ] ) ) :
                        if ( ! empty( $menu ) ) :
                            foreach ( $menu as $item ) :
                                if ( $item['active'] ) :
                                    echo '<span class="uppercase font-bold">' . esc_html( $item['title'] ) . '</span>';
                                else :
                                    echo '<a href="' . esc_url( $item['link'] ) . '" class="hover:text-gray-300 uppercase">';
                                    echo  esc_html( $item['title'] );
                                    echo '</a>';
                                endif;
                            endforeach;
                        else :
                            echo 'No menu items found for the assigned menu.';
                        endif;
                    else :
                        echo 'No menu assigned to this theme location.';
                    endif;
                ?>
            </nav> -->
        </div>
    </header>

    <!-- Sub Header -->
    <div class="w-full py-2 flex items-center justify-center bg-white dark:bg-black">
        <div class="w-[90%] max-w-[1344px]">
            <!-- Navigation Bar -->
            <?php if ( ! empty( $menu ) ) : ?>
                <nav class="py-1.5 flex items-center space-x-6 text-sm text-[#1B3664] dark:text-[#7898FF] font-medium ">
                    <?php
                        foreach ( $menu as $item ) :
                            if ( $item['active'] && ! empty( $item['children'] ) ) :
                                foreach ( $item[ 'children' ] as $child ) :
                                    echo '<a href="' . esc_url( $child['link'] ) . '" hover:text-gray-300 whitespace-nowrap uppercase>';
                                    echo esc_html( $child['title'] );
                                    echo '</a>';
                                endforeach;
                            endif;
                        endforeach;
                    ?>
                </nav>
            <?php endif; ?>
        </div>
    </div>
