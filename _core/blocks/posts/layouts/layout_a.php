<?php
    use Theme\Template;

    $layout_query = new WP_Query( $query );
?>

<main>
    <?php if ( $layout_query->have_posts() ) : ?>
        <?php while ( $layout_query->have_posts() ) : $layout_query->the_post(); ?>
            <?php Template::include('template-parts/archive/_entry-highlight.php', [
                'show_category' => true,
            ]); ?>
        <?php endwhile; ?>

        <?php wp_reset_postdata(); ?>
    <?php else : ?>
        <p class="md:p-3.5">Sorry, no posts matched your criteria.</p>
    <?php endif; ?>
</main>
