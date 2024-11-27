<?php
    use Theme\Template;

    $layout_query = new WP_Query( $query );
?>

<main>
    <div class="splide carousel">
        <div class="splide__track">
            <ul class="splide__list items-stretch">

                <?php if ( $layout_query->have_posts() ) : ?>
                    <?php while ( $layout_query->have_posts() ) : $layout_query->the_post(); ?>
                        <li class="splide__slide">
                            <div class="h-full">
                                <?php Template::include('template-parts/archive/_entry-highlight.php', [
                                    'show_category' => true,
                                ]); ?>
                            </div>
                        </li>
                    <?php endwhile; ?>

                    <?php wp_reset_postdata(); ?>
                <?php else : ?>
                    <p class="md:p-3.5">Sorry, no posts matched your criteria.</p>
                <?php endif; ?>

            </ul>
        </div>
    </div>
</main>
