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
                            <?php Template::include('template-parts/archive/_entry-grid.php', [
                                'thumbnail_size' => 'thumbnail_hero_cropped',
                                'excerpt_length' => 250,
                            ]); ?>
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
