<?php
use Theme\Template;

// The loop posts
$the_loop_posts = array();
if ( have_posts() ) {
    while ( have_posts() ) {
        the_post();
        $the_loop_posts[] = $post;
    }
    rewind_posts();
}

$post_highlight = $the_loop_posts[0];
$post_grid = array_slice( $the_loop_posts, 1, 8 );
$post_archive = array_slice( $the_loop_posts, 9, 10 );

// Most read custom query
$category_id = get_queried_object_id();

$args = array(
    'posts_per_page' => 10,
    'orderby'        => 'rand',
    'post_status'    => 'publish',
    'cat'            => $category_id,
);

$most_read_posts_query = new WP_Query( $args );
?>

<?php get_header(); ?>

    <header class="w-full flex justify-center bg-[#f2f3f4] dark:bg-[#1B2228]">
        <div class="w-[90%] max-w-[1344px]">
            <div class="w-[100%] flex flex-wrap justify-between items-center pt-[24px]">
                <div class="w-full text-[24px] md:text-[32px] font-bold md:mb-0">
                    <p class="text-center dark:text-white text-[#1B2228]">
                        <?php single_cat_title(); ?>
                    </p>
                </div>
            </div>
            <div class="w-[100%]">
                <hr class="w-[100%] border-none h-[6px] bg-red-700">
            </div>
        </div>
    </header>

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

    <!-- Most Read -->
    <?php if ( $most_read_posts_query->have_posts() ) : ?>

        <header class="w-full flex items-center justify-center bg-[#f2f3f4] dark:bg-[#1B2228]">
            <div class="w-[90%] max-w-[1344px] flex justify-between items-center pt-[24px] pb-[24px]">
                <div class="text-[32px] font-bold">
                    <p class="dark:text-white text-[#1B2228]">Most Read</p>
                    <hr class="w-[60%] border-none h-[6px] bg-red-700" />
                </div>
            </div>
        </header>

        <aside class="w-full flex flex-col items-center justify-center bg-[#f2f3f4] dark:bg-[#1B2228]">
            <div class="w-[90%] max-w-[1344px] pb-[48px]">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12">

                    <?php while ( $most_read_posts_query->have_posts() ) : $most_read_posts_query->the_post(); ?>
                        <?php Template::include('template-parts/archive/_entry-textual.php'); ?>
                    <?php endwhile; ?>

                    <?php wp_reset_postdata(); ?>
                    
                </div>
            </div>
        </aside>

        <hr class="border-none h-[1px] bg-[#cbd5e1]" />
    <?php endif; ?>

    <!-- Archive Header -->
    <div class="w-full flex flex-col items-center justify-center bg-[#f2f3f4] dark:bg-[#1B2228]">
        <div class="w-[90%] md:w-[80%] lg:w-[70%] pb-[24px]">
            <div class="w-full flex flex-col items-start justify-start bg-[#f2f3f4] dark:bg-[#1B2228]">
                <div class="w-full flex flex-col md:flex-row justify-between items-start pt-[24px]">
                    <div class="text-[32px] font-bold">
                        <p class="dark:text-white text-[#1B2228]">
                            <?php single_cat_title(); ?> Archive
                        </p>
                        <hr class="w-[15%] border-none h-[6px] bg-red-700" />
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

            </div>
        </div>
    <?php endif; ?>

<?php get_footer(); ?>
