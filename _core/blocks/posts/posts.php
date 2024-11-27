<?php
    use Theme\Template;

    $title = get_field( 'title' );
    $view_more_url = get_field( 'view_more_url' );
    $layout = get_field( 'layout' );

    $posts_per_page = get_field( 'posts_per_page' );
    $post_type = get_field('post_type');
    $order = get_field('order');
    $category_list = get_field('category_list');
    $category_list_operator = get_field('category_list_operator');
    $tag_list = get_field('tag_list');
    $tag_list_operator = get_field('tag_list_operator');
    $posts_list = get_field('post__in');
    $exclude_posts_list = get_field('post__not_in');
    $offset = get_field('offset');

    $query = array(
        'post_type'      => $post_type,
        'posts_per_page' => isset( $posts_per_page ) ? $posts_per_page : 1,
        'post_status'    => 'publish',
        'order'          => $order,
    );

    if ( !empty( $category_list ) ) {
        $query[$category_list_operator] = $category_list;
    }

    if ( !empty( $tag_list ) ) {
        $query[$tag_list_operator] = $tag_list;
    }

    if ( !empty( $posts_list ) ) {
        $query['post__in'] = $posts_list;
    }

    if ( !empty( $exclude_posts_list ) ) {
        $query['post__not_in'] = $exclude_posts_list;
    }

    if ( !empty( $offset ) ) {
        $query['offset'] = $offset;
    }
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

    <?php if ( $layout === 'layout_c' ) : ?>
        <?php Template::include('_core/blocks/posts/layouts/layout_c.php', [ 'query' => $query ]); ?>
    <?php endif; ?>

    <hr class="border-none h-[2px] bg-red-700" />

</section>
