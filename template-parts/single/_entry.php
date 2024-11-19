<article class="mx-auto">

    <header class="mx-auto max-w-[848px] mb-1.5">

        <!-- Categories -->
        <?php if (!empty(get_the_category())) : ?>
            <div class="mb-4 md:text-xl font-inter font-semibold">
                <?php the_category(', '); ?>
            </div>
        <?php endif; ?>

        <!-- Title -->
        <h1 class="mb-5 text-3xl md:text-5xl font-new-order font-bold text-hc-gray-dark">
            <?php the_title(); ?>
        </h1>

        <!-- Meta -->
        <div class="flex items-center justify-between py-2.5">
            <div class="font-plus-jakarta text-hc-gray">
                <?php the_date('j F Y'); ?>
            </div>
            <div class="flex items-center">
                <div>
                    by <a href="<?php echo hc_get_author_url(); ?>" class="font-bold underline"><?php the_author(); ?></a>
                </div>
                <div class="ml-2.5">
                    <?php echo get_avatar(get_the_author_meta('ID'), 41, '', '', [
                        'class' => 'rounded-lg',
                    ]); ?>
                </div>
            </div>
        </div>

    </header>
    
    <!-- Featured Image -->
    <?php if (has_post_thumbnail()) : ?>
        <div class="max-w-7xl mb-6">
            <?php the_post_thumbnail('thumbnail_single'); ?>
        </div>
    <?php endif; ?>

    <div class="mx-auto max-w-[848px]">

        <!-- Estimated Reading Time -->
        <div class="flex justify-center items-center font-plus-jakarta">
            <img
                src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/clock.svg"
                alt="Estimated Read Time"
                class="w-[18px] h-[18px] mr-1"
            />
            <?php hc_the_reading_time(); ?> minute read
        </div>

        <!-- Content -->
        <div class="mt-16 prose md:prose-xl font-plus-jakarta">
            <?php the_content(); ?>
        </div>
    </div>

</article>
