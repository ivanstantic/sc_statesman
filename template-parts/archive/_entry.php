<?php
use Theme\Template;
?>

<div class="h-full flex flex-col rounded-3xl overflow-hidden font-plus-jakarta <?php echo join(' ', [
    $bg_color,
    $text_color,
]); ?>">

    <!-- Thumbnail -->
    <figure>
        <?php the_post_thumbnail('thumbnail_square_cropped'); ?>
    </figure>

    <div class="h-full p-7 flex flex-col">

        <!-- Meta -->
        <header class="flex justify-between items-center">
            <p><?php echo get_the_date('j F Y'); ?></p>
            <p>by <a href="<?php echo hc_get_author_url(); ?>" class="underline"><?php the_author(); ?></a></p>
        </header>

        <main>
            <!-- Title -->
            <h3 class="pt-6 pb-4 text-3xl font-new-order font-bold tracking-wide">
                <a href="<?php echo esc_url( get_permalink() ); ?>">
                    <?php the_title(); ?>
                </a>
            </h3>
            <!-- Excerpt -->
            <p class="pb-7 font-plus-jakarta">
                <?php hc_the_excerpt_with_char_limit(); ?>
            </p>
        </main>
        
        <footer class="mt-auto flex flex-wrap justify-between items-center">
            <!-- Call To Action -->
            <a
                href="<?php echo esc_url( get_permalink() ); ?>"
                class="entry__read-more py-3 px-5 rounded-full font-new-order font-semibold tracking-widest <?php echo join(' ', [$cta_bg_color, $cta_text_color]); ?>"
            >
                READ MORE
                <?php Template::include('template-parts/icons/arrow-right.php'); ?>
            </a>
            <!-- Reading time -->
            <p class="my-2">
                <?php hc_the_reading_time(); ?> minute read
            </p>
        </footer>
    </div>

</div>
