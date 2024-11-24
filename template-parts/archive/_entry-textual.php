
<div class="border-b border-gray-300 pb-5">
    <h2 class="text-[32px] font-medium text-black dark:text-white font-roboto-serif">
        <a href="<?php echo esc_url( get_permalink() ); ?>" class="hover:underline">
            <?php the_title(); ?>
        </a>
    </h2>
    <p class="text-sm text-gray-500 dark:text-gray-400 mb-2">
        <?php echo get_the_date('F j, Y'); ?>
    </p>
    <p class="text-gray-700 dark:text-gray-300">
        <?php scs_the_excerpt_with_char_limit(); ?>
    </p>
</div>
