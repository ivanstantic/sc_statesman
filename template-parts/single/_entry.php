
<?php
use Theme\Template;
?>

<!-- Article Header -->
<header class="w-full flex items-center justify-center bg-[#f2f3f4] dark:bg-[#1B2228]">
    <div class="w-full p-4 md:p-0 max-w-[1344px]">
        <div class="flex justify-center items-center flex-col mt-[3rem]">

            <!-- Header Section -->
            <div class="w-full max-w-[750px]">
                <?php if ( !empty(scs_get_the_category()) ) : ?>
                    <div class="text-[#4864c0] text-[14px] font-bold font-roboto-serif">
                        <?php scs_the_category(', '); ?>
                    </div>
                <?php endif; ?>
                <h1 class="mt-2 text-[2rem] sm:text-[2.5rem] md:text-[2.5rem] lg:text-[3rem] leading-[52px] font-bold dark:text-[#F2F3F4]">
                    <?php the_title(); ?>
                </h1>
                <!-- <p class="text-gray-600 mt-2 text-[20px] dark:text-white">
                    An In-depth Look at the Recent Developments Along South Carolina's Coastline
                </p> -->
            </div>

            <!-- Image Section -->
            <div class="mt-6 w-full max-w-[996px] aspect-[996/474] overflow-hidden">
                <?php if ( has_post_thumbnail() ) : ?>
                    <?php the_post_thumbnail('thumbnail_single', [ 'class' => 'w-full h-full object-cover rounded-lg shadow-lg' ]); ?>
                <?php endif; ?>
                <!-- <img
                    src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/article-hero.png" 
                    alt="South Carolina Coastline" 
                    class="rounded-lg shadow-lg"
                /> -->
            </div>
            
            <!-- Author Info Section -->
            <div class="mt-4 w-full max-w-[750px] flex items-center">
                <?php echo get_avatar(get_the_author_meta('ID'), 40, '', '', [
                    'class' => 'w-10 h-10 rounded-full mr-4',
                ]); ?>
                <div>
                    <p class="font-bold text-gray-800 dark:text-white">
                        <a href="<?php echo scs_get_author_url(); ?>">
                            <?php the_author(); ?>
                        </a>
                    </p>
                    <!-- <p class="text-[14px] text-gray-500 dark:text-[#F2F3F4] dark:text-opacity-40">
                        Senior Reporter
                    </p> -->
                </div>
            </div>
        
            <!-- Date Section -->
            <p class="mt-2 w-full max-w-[750px] text-[14px] text-gray-500 dark:text-[#F2F3F4] dark:text-opacity-40">
                <?php echo get_the_date('F j, Y'); ?>
            </p>
        </div>
    </div>
</header>

<main class="w-full flex items-center justify-center bg-[#f2f3f4] dark:bg-[#1B2228] pt-10 pb-14">
    <div class="w-full p-4 md:p-0 max-w-[750px]">
        <div class="mx-auto pt-10 self-center border-t-2">
            <div class="w-full max-w-none prose dark:prose-invert">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</main>

<hr class="border-none h-[1px] bg-[#cbd5e1]" />

<!-- Related Articles -->
<div class="w-full flex items-center justify-center bg-[#f2f3f4] dark:bg-[#1B2228]">
    <div class="xl:w-[70%] lg:w-[80%] w-[90%] flex justify-between items-center pt-[24px] pb-[0px]">
        <div class="text-[32px] font-bold">
            <p class="dark:text-white text-[#1B2228]">Related Articles</p>
            <hr class="w-[20%] border-none h-[6px] bg-red-700" />
        </div>
        <div class="flex items-center justify-center gap-2 text-[14px] text-[#4864C0] cursor-pointer">
            View more <i class="fas fa-arrow-right dark:text-white"></i>
        </div>
    </div>
</div>
<div class="w-full flex items-center justify-center bg-[#f2f3f4] dark:bg-[#1B2228]">
    <div class="xl:w-[70%] lg:w-[80%] w-[90%] grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-6 py-8">
        <?php
            global $post;

            $related_args = array(
                'post_type'      => 'post',
                'posts_per_page' => 3,
                'post__not_in'   => array( $post->ID ),
                'ignore_sticky_posts' => 1,
                'orderby'        => 'rand', // Randomize related posts
            );
            
            // Get the current post's categories and tags
            $categories = get_the_category( $post->ID );
            $tags = get_the_tags( $post->ID );
            
            // Build tax_query based on categories and tags
            if ( $categories || $tags ) {
                $tax_query = array('relation' => 'OR');
            
                if ( $categories ) {
                    $category_ids = array();
                    foreach( $categories as $category ) {
                        $category_ids[] = $category->term_id;
                    }
                    $tax_query[] = array(
                        'taxonomy' => 'category',
                        'field'    => 'term_id',
                        'terms'    => $category_ids,
                    );
                }
            
                if ( $tags ) {
                    $tag_ids = array();
                    foreach( $tags as $tag ) {
                        $tag_ids[] = $tag->term_id;
                    }
                    $tax_query[] = array(
                        'taxonomy' => 'post_tag',
                        'field'    => 'term_id',
                        'terms'    => $tag_ids,
                    );
                }
            
                $related_args['tax_query'] = $tax_query;
            }
            
            // Query related posts
            $related_query = new WP_Query( $related_args );
        ?>
        <?php while ( $related_query->have_posts() ) : $related_query->the_post(); ?>
            <?php Template::include('template-parts/archive/_entry-grid.php', [
                'show_category' => true,
                'hide_excerpt' => true,
            ]); ?>
        <?php endwhile; ?>

        <?php wp_reset_postdata(); ?>

    </div>
</div>

<hr class="border-none h-[1px] bg-[#cbd5e1]" />

<!-- Latest News -->
<div class="w-full flex items-center justify-center bg-[#f2f3f4] dark:bg-[#1B2228]">
    <div class="w-[90%] max-w-[1344px] flex justify-between items-center pt-[24px] pb-[0px]">
        <div class="text-[32px] font-bold">
            <p class="dark:text-white text-[#1B2228]">Latest News</p>
            <hr class="w-[20%] border-none h-[6px] bg-red-700" />
        </div>
        <div class="flex items-center justify-center gap-2 text-[14px] text-[#4864C0] cursor-pointer">
            View more <i class="fas fa-arrow-right dark:text-white"></i>
        </div>
    </div>
</div>
<div class="w-full flex items-center justify-center bg-[#f2f3f4] dark:bg-[#1B2228]">
    <div class="w-[90%] max-w-[1344px] grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6 py-8">
        <?php
            $args = array(
                'posts_per_page' => 8,
                'post_status'    => 'publish',
            );
            
            $latest_news_query = new WP_Query( $args );
        ?>
        <?php while ( $latest_news_query->have_posts() ) : $latest_news_query->the_post(); ?>
            <?php Template::include('template-parts/archive/_entry-grid.php', [
                'show_category' => true,
                'hide_excerpt' => true,
            ]); ?>
        <?php endwhile; ?>

        <?php wp_reset_postdata(); ?>
    </div>
</div>
