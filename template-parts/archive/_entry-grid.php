
<div class="dark:bg-[#1B2228] overflow-hidden">
    <div class="flex justify-center">
        <a href="<?php echo esc_url( get_permalink() ); ?>" class="block w-full aspect-video">            
            <?php the_post_thumbnail('thumbnail_small_cropped', [ 'class' => 'w-full h-full object-cover' ]); ?> 
        </a>
    </div>
    <div class="py-4">
        <h3 class="text-[20px] font-semibold text-gray-800 dark:text-white leading-[24px] font-roboto-serif">
            <a href="<?php echo esc_url( get_permalink() ); ?>" class="hover:underline">
                <?php the_title(); ?>
            </a>
        </h3>
        <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">
            <?php echo get_the_date('F j, Y'); ?>
        </p>
        <?php if ( ! isset( $hide_excerpt ) || ! $hide_excerpt ) : ?>
            <p class="text-[16px] text-black dark:text-white mt-1">
                <?php scs_the_excerpt_with_char_limit(); ?>
            </p>
        <?php endif; ?>
    </div>
</div>
