<?php
    use Theme\Template;

    $title = get_field( 'title' );
    $view_more_url = get_field( 'view_more_url' );
    $layout = get_field( 'layout' );
    $number_of_posts = get_field( 'number_of_posts' );

    $query = array(
        'posts_per_page' => $number_of_posts,
        'post_status'    => 'publish',
    );
?>

<section>

    <?php if ( $title ) : ?>
        <header class="w-full flex items-center justify-center bg-[#f2f3f4] dark:bg-[#1B2228]">
            <div class="w-[90%] max-w-[1344px] flex justify-between items-center pt-[24px] pb-[16px]">
                <div class="text-[32px] font-bold">
                    <p class="dark:text-white text-[#1B2228]">
                        <?php echo $title; ?>
                    </p>
                    <hr class="w-[60%] border-none h-[6px] bg-[#2D5599]" />
                </div>
                <div class="flex items-center justify-center gap-2 text-[14px] text-[#4864C0] cursor-pointer">
                    <?php if ( $view_more_url ) : ?>
                        <a href="<?php echo $view_more_url; ?>">
                            View more <i class="fas fa-arrow-right dark:text-white"></i>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </header>
    <?php endif; ?>

    <?php if ( $layout === 'layout_a' ) : ?>
        <?php Template::include('_core/blocks/posts/layouts/layout_a.php', [ 'query' => $query ]); ?>
    <?php endif; ?>

    <?php if ( $layout === 'layout_b' ) : ?>
        <?php Template::include('_core/blocks/posts/layouts/layout_b.php', [ 'query' => $query ]); ?>
    <?php endif; ?>

</section>
