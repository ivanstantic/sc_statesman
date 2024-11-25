<?php
    use Theme\Template;

    $layout_query = new WP_Query( $query );
?>

<main class="w-full flex items-center justify-center bg-[#f2f3f4] dark:bg-[#1B2228]">
    <div class="w-[90%] max-w-[1344px] md:flex md:items-start md:justify-between md:gap-10 pt-[16px] pb-[24px]">

        <?php if ( $layout_query->have_posts() ) : ?>
            <?php
                $post_counter = 0;
                $grid_wrapper_open = false;
            ?> 
                <?php while ( $layout_query->have_posts() ) : $layout_query->the_post(); ?>
                    <?php $post_counter++; ?>
                    <?php if ( $post_counter === 1 ) : ?>

                        <div class="lg:flex-5 w-full md:w-[50%] mb-4">
                            <div class="overflow-hidden rounded-lg ">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/grid/grid-1.png" alt="Hurricane Florence" class="w-full h-250 md:h-120 lg:h-100 object-cover" />
                                <div class="p-4">
                                    <h2 class="text-[24px] md:text-[28px] lg:text-[32px] font-extrabold mb-2 dark:text-white">
                                        <a href="<?php echo esc_url( get_permalink() ); ?>" class="hover:underline">
                                            <?php the_title(); ?>
                                        </a>
                                    </h2>
                                    <p class="text-sm text-[#71767A] mt-2">
                                        <?php echo get_the_date('F j, Y'); ?>
                                    </p>
                                    <p class="text-[16px] text-black dark:text-white mt-1">
                                        <?php scs_the_excerpt_with_char_limit(250); ?>
                                    </p>
                                </div>
                            </div>
                        </div>

                    <?php else : ?>
                        <?php if ( !$grid_wrapper_open ) : ?>
                            <?php $grid_wrapper_open = true; ?>
                            <div class="w-full md:w-[50%] grid grid-cols-1 sm:grid-cols-2 gap-x-10 gap-y-6 lg:flex-2">
                        <?php endif; ?>

                        <div>
                            <?php Template::include('template-parts/archive/_entry-grid.php', [
                                'hide_excerpt' => true,
                            ]); ?>
                        </div>
                    <?php endif; ?>
                <?php endwhile; ?>

                <?php if ( $grid_wrapper_open ) : ?>
                    </div>
                <?php endif; ?>
        <?php else : ?>
            <p class="md:p-3.5">Sorry, no posts matched your criteria.</p>
        <?php endif; ?>

    </div>
</main>
