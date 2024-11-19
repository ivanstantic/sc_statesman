<?php
use Theme\Menus\Tailwind_Walker_Nav_Menu_Desktop;
use Theme\Menus\Tailwind_Walker_Nav_Menu_Mobile;
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php try { ?>
        <?php
            $page_template = "N/A";
            if ( is_home() ) {
                $page_template = "Blog";
            }
            if ( is_single() ) {
                $post_id = get_queried_object_id();
                $page_template = get_post_type( $post_id );
            }
            if ( is_page() ) {
                $page_id = get_queried_object_id();
                $page_on_front = get_option('page_on_front');
                if ( $page_id == $page_on_front ) {
                    $page_template = "Homepage";
                } else {
                    $page_template = "Page";
                }
            }
            if ( is_archive() ) {
                if ( is_category() ) {
                    $page_template = "Category";
                }
                else if ( is_tag() ) {
                    $page_template = "Tag";
                }
                else if ( is_tax() ) {
                    $page_template = "Taxonomy";
                }
                else if ( is_date() ) {
                    $page_template = "Date archive";
                }
                else {
                    $page_template = "Archive";
                }
            }
            if ( is_author() ) {
                $page_template = "Author";
            }
        ?>
        <script>
            window.dataLayer = window.dataLayer || [];
            let layer = {
                event: "page_info",
                page_template: "<?php echo $page_template; ?>",
            };

            <?php if ( is_singular() ) : ?>
                <?php $id = get_queried_object_id(); ?>
                layer = { ...layer, ...{
                    published_date: "<?php echo strtoupper( get_the_date( 'd M Y', $id ) ); ?>",
                    published_month: "<?php echo strtoupper( get_the_date( 'M', $id ) ); ?>",
                    published_year: "<?php echo get_the_date( 'Y', $id ); ?>",
                    last_edit_date: "<?php echo strtoupper( get_the_modified_date( 'd M Y', $id ) ); ?>",
                    author: "<?php echo get_the_author_meta( 'display_name', get_post_field( 'post_author', $id ) ); ?>"
                } };
            <?php endif; ?>

            <?php if ( is_single() ) : ?>
                <?php
                    $id = get_queried_object_id();
                    $post_content = get_post_field( 'post_content',$id );
                    $word_count = str_word_count( strip_tags( $post_content ) );
                    $has_featured_image = has_post_thumbnail( $id );
                    $image_count = preg_match_all( '/<img[^>]+>/i', $post_content );
                    $video_count = preg_match_all( '/<video[^>]*>/i', $post_content );
                    $youtube_count = preg_match_all( '/<iframe[^>]+src=["\'][^"\']*youtube\.com|youtu\.be[^"\']*["\'][^>]*>/i', $post_content );
                ?>
                <?php if ( in_array( get_post_type( $id ), [ 'post', 'case-studies', 'podcast', 'webinar' ] ) ) : ?>
                    layer = { ...layer, ...{
                        focus_keyword: "<?php echo get_field( 'keyword', $id ); ?>",
                        keyword_difficulty: "<?php echo get_field( 'keyword_difficulty', $id ); ?>",
                        topic_cluster: "<?php echo get_field( 'topic_cluster', $id ); ?>",
                        search_volume: "<?php echo get_field( 'search_volume', $id ); ?>",
                        search_intent: "<?php echo get_field( 'search_intent', $id ); ?>",
                        article_category: "<?php echo get_field( 'article_category', $id ); ?>",
                        article_type: "<?php echo get_field( 'article_type', $id ); ?>",
                        funnel_stage: "<?php echo get_field( 'funnel', $id ); ?>",
                        word_count: "<?php echo $word_count; ?>",
                        estimated_reading_time_msec: "<?php echo ( $word_count/250 ) * 60000; ?>",
                        estimated_reading_time: "<?php echo '00:' . sprintf('%02d', ceil( $word_count/250) ) . ':00'; ?>",
                        images_count: "<?php echo $has_featured_image ? ( $image_count + 1 ) : $image_count; ?>",
                        video_count: "<?php echo $video_count + $youtube_count; ?>"
                    } };
                <?php endif; ?>
            <?php endif; ?>

            window.dataLayer.push(layer);
        </script>
    <?php 
        } catch(e) {}
    ?>

    <?php wp_head(); ?>

</head>
<body <?php body_class('body'); ?>>
    
    <div class="flex flex-col <?php echo is_admin_bar_showing() ? 'min-h-[calc(100vh-32px)]' : 'min-h-screen'; ?>">
        <header id="top-bar" class="hidden lg:block py-5 px-8 bg-transparent transition z-[1000]">
            <div class="flex justify-between items-center">
                <div>
                    <a href="/">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/hc-logo.svg" />
                    </a>
                </div>
                <nav>
                    <?php
                        wp_nav_menu(array(
                            'theme_location' => 'hc_main_menu',
                            'walker'         => new Tailwind_Walker_Nav_Menu_Desktop(),
                            // Tailwind classes for the <ul>
                            'menu_class'     => 'flex items-center gap-7 font-new-order font-bold tracking-widest',
                            // Fallback callback
                            'fallback_cb'    => function () {
                                ?>
                                    <div>Assign a menu to the Main Menu display location</div>
                                <?php
                            },
                        ));
                    ?>
                </nav>
                <div>
                    <button class="hc-book-a-demo-modal-toggle py-3 px-3 bg-black text-white font-new-order font-bold tracking-widest sm:py-3 sm:px-7 rounded-full">
                        BOOK A DEMO
                    </button>
                </div>
            </div>
        </header>
        <header class="block lg:hidden sticky top-0 z-50 bg-white">
            <div class="flex justify-between items-center p-4">
                <!-- Logo -->
                <div class="flex items-start justify-start">
                    <a href="/">
                        <img
                            src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/hc-logo-small.svg"
                            class="max-h-[43px] object-contain"
                        />
                    </a>
                </div>

                <!-- Burger Menu -->
                <button
                    class="text-gray-700 focus:outline-none"
                    id="burgerMenu"
                    data-collapse-toggle="toggleMobileMenu"
                >
                    <svg
                        class="h-6 w-6"
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
                    </svg>
                </button>
            </div>

            <!-- Mobile Menu -->
            <?php
                wp_nav_menu(array(
                    'theme_location'  => 'hc_main_menu',
                    'walker'          => new Tailwind_Walker_Nav_Menu_Mobile(),
                    'container'       => 'nav',
                    'container_class' => 'main-menu-mobile',
                    'menu_id'         => 'toggleMobileMenu',
                    // Tailwind classes for the <ul>
                    'menu_class'      => 'hidden bg-white shadow-lg',
                    // Fallback callback
                    'fallback_cb'     => function () {
                        ?>
                            <div>Assign a menu to the Main Menu display location</div>
                        <?php
                    },
                ));
            ?>
        </header>

        <!-- Book a demo modal -->
        <div id="book-a-demo" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-[1010] justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-4xl max-h-full">
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-hc-modal-hide="book-a-demo">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div id="book-a-demo-content" class="p-8 md:p-9">

                    </div>
                </div>
            </div>
        </div>
