<article class="mx-auto">

    <header class="mx-auto max-w-[848px] mb-1.5">

        <!-- Title -->
        <h1 class="mb-5 text-3xl md:text-5xl font-new-order font-bold text-hc-gray-dark">
            <?php the_title(); ?>
        </h1>

    </header>
    
    <!-- Featured Image -->
    <?php if (has_post_thumbnail()) : ?>
        <div class="max-w-7xl mb-6">
            <?php the_post_thumbnail('thumbnail_single'); ?>
        </div>
    <?php endif; ?>

    <div class="mx-auto max-w-[848px]">

        <!-- Content -->
        <div class="mt-16 prose md:prose-xl font-plus-jakarta">
            <?php the_content(); ?>
        </div>
    </div>

</article>
