<?php
use Theme\Template;

if ( have_posts() ) {
    $the_loop_posts = array();
    while ( have_posts() ) {
        the_post();
        $the_loop_posts[] = $post;
    }
    rewind_posts();
}

$post_highlight = $the_loop_posts[0];
$post_grid = array_slice( $the_loop_posts, 1, 8 );
$post_archive = array_slice( $the_loop_posts, 9, 10 );
?>

<?php get_header(); ?>

    <?php if ( have_posts() ) : ?>

        <?php setup_postdata( $post_highlight ); ?>
            <?php Template::include('template-parts/archive/_entry-highlight.php'); ?>
        <?php wp_reset_postdata(); ?>

        <?php if ( ! empty( $post_grid ) ) : ?>
            <div class="w-full flex items-center justify-center bg-[#f2f3f4] dark:bg-[#1B2228]">
                <div class="w-[90%] max-w-[1344px] grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6 py-8">
                    <?php foreach ( $post_grid as $post ) : ?>
                        <?php setup_postdata( $post ); ?>
                        <div>
                            <?php Template::include('template-parts/archive/_entry-grid.php'); ?>
                        </div>
                        <?php wp_reset_postdata(); ?>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>

    <?php else : ?>
        <p class="md:p-3.5">Sorry, no posts matched your criteria.</p>
    <?php endif; ?>

    <!-- Read More Header -->
    <div class="w-full flex items-center justify-center bg-[#f2f3f4] dark:bg-[#1B2228]">
        <div class="w-[90%] max-w-[1344px] flex justify-between items-center pt-[24px] pb-[24px]">
            <div class="text-[32px] font-bold">
                <p class="dark:text-white text-[#1B2228]">Most Read</p>
                <hr class="w-[60%] border-none h-[6px] bg-[#2D5599]" />
            </div>
        </div>
    </div>

    <!-- Most Read Data -->
    <div class="w-full flex flex-col items-center justify-center bg-[#f2f3f4] dark:bg-[#1B2228]">
        <div class="w-[90%] max-w-[1344px] pb-[48px]">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <!-- Card 1 -->
                <div class="border-b border-gray-300 pb-5">
                    <h2 class="text-[32px] font-medium text-black dark:text-white font-roboto-serif">
                        Exploring the Depths of the Ocean
                    </h2>
                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-2">
                        October 10, 2024
                    </p>
                    <p class="text-gray-700 dark:text-gray-300">
                        An in-depth look at the ongoing recovery efforts in North Carolina following Hurricane Florence.
                    </p>
                </div>
                <!-- Card 2 -->
                <div class="border-b border-gray-300 pb-5">
                    <h2 class="text-[32px] font-medium text-black dark:text-white font-roboto-serif">
                        Innovative Tech Startups to Watch
                    </h2>
                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-2">
                        October 8, 2023
                    </p>
                    <p class="text-gray-700 dark:text-gray-300">
                        Governor has announced a new economic plan for South Carolina, focusing on job creation, business incentives, and workforce development.
                    </p>
                </div>
                <!-- Card 3 -->
                <div class="border-b border-gray-300 pb-5">
                    <h2 class="text-[32px] font-medium text-black dark:text-white font-roboto-serif">
                        Breakthrough in Quantum Computing
                    </h2>
                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-2">
                        October 8, 2023
                    </p>
                    <p class="text-gray-700 dark:text-gray-300">
                        An in-depth look at the ongoing recovery efforts in North Carolina following Hurricane Florence.
                    </p>
                </div>
                <!-- Card 4 -->
                <div class="border-b border-gray-300 pb-5">
                    <h2 class="text-[32px] font-medium text-black dark:text-white font-roboto-serif">
                        Olympic Games Highlights
                    </h2>
                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-2">
                        October 8, 2023
                    </p>
                    <p class="text-gray-700 dark:text-gray-300">
                        Governor has announced a new economic plan for South Carolina, focusing on job creation, business incentives, and workforce development.
                    </p>
                </div>
                <!-- Card 5 -->
                <div class="border-b border-gray-300 pb-5">
                    <h2 class="text-[32px] font-medium text-black dark:text-white font-roboto-serif">
                        Global Markets React to News
                    </h2>
                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-2">
                        October 5, 2023
                    </p>
                    <p class="text-gray-700 dark:text-gray-300">
                        An in-depth look at the ongoing recovery efforts in North Carolina following Hurricane Florence.
                    </p>
                </div>
                <!-- Card 6 -->
                <div class="border-b border-gray-300 pb-5">
                    <h2 class="text-[32px] font-medium text-black dark:text-white font-roboto-serif">
                        Exploring the Depths of the Ocean
                    </h2>
                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-2">
                        October 10, 2024
                    </p>
                    <p class="text-gray-700 dark:text-gray-300">
                        An in-depth look at the ongoing recovery efforts in North Carolina following Hurricane Florence.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <hr class="border-none h-[1px] bg-[#cbd5e1]" />

    <!-- Archive Header -->
    <div class="w-full flex flex-col items-center justify-center bg-[#f2f3f4] dark:bg-[#1B2228]">
        <div class="w-[90%] md:w-[80%] lg:w-[70%] pb-[24px]">
            <div class="w-full flex flex-col items-start justify-start bg-[#f2f3f4] dark:bg-[#1B2228]">
                <div class="w-full flex flex-col md:flex-row justify-between items-start pt-[24px]">
                    <div class="text-[32px] font-bold">
                        <p class="dark:text-white text-[#1B2228]">Trending Archive</p>
                        <hr class="w-[15%] border-none h-[6px] bg-[#2D5599]" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Archive Grid -->
    <?php if ( ! empty( $post_archive ) ) : ?>
        <div class="w-full flex flex-col items-center justify-center bg-[#f2f3f4] dark:bg-[#1B2228]">
            <div class="w-[90%] md:w-[90%] lg:w-[70%]">
                <div class="grid grid-cols-1 gap-8">
                    <?php foreach ( $post_archive as $post ) : ?>
                        <?php setup_postdata( $post ); ?>
                        <div>
                            <?php Template::include('template-parts/archive/_entry-archive.php'); ?>
                        </div>
                        <?php wp_reset_postdata(); ?>
                    <?php endforeach; ?>
                </div>

                <?php Template::include('template-parts/_pagination.php'); ?>

                <!-- Pagination -->
                <div class="flex flex-wrap  flex-col sm:flex-row items-center lg:justify-start justify-center mt-8 mb-8 space-y-4 sm:space-y-0 " >
                    <span class="text-[#1B2228] dark:text-white md:mr-4 mr-0 md:mb-0 mb-4">Page 10 of 347</span>
                    <nav class="flex flex-wrap justify-center sm:justify-start space-x-2">
                        <!-- First Button -->
                        <button class="px-3 sm:mb-0 mb-2 py-2 bg-gray-200 dark:bg-[#1B2228]  text-[#1B2228] dark:text-[#F2F3F4] rounded border border-gray-300 dark:border-gray-600">
                    First
                    </button>
                        <!-- Previous Button -->
                        <button class="px-3 py-2 sm:mb-0 mb-2 bg-gray-200 dark:bg-[#1B2228] text-[#1B2228] dark:text-[#F2F3F4] rounded border border-gray-300 dark:border-gray-600">
                    &larr;
                    </button>
                        <!-- Ellipsis -->
                        <button class="px-3 py-2 sm:mb-0 mb-2 bg-gray-200 dark:bg-[#1B2228] text-[#1B2228] dark:text-[#F2F3F4] rounded border border-gray-300 dark:border-gray-600">
                    ...
                    </button>
                        <!-- Page Numbers -->
                        <button class="px-3 py-2 sm:mb-0 mb-2 bg-gray-200 dark:bg-[#1B2228] text-[#1B2228] dark:text-[#F2F3F4] rounded border border-gray-300 dark:border-gray-600">
                    8
                    </button>
                        <button class="px-3 py-2 sm:mb-0 mb-2 bg-gray-300 dark:bg-gray-600 text-gray-900 dark:text-[#F2F3F4] rounded border border-gray-300 dark:border-gray-600">
                    10
                    </button>
                        <button class="px-3 py-2 sm:mb-0 mb-2 bg-gray-200 dark:bg-[#1B2228] text-[#1B2228] dark:text-[#F2F3F4] rounded border border-gray-300 dark:border-gray-600">
                    11
                    </button>
                        <!-- Ellipsis -->
                        <button class="px-3 py-2 sm:mb-0 mb-2 bg-gray-200 dark:bg-[#1B2228] text-[#1B2228] dark:text-[#F2F3F4] rounded border border-gray-300 dark:border-gray-600">
                    ...
                    </button>
                        <!-- Last Page Buttons -->
                        <button class="px-3 py-2 sm:mb-0 mb-2 bg-gray-200 dark:bg-[#1B2228] text-[#1B2228] dark:text-[#F2F3F4] rounded border border-gray-300 dark:border-gray-600">
                    20
                    </button>
                        <button class="px-3 py-2 sm:mb-0 mb-2 bg-gray-200 dark:bg-[#1B2228] text-[#1B2228] dark:text-[#F2F3F4] rounded border border-gray-300 dark:border-gray-600">
                    30
                    </button>
                        <!-- Next Button -->
                        <button class="px-3 py-2 sm:mb-0 mb-2 bg-gray-200 dark:bg-[#1B2228] text-[#1B2228] dark:text-[#F2F3F4] rounded border border-gray-300 dark:border-gray-600">
                    &rarr;
                    </button>
                        <!-- Last Button -->
                        <button class="px-3 py-2 sm:mb-0 mb-2 bg-gray-200 dark:bg-[#1B2228] text-[#1B2228] dark:text-[#F2F3F4] rounded border border-gray-300 dark:border-gray-600">
                    Last
                    </button>
                    </nav>
                </div>
            </div>
        </div>
    <?php endif; ?>

<?php get_footer(); ?>
