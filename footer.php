<?php
use Theme\Menus\Tailwind_Walker_Nav_Menu_Desktop;
use Theme\Menus\Tailwind_Walker_Nav_Menu_Mobile;
?>
    
    <?php wp_footer(); ?>
        <footer class="bg-hc-pink-light hidden sm:block">
            <div class="max-w-[1300px] pt-20 mx-auto flex flex-col justify-center items-center">
                <a href="/">
                    <img
                        src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/hc-logo.svg"
                        class="max-w-[211px] mb-9"
                    />
                </a>
                <nav>
                    <?php
                        wp_nav_menu(array(
                            'theme_location'  => 'hc_footer_menu_1',
                            // Tailwind classes for the <ul>
                            'menu_class'      => 'flex flex-row gap-7 items-center mb-20 font-new-order font-bold tracking-widest text-hc-gray-dark uppercase',
                            // Fallback callback
                            'fallback_cb'     => function () {
                                ?>
                                    <div>Assign a menu to the 1st Footer Menu display location</div>
                                <?php
                            },
                        ));
                    ?>
                </nav>
                <nav>
                    <ul class="mb-4 flex gap-7 items-center">
                        <li>
                            <a href="https://www.linkedin.com/company/heartcountapp">
                                <img
                                    src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/social/linkedin.svg"
                                    class="w-[28px] h-[29px]"
                                />
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/heartcountapp">
                                <img
                                    src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/social/instagram.svg"
                                    class="w-[28px] h-[29px]"
                                />
                            </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/@heartcount">
                                <img
                                    src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/social/youtube.svg"
                                    class="w-[28px] h-[29px]"
                                />
                            </a>
                        </li>
                    </ul>
                </nav>
                <nav>
                    <?php
                        wp_nav_menu(array(
                            'theme_location'  => 'hc_footer_menu_2',
                            'container_class' => 'footer-menu-2nd',
                            // Tailwind classes for the <ul>
                            'menu_class'      => 'mb-4 flex items-center text-sm font-plus-jakarta',
                            // Fallback callback
                            'fallback_cb'     => function () {
                                ?>
                                    <div>Assign a menu to the 1st Footer Menu display location</div>
                                <?php
                            },
                        ));
                    ?>
                </nav>
                <p class="mb-12 text-sm font-plus-jakarta">© 2024 HeartCount</p>
            </div>
        </footer>
        <footer class="bg-white p-4 block sm:hidden">
            <nav class="mb-5">
                <?php
                    wp_nav_menu(array(
                        'theme_location'  => 'hc_footer_menu_1',
                        'walker'          => new Tailwind_Walker_Nav_Menu_Mobile(),
                        'container_class' => 'footer-menu-1st-mobile',
                        // Tailwind classes for the <ul>
                        'menu_class'      => 'space-y-4',
                        // Fallback callback
                        'fallback_cb'     => function () {
                            ?>
                                <div>Assign a menu to the 1st Footer Menu display location</div>
                            <?php
                        },
                    ));
                ?>
            </nav>
            <nav class="flex justify-center">
                <ul class="mb-4 flex gap-7 items-center">
                    <li>
                        <a href="https://www.linkedin.com/company/heartcountapp">
                            <img
                                src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/social/linkedin.svg"
                                class="w-[28px] h-[29px]"
                            />
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/heartcountapp">
                            <img
                                src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/social/instagram.svg"
                                class="w-[28px] h-[29px]"
                            />
                        </a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/@heartcount">
                            <img
                                src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/social/youtube.svg"
                                class="w-[28px] h-[29px]"
                            />
                        </a>
                    </li>
                </ul>
            </nav>
            <nav class="flex justify-center">
                <?php
                    wp_nav_menu(array(
                        'theme_location'  => 'hc_footer_menu_2',
                        'walker'          => new Tailwind_Walker_Nav_Menu_Mobile(),
                        'container_class' => 'footer-menu-2nd',
                        // Tailwind classes for the <ul>
                        'menu_class'      => 'mb-4 flex items-center text-sm font-plus-jakarta',
                        // Fallback callback
                        'fallback_cb'     => function () {
                            ?>
                                <div>Assign a menu to the 1st Footer Menu display location</div>
                            <?php
                        },
                    ));
                ?>
            </nav>
            <div class="mt-6 flex justify-between items-center w-full">
                <div class="flex items-start justify-start">
                <img
                    src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/hc-logo-small.svg"
                    class="max-h-[43px] object-contain"
                />
                </div>
                <span class="w-2/4 text-end">© 2024 HeartCount</span>
            </div>
        </footer>
    </div>

</body>
</html>
