<?php
$pagination_args = [
    'mid_size'  => 2,
    'prev_text' => __( '« Previous', 'textdomain' ),
    'next_text' => __( 'Next »', 'textdomain' ),
    'before_page_number' => '<span class="inline-block mx-0.5 min-w-8 px-2.5 py-1.5 rounded bg-hc-gray-dark text-center text-white font-semibold">',
    'after_page_number'  => '</span>',
];

if ( isset($custom_query) ) {
    $pagination_args['total'] = $custom_query->max_num_pages;
    $pagination_args['current'] = (get_query_var('paged')) ? get_query_var('paged') : 1;
}
?>

<div class="w-full flex justify-center items-center mt-5 font-plus-jakarta">
    <nav class="navigation pagination">
        <?php echo paginate_links( $pagination_args ); ?>
    </nav>
</div>
