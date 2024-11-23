
<div class="flex flex-col md:flex-row items-start gap-4 md:gap-12 justify-between">
    <div class="w-full md:w-[30%]">
        <a href="<?php echo esc_url( get_permalink() ); ?>" class="block w-full">
            <?php the_post_thumbnail('thumbnail_small_cropped', [ 'class' => 'w-full h-48 object-cover rounded' ]); ?>
        </a>
    </div>
    <div class="p-4 w-full md:w-[70%]">
        <h2 class="text-[24px] md:text-[32px] font-medium text-black dark:text-white font-roboto-serif">
            <a href="<?php echo esc_url( get_permalink() ); ?>">
                <?php the_title(); ?>
            </a>
        </h2>
        <p class="text-sm text-gray-500 dark:text-gray-400 mb-2">
            <?php echo get_the_date('F j, Y'); ?>
        </p>
        <p class="text-gray-700 dark:text-gray-300 mt-4">
            <?php scs_the_excerpt_with_char_limit(); ?>
        </p>
    </div>
</div>
