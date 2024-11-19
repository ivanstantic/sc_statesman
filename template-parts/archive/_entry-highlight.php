<?php
use Theme\Template;
?>

<article class="w-full mb-12 rounded-3xl overflow-hidden md:flex md:p-3.5 md:mb-16 md:rounded-none">

    <!-- Thumbnail -->
    <div class="md:w-1/2">
        <?php the_post_thumbnail('thumbnail_landscape_cropped'); ?>
    </div>

    <!-- Meta -->
    <div class="p-7 bg-hc-gray-light md:w-1/2 md:flex md:justify-end md:p-0 md:bg-transparent">
        <div class="md:w-11/12">
            <div class="flex justify-between items-center">
                <p><?php the_date('j F Y'); ?></p>
                <p>by <a href="<?php echo hc_get_author_url(); ?>" class="underline"><?php the_author(); ?></a></p>
            </div>
            <h3 class="font-new-order font-bold text-3xl pt-6 pb-4 lg:text-5xl lg:leading-[1.15]">
                <a href="<?php echo esc_url( get_permalink() ); ?>">
                    <?php the_title(); ?>
                </a>
            </h3>
            <p class="pb-7 font-plus-jakarta">
                <?php hc_the_excerpt_with_char_limit(250); ?>
            </p>
            <div class="flex flex-wrap justify-between items-center">
                <a
                    href="<?php echo esc_url( get_permalink() ); ?>"
                    class="py-3 px-5 rounded-full bg-[#121212] text-white font-new-order font-semibold tracking-widest md:px-0 md:bg-transparent md:text-black"
                >
                    READ MORE
                    <?php Template::include('template-parts/icons/arrow-right.php'); ?>
                </a>
                <p class="my-2">
                    <?php hc_the_reading_time(); ?> minute read
                </p>
            </div>
        </div>
    </div>

</article>
