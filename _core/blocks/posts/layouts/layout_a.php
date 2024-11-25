<?php
    use Theme\Template;

    $layout_query = new WP_Query( $query );
?>

<main class="w-full flex items-center justify-center bg-[#f2f3f4] dark:bg-[#1B2228]">
    <div class="w-[90%] max-w-[1344px] grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6 py-8">

        <?php if ( $layout_query->have_posts() ) : ?>
            <?php while ( $layout_query->have_posts() ) : $layout_query->the_post(); ?>
                <?php Template::include('template-parts/archive/_entry-grid.php', [
                    'hide_excerpt' => true,
                ]); ?>
            <?php endwhile; ?>

            <?php wp_reset_postdata(); ?>
        <?php else : ?>
            <p class="md:p-3.5">Sorry, no posts matched your criteria.</p>
        <?php endif; ?>

    </div>
</main>
