<?php
global $wp_query;

$pagination_args = [
    'mid_size'  => 2,
    'prev_text' => __( '« Previous', 'textdomain' ),
    'next_text' => __( 'Next »', 'textdomain' ),
    'before_page_number' => '<span class="px-3 py-2 sm:mb-0 mb-2 bg-gray-200 dark:bg-[#1B2228] text-[#1B2228] dark:text-[#F2F3F4] rounded border border-gray-300 dark:border-gray-600">',
    'after_page_number'  => '</span>',
];

if ( isset($custom_query) ) {
    $pagination_args['total'] = $custom_query->max_num_pages;
    $pagination_args['current'] = (get_query_var('paged')) ? get_query_var('paged') : 1;
}
?>

<div class="flex flex-wrap  flex-col sm:flex-row items-center lg:justify-start justify-center mt-8 mb-8 space-y-4 sm:space-y-0">
    <nav class="flex flex-wrap justify-center sm:justify-start space-x-2">
        <?php echo paginate_links( $pagination_args ); ?>
    </nav>
</div>
