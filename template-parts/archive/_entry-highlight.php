
<div class="w-full flex items-center justify-center bg-[#f2f3f4] dark:bg-[#1B2228]">
    <div class="w-[90%] max-w-[1344px]">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 text-gray-300 py-[24px]">
            <div class="flex justify-center">
                <a href="<?php echo esc_url( get_permalink() ); ?>">
                    <?php the_post_thumbnail('thumbnail_hero_cropped'); ?>
                </a>
            </div>
            <div class="flex items-start justify-center flex-col text-black">
                <?php if ( isset( $category ) ) : ?>
                    <p class="text-[14px] text-[#4864C0]">
                        <?php echo $category; ?>
                    </p>
                <?php endif; ?>
                <h3 class="text-[24px] md:text-[48px] text-[#1B2228] mt-3 font-bold leading-[28px] md:leading-[52px] font-roboto-serif dark:text-white">
                    <a href="<?php echo esc_url( get_permalink() ); ?>">
                        <?php the_title(); ?>
                    </a>
                </h3>
                <p class="text-[12px] md:text-[14px] text-[#71767A] mt-3">
                    <?php echo get_the_date('F j, Y'); ?>
                </p>
                <p class="text-[16px] text-black dark:text-white mt-1">
                    <?php scs_the_excerpt_with_char_limit(250); ?>
                </p>
            </div>
        </div>
    </div>
</div>
