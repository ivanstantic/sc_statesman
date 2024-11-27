<?php
    global $wp;
    $permalink = home_url( $wp->request );
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SC Statesman</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet" />

    <?php wp_head(); ?>
</head>

<body class="w-full bg-gray-100 text-gray-900">
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
                    $menu_location = 'scs_main_menu';
                    $locations = get_nav_menu_locations();
                ?>
                <?php if ( isset($locations[$menu_location] ) ) : ?>
                    <?php
                        $menu = wp_get_nav_menu_object( $locations[$menu_location] );
                        $menu_items = wp_get_nav_menu_items( $menu->term_id );
                    ?>
                    <?php if ( $menu_items ) : ?>
                        <?php foreach( $menu_items as $item ) : ?>
                            <?php if( trailingslashit( $item->url ) === trailingslashit( $permalink ) ) : ?>
                                <span class="uppercase font-bold">
                                    <?php echo esc_html( $item->title ); ?>
                                </span>
                            <?php else: ?>
                                <a href="<?php echo esc_url( $item->url ); ?>" class="hover:underline uppercase">
                                    <?php echo esc_html( $item->title ); ?>
                                </a>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php endif; ?>
                <?php endif; ?>
            </nav> -->

            <!-- Actions: Subscribe, Search, Theme Toggle -->
            <div class="flex items-center space-x-4 md:mt-0">
                <a href="#subscribe" class="text-gray-300 hover:text-white text-sm">
                    Subscribe
                </a>
                <!-- <a href="#">
                    <img
                    src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/icons/search-icon.svg"
                    alt="Search Icon"
                    class="w-5 h-auto"
                    />
                </a> -->
                <div id="theme-toggle" class="relative flex items-center w-10 h-6 bg-[#4864C0] dark:bg-black rounded-full cursor-pointer">
                    <div id="toggle-thumb" class="absolute w-5 h-5 dark:bg-[#1B3664] bg-white rounded-full  flex items-center justify-center transform transition-transform duration-300">
                        <img id="toggle-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/icons/day-icon.svg" alt="Day Icon" class="w-10 h-6" />
                    </div>
                </div>
            </div>

            <!-- <div class="md:hidden flex items-center">
                <button id="mobile-menu-toggle" class="text-white focus:outline-none"> -->
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
                    </svg>
                </button>
            </div> -->

            <!-- Mobile Navigation -->
            <!-- <nav id="mobile-menu" class="hidden w-full mt-4 md:hidden flex flex-col items-center space-y-2 text-sm bg-[#1B3664] px-4 py-2 rounded-md">
                <?php
                    $menu_location = 'scs_main_menu';
                    $locations = get_nav_menu_locations();
                ?>
                <?php if ( isset($locations[$menu_location] ) ) : ?>
                    <?php
                        $menu = wp_get_nav_menu_object( $locations[$menu_location] );
                        $menu_items = wp_get_nav_menu_items( $menu->term_id );
                    ?>
                    <?php if ( $menu_items ) : ?>
                        <?php foreach( $menu_items as $item ) : ?>
                            <?php if( trailingslashit( $item->url ) === trailingslashit( $permalink ) ) : ?>
                                <span class="uppercase font-bold">
                                    <?php echo esc_html( $item->title ); ?>
                                </span>
                            <?php else: ?>
                                <a href="<?php echo esc_url( $item->url ); ?>" class="hover:underline uppercase">
                                    <?php echo esc_html( $item->title ); ?>
                                </a>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php endif; ?>
                <?php endif; ?>
            </nav> -->
        </div>
    </header>

    <!-- Sub Header -->
    <div class="w-full py-2 flex items-center justify-center bg-white dark:bg-black">
        <div class="w-[90%] max-w-[1344px]">
            <!-- Navigation Bar -->
            <?php
                $menu_location = 'scs_second_menu';
                $locations = get_nav_menu_locations();
            ?>
            <?php if ( isset($locations[$menu_location] ) ) : ?>
                <?php
                    $menu = wp_get_nav_menu_object( $locations[$menu_location] );
                    $menu_items = wp_get_nav_menu_items( $menu->term_id );
                ?>
                <?php if ( $menu_items ) : ?>
                    <nav class="py-1.5 flex items-center space-x-6 text-sm text-[#1B3664] dark:text-[#7898FF] font-medium ">
                        <?php foreach( $menu_items as $item ) : ?>
                            <?php if( trailingslashit( $item->url ) === trailingslashit( $permalink ) ) : ?>
                                <span class="whitespace-nowrap uppercase font-bold">
                                    <?php echo esc_html( $item->title ); ?>
                                </span>
                            <?php else: ?>
                                <a href="<?php echo esc_url( $item->url ); ?>" class="hover:underline whitespace-nowrap uppercase">
                                    <?php echo esc_html( $item->title ); ?>
                                </a>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </nav>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
