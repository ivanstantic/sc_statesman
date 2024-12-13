
<?php
use Theme\Template;

$is_title_bold = get_field( "is_title_bold" ) ?? true;
$subtitle = get_field( "subtitle" );

var_dump(get_field("featured"));
?>

<!-- Article Header -->
<header class="w-full flex items-center justify-center bg-[#f2f3f4] dark:bg-[#1B2228]">
    <div class="w-full p-4 md:p-0 max-w-[1344px]">
        <div class="flex justify-center items-center flex-col mt-[3rem]">

            <!-- Header Section -->
            <div class="w-full max-w-[966px] m-x-auto">
                <?php if ( !empty(scs_get_the_category()) ) : ?>
                    <div class="text-[#4864c0] text-[14px] font-bold font-roboto-serif">
                        <?php scs_the_category(', '); ?>
                    </div>
                <?php endif; ?>
                <h1 class="mt-2 text-[2rem] sm:text-[2.5rem] md:text-[2.5rem] lg:text-[3rem] leading-[52px] dark:text-[#F2F3F4] <?php echo join(' ', [
                    $is_title_bold ? "font-bold" : "",
                ]); ?>">
                    <?php the_title(); ?>
                </h1>
                <?php if ( $subtitle ) : ?>
                    <p class="text-gray-600 mt-2 text-[20px] dark:text-white">
                        <?php echo $subtitle; ?>
                    </p>
                <?php endif; ?>
            </div>

            <!-- Image Section -->
            <?php if ( has_post_thumbnail() ) : ?>
                <div class="mt-6 w-full max-w-[996px] aspect-[996/474] overflow-hidden">
                    <?php the_post_thumbnail('thumbnail_single', [ 'class' => 'w-full h-full object-cover rounded-lg shadow-lg' ]); ?>
                </div>
            <?php endif; ?>
            
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
    <div class="relative w-full flex flex-col lg:flex-row justify-center items-center p-4 md:p-0 max-w-[750px] lg:max-w-[996px]">
        <div class="mb-2 static flex self-start gap-2 lg:mb-0 lg:absolute lg:left-0 lg:top-0 lg:flex-col lg:self-auto text-[#1b2229] dark:text-[#F2F3F4]">
            <div class="w-9 h-9 border border-[#494E53] flex items-center justify-center">
                <a
                    href="https://twitter.com/intent/tweet?url=<?php echo urlencode(get_permalink()); ?>&text=<?php echo urlencode(get_the_title()); ?>"
                    target="_blank"
                    rel="noopener noreferrer"
                    aria-label="Share on Twitter"
                >
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.6763 10.6587L20.2294 3.19922H18.677L12.9846 9.67485L8.44148 3.19922H3.2002L10.0718 12.9924L3.2002 20.8139H4.75252L10.76 13.9739L15.5589 20.8139H20.8002M5.31278 4.34557H7.69758L18.6759 19.7239H16.2905" />
                    </svg>
                </a>
            </div>
            <div class="w-9 h-9 border border-[#494E53] flex items-center justify-center">
                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>" target="_blank" rel="noopener noreferrer" aria-label="Share on Facebook">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20.626 2.625H3.37598C2.96113 2.625 2.62598 2.96016 2.62598 3.375V20.625C2.62598 21.0398 2.96113 21.375 3.37598 21.375H20.626C21.0408 21.375 21.376 21.0398 21.376 20.625V3.375C21.376 2.96016 21.0408 2.625 20.626 2.625ZM18.4604 8.09766H16.9627C15.7885 8.09766 15.5611 8.65547 15.5611 9.47578V11.2828H18.3643L17.9986 14.1117H15.5611V21.375H12.6385V14.1141H10.1939V11.2828H12.6385V9.19687C12.6385 6.77578 14.1174 5.45625 16.2783 5.45625C17.3143 5.45625 18.2025 5.53359 18.4627 5.56875V8.09766H18.4604Z" />
                    </svg>
                </a>
            </div>
            <div class="w-9 h-9 border border-[#494E53] flex items-center justify-center">
                <a href="#" onclick="window.print()">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19 11C19 11.5523 18.5523 12 18 12C17.4477 12 17 11.5523 17 11C17 10.4477 17.4477 10 18 10C18.5523 10 19 10.4477 19 11Z" />
                        <path d="M8.25 16C8.25 15.5858 8.58579 15.25 9 15.25H15C15.4142 15.25 15.75 15.5858 15.75 16C15.75 16.4142 15.4142 16.75 15 16.75H9C8.58579 16.75 8.25 16.4142 8.25 16Z" />
                        <path d="M9 17.25C8.58579 17.25 8.25 17.5858 8.25 18C8.25 18.4142 8.58579 18.75 9 18.75H15C15.4142 18.75 15.75 18.4142 15.75 18C15.75 17.5858 15.4142 17.25 15 17.25H9Z" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.5 2.25C6.25736 2.25 5.25 3.25736 5.25 4.5V7.25H4.5C3.25736 7.25 2.25 8.25736 2.25 9.5V16.5C2.25 17.7426 3.25736 18.75 4.5 18.75H5.25V19.5C5.25 20.7426 6.25736 21.75 7.5 21.75H16.5C17.7426 21.75 18.75 20.7426 18.75 19.5V18.75H19.5C20.7426 18.75 21.75 17.7426 21.75 16.5V9.5C21.75 8.25736 20.7426 7.25 19.5 7.25H18.75V4.5C18.75 3.25736 17.7426 2.25 16.5 2.25H7.5ZM17.25 7.25V4.5C17.25 4.08579 16.9142 3.75 16.5 3.75H7.5C7.08579 3.75 6.75 4.08579 6.75 4.5V7.25H17.25ZM18.75 17.25H19.5C19.9142 17.25 20.25 16.9142 20.25 16.5V9.5C20.25 9.08579 19.9142 8.75 19.5 8.75H4.5C4.08579 8.75 3.75 9.08579 3.75 9.5V16.5C3.75 16.9142 4.08579 17.25 4.5 17.25H5.25V14.5C5.25 13.2574 6.25736 12.25 7.5 12.25H16.5C17.7426 12.25 18.75 13.2574 18.75 14.5V17.25ZM6.75 14.5C6.75 14.0858 7.08579 13.75 7.5 13.75H16.5C16.9142 13.75 17.25 14.0858 17.25 14.5V19.5C17.25 19.9142 16.9142 20.25 16.5 20.25H7.5C7.08579 20.25 6.75 19.9142 6.75 19.5V14.5Z" />
                    </svg>
                </a>
            </div>
            <div class="w-9 h-9 border border-[#494E53] flex items-center justify-center">
                <a href="mailto:?subject=<?php echo urlencode(get_the_title()); ?>&body=<?php echo urlencode(get_permalink()); ?>"  aria-label="Share via Email">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.5 5.25C3.25736 5.25 2.25 6.25736 2.25 7.5V8.99921C2.25 8.99918 2.25 8.99925 2.25 8.99921V16.5C2.25 17.7426 3.25736 18.75 4.5 18.75H19.5C20.7426 18.75 21.75 17.7426 21.75 16.5V9.01475C21.7502 9.00444 21.7502 8.99412 21.75 8.98379V7.5C21.75 6.25736 20.7426 5.25 19.5 5.25H4.5ZM20.25 8.59862V7.5C20.25 7.08579 19.9142 6.75 19.5 6.75H4.5C4.08579 6.75 3.75 7.08579 3.75 7.5V8.59852L12.0001 14.0986L20.25 8.59862ZM3.75 10.4013V16.5C3.75 16.9142 4.08579 17.25 4.5 17.25H19.5C19.9142 17.25 20.25 16.9142 20.25 16.5V10.4014L12.4161 15.624C12.1642 15.7919 11.836 15.7919 11.5841 15.624L3.75 10.4013Z" />
                    </svg>
                </a>
            </div>
        </div>
        <div class="relative w-full max-w-[750px]">
            <div class="mx-auto pt-10 self-center border-t-2">
                <div class="w-full max-w-none prose dark:prose-invert">
                    <?php the_content(); ?>
                </div>
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
